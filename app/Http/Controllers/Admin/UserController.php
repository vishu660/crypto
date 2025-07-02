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
    public function profile()
    {
        $user = auth()->user();
        return view('user.pages.profile', compact('user'));
    }
}
