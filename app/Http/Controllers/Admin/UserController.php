<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\User;
use App\Models\Transaction;
use App\Models\UserPackage;
use App\Models\AdminCode;
use Carbon\Carbon;
use App\Helpers\RoiHelper;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Show user dashboard with active packages and recent transactions.
     */
    public function dashboard()
    {
        $packages = Package::where('is_active', 1)->get();
        $allTransactions = Transaction::where('user_id', auth()->id())->get();
        $recentTransactions = Transaction::where('user_id', auth()->id())
            ->latest()->take(5)->get();
        $user = auth()->user();
        $balance = $user->wallets->sum(function($wallet) {
            return $wallet->type === 'credit' ? $wallet->amount : -$wallet->amount;
        });
        return view('user.user', compact('packages', 'recentTransactions', 'allTransactions', 'balance'));
    }

    /**
     * Show buy package page with selected package.
     */
    public function showBuyPage($id)
    {
        $package = Package::findOrFail($id);
        return view('user.pages.buy_package', compact('package'));
    }
    
    /**
     * Buy a package using E-pin code.
     */
    public function buyWithCode(Request $request)
    {
        $request->validate([
            'package_id' => 'required|exists:packages,id',
            'secret_code' => 'required|string|min:6|max:20',
        ]);

        $epin = \App\Models\Epin::where('code', $request->secret_code)
            ->where('status', 'active')
            ->where(function($query) {
                $query->whereNull('expiry_date')->orWhere('expiry_date', '>=', now());
            })
            ->first();

        if (!$epin) {
            return back()->with('error', 'Invalid, expired, or already used E-pin.');
        }

        $user = auth()->user();
        $package = \App\Models\Package::findOrFail($request->package_id);

        // Prevent duplicate package purchase
        if (\App\Models\UserPackage::where('user_id', $user->id)->where('package_id', $package->id)->exists()) {
            return back()->with('error', 'Package already purchased or requested.');
        }

        try {
            \DB::beginTransaction();

            $startDate = \Carbon\Carbon::today();
            $endDate = $startDate->copy()->addDays($package->validity_days - 1);

            $roiDates = \App\Helpers\RoiHelper::generateRoiDates(
                $startDate,
                $package->validity_days,
                $package->type_of_investment_days,
                [
                    'daily_days' => $package->daily_days,
                    'weekly_day' => $package->weekly_day,
                    'monthly_date' => $package->monthly_date,
                ]
            );

            // Save purchased package
            \App\Models\UserPackage::create([
                'user_id' => $user->id,
                'package_id' => $package->id,
                'start_date' => $startDate->toDateString(),
                'end_date' => $endDate->toDateString(),
                'roi_dates' => json_encode($roiDates),
                'total_roi_given' => 0,
                'is_active' => true,
                'source' => 'epin',
            ]);

            // Mark the E-pin as used and assign to user
            $epin->status = 'used';
            $epin->user_id = $user->id;
            $epin->used_at = now();
            $epin->save();

            \DB::commit();
            return redirect()->route('user')->with('success', 'Package bought successfully using E-pin.');

        } catch (\Exception $e) {
            \DB::rollBack();
            \Log::error('BuyWithCode error: ' . $e->getMessage());
            return back()->with('error', 'Something went wrong. Please try again later.');
        }
    }

    /**
     * Send a buy request to admin for approval.
     */
    public function buyWithRequest(Request $request)
    {
        $request->validate([
            'package_id' => 'required|exists:packages,id',
        ]);

        $user = auth()->user();
        $package = Package::findOrFail($request->package_id);

        // Prevent duplicate request
        if (UserPackage::where('user_id', $user->id)->where('package_id', $package->id)->exists()) {
            return back()->with('error', 'Package already purchased or requested.');
        }

        Transaction::create([
            'user_id' => $user->id,
            'package_id' => $package->id,
            'status' => 'pending',
            'amount' => $package->amount,
            'type' => 'buy_request',
            'message' => 'User requested package approval.',
        ]);

        return redirect()->route('user')->with('success', 'Buy request sent to admin.');
    }

    public function wallet()
    {
        $user = auth()->user();
        $wallets = $user->wallets()->latest()->get();
        $balance = $wallets->sum(function($wallet) {
            return $wallet->type === 'credit' ? $wallet->amount : -$wallet->amount;
        });
        $afterBalance = $balance; // You can adjust this logic as needed

        return view('user.pages.wallet', compact('wallets', 'balance', 'afterBalance'));
    }

    public function blank()
    {
        $user = auth()->user();
        $balance = $user->wallets->sum(function($wallet) {
            return $wallet->type === 'credit' ? $wallet->amount : -$wallet->amount;
        });
        return view('user.pages.blank', compact('balance'));
    }

    public function transfer(Request $request)
    {
        $ethBalance = 2.56213968;
        $ethInrRate = 250000;
        $ethUsdRate = 3941.23;
        $ethInrValue = $ethBalance * $ethInrRate;
        $ethUsdValue = $ethBalance * $ethUsdRate;
        $convertedInr = $request->query('amount_inr');
        return view('user.pages.transfer', compact('ethBalance', 'ethInrValue', 'ethUsdValue', 'convertedInr'));
    }

    public function showProfile()
    {
        $user = auth()->user();
        $transactions = $user->transactions; // adjust as per your relation

        return view('user.pages.profile', compact('user', 'transactions'));
    }

    public function profile()
    {
        $user = Auth::user();
        // Agar aapko transactions bhi chahiye toh:
        $transactions = $user->transactions ?? [];
        return view('user.pages.profile', compact('user', 'transactions'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'full_name'   => 'required|string|max:255',
            'email'       => 'required|email|max:255|unique:users,email,' . $user->id,
            'mobile_no'   => 'nullable|string|max:20',
            'city'        => 'nullable|string|max:100',
            'state'       => 'nullable|string|max:100',
            'country'     => 'nullable|string|max:100',
            'profile_image' => 'nullable|image|max:2048',
        ]);

        $user->full_name = $request->full_name;
        $user->email     = $request->email;
        $user->mobile_no = $request->mobile_no;
        $user->city      = $request->city;
        $user->state     = $request->state;
        $user->country   = $request->country;

        // Profile image upload
        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile_image = $image;
        }

        $user->save();

        return back()->with('success', 'Profile updated successfully!');
    }

    public function updateBank(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'bank_name'      => 'required|string|max:255',
            'account_number' => 'required|string|max:255',
            // Add more validation as needed
        ]);
        $user->bank_name      = $request->bank_name;
        $user->account_number = $request->account_number;
        // Add more fields as needed
        $user->save();

        return back()->with('success', 'Bank details updated!');
    }

    public function updateContact(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'phone'   => 'required|string|max:20',
            'address' => 'required|string|max:255',
            // Add more validation as needed
        ]);
        $user->phone   = $request->phone;
        $user->address = $request->address;
        // Add more fields as needed
        $user->save();

        return back()->with('success', 'Contact details updated!');
    }
}
