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
     * Buy a package using secret admin code.
     */
    public function buyWithCode(Request $request)
    {
        $request->validate([
            'package_id' => 'required|exists:packages,id',
            'secret_code' => 'required|string|min:6|max:20',
        ]);

        $code = AdminCode::where('code', $request->secret_code)
                         ->where('is_used', false)
                         ->first();

        if (!$code) {
            return back()->with('error', 'Invalid or already used code.');
        }

        $user = auth()->user();
        $package = Package::findOrFail($request->package_id);

        // Prevent duplicate package purchase
        if (UserPackage::where('user_id', $user->id)->where('package_id', $package->id)->exists()) {
            return back()->with('error', 'Package already purchased or requested.');
        }

        try {
            \DB::beginTransaction();

            $startDate = Carbon::today();
            $endDate = $startDate->copy()->addDays($package->validity_days - 1);

            $roiDates = RoiHelper::generateRoiDates(
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
            UserPackage::create([
                'user_id' => $user->id,
                'package_id' => $package->id,
                'start_date' => $startDate->toDateString(),
                'end_date' => $endDate->toDateString(),
                'roi_dates' => json_encode($roiDates),
                'total_roi_given' => 0,
                'is_active' => true,
                'source' => 'admin_code',
            ]);

            // Mark the code as used
            $code->is_used = true;
            $code->used_by = $user->id;
            $code->save();

            \DB::commit();
            return redirect()->route('user')->with('success', 'Package bought successfully using admin code.');

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
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile_no' => 'required|string|max:20',
            'referral_id' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'profile_image' => 'nullable|image|max:2048',
        ]);
        $user->full_name = $request->full_name;
        $user->email = $request->email;
        $user->mobile_no = $request->mobile_no;
        $user->referral_id = $request->referral_id;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->country = $request->country;
        if ($request->hasFile('profile_image')) {
            $path = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile_image = $path;
        }
        $user->save();
        return back()->with('success', 'Profile updated!');
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

    public function updateKyc(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'aadhaar_front' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:4096',
            'aadhaar_back'  => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:4096',
            'pan_card'      => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:4096',
            'driving_front' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:4096',
            'driving_back'  => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:4096',
        ]);

        if ($request->hasFile('aadhaar_front')) {
            $user->aadhaar_front = $request->file('aadhaar_front')->store('kyc_documents', 'public');
        }
        if ($request->hasFile('aadhaar_back')) {
            $user->aadhaar_back = $request->file('aadhaar_back')->store('kyc_documents', 'public');
        }
        if ($request->hasFile('pan_card')) {
            $user->pan_card = $request->file('pan_card')->store('kyc_documents', 'public');
        }
        if ($request->hasFile('driving_front')) {
            $user->driving_front = $request->file('driving_front')->store('kyc_documents', 'public');
        }
        if ($request->hasFile('driving_back')) {
            $user->driving_back = $request->file('driving_back')->store('kyc_documents', 'public');
        }

        $user->kyc_status = 'pending'; // new upload => pending
        $user->save();

        return back()->with('success', 'KYC documents uploaded! Status: Pending');
    }

    public function kycForm() {
        $user = Auth::user();
        return view('user.pages.kyc', compact('user'));
    }

    public function kycSubmit(Request $request)
    {
        $request->validate([
            'kyc_type' => 'required|in:aadhaar,pan,dl',
            'selfie' => 'required|image|max:2048',

            'aadhaar_number' => 'required_if:kyc_type,aadhaar|nullable|digits:12',
            'pan_number' => 'required_if:kyc_type,pan|nullable|string|max:10',
            'dl_number' => 'required_if:kyc_type,dl|nullable|string|max:20',

            'front_image' => 'required|image|max:4096',
            'back_image' => 'required|image|max:4096',
        ]);

        $user = Auth::user();

        if ($request->kyc_type == 'aadhaar') {
            $user->aadhaar = $request->aadhaar_number;
        } elseif ($request->kyc_type == 'pan') {
            $user->pan = $request->pan_number;
        } elseif ($request->kyc_type == 'dl') {
            $user->dl = $request->dl_number;
        }

        if ($request->hasFile('selfie')) {
            $user->kyc_selfie = $request->file('selfie')->store('kyc_selfies', 'public');
        }
        if ($request->hasFile('front_image')) {
            $user->kyc_front = $request->file('front_image')->store('kyc_documents', 'public');
        }
        if ($request->hasFile('back_image')) {
            $user->kyc_back = $request->file('back_image')->store('kyc_documents', 'public');
        }

        $user->kyc_status = 'pending';
        $user->save();

        return back()->with('success', 'KYC submitted! Status: Pending');
    }
}
