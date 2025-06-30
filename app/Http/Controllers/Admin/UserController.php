<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\User;
use App\Models\Transaction;
use App\Models\UserPackage;
use Carbon\Carbon;
use App\Helpers\RoiHelper;

class UserController extends Controller
{
    public function dashboard()
    {
        $packages = Package::where('is_active', 1)->get();

        $allTransactions = Transaction::where('user_id', auth()->id())->get();

        $recentTransactions = Transaction::where('user_id', auth()->id())
            ->latest()
            ->take(5)
            ->get();

        return view('user.user', compact('packages', 'recentTransactions', 'allTransactions'));
    }

    public function index()
    {
        $users = User::all(); 
        return view('user.user', compact('users'));
    }

    public function profile($role = 'user')
    {
        $user = auth()->user();
        $users = User::where('role', $role)->get();
        $availableRoles = User::distinct()->pluck('role')->filter()->values();
        return view('user.pages.profile', compact('user', 'users', 'availableRoles', 'role'));
    }

    public function getUsersByRole($role = 'user')
    {
        $users = User::where('role', $role)->get();
        $availableRoles = User::distinct()->pluck('role')->filter()->values();
        return view('user.pages.profile', compact('users', 'availableRoles', 'role'));
    }

    public function buy(Request $request)
    {
        \Log::info('Package buy request received', [
            'method' => $request->method(),
            'url' => $request->url(),
            'user_agent' => $request->userAgent(),
            'ip' => $request->ip()
        ]);
    
        if (!$request->isMethod('post')) {
            return redirect()->route('user')->with('error', 'Invalid request method. Please use the Buy button.');
        }
    
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Please login to purchase packages.');
        }
    
        $request->validate([
            'package_id' => 'required|exists:packages,id',
        ]);
    
        $package = Package::findOrFail($request->package_id);
        $user = auth()->user();
    
        // ✅ Check duplicate
        $alreadyExists = UserPackage::where('user_id', $user->id)
            ->where('package_id', $package->id)
            ->whereIn('is_active', [0, 1])
            ->where('source', 'user')
            ->exists();
    
        if ($alreadyExists) {
            return back()->with('error', 'You have already requested or own this package.');
        }
    
        if (!$package->is_active) {
            return back()->with('error', 'This package is not available.');
        }
    
        try {
            \DB::beginTransaction();
    
            // ✅ ROI Date calculation
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
    
            // ✅ Wallet debit (user) & credit (admin)
            \App\Models\Wallet::create([
                'user_id' => $user->id,
                'amount' => $package->investment_amount,
                'type' => 'debit',
                'currency' => 'INR',
                'source' => 'package_purchase',
                'message' => 'Package #' . $package->id . ' purchased',
            ]);
    
            \App\Models\Wallet::create([
                'user_id' => 1, // Admin
                'amount' => $package->investment_amount,
                'type' => 'credit',
                'currency' => 'INR',
                'source' => 'package_purchase',
                'message' => 'User #' . $user->id . ' purchased package #' . $package->id,
            ]);
    
            // ✅ Transaction record
            Transaction::create([
                'user_id' => $user->id,
                'amount' => $package->investment_amount,
                'currency' => 'INR',
                'type' => 'debit',
                'purpose_of_payment' => 'buy_plan_one',
                'status' => 'pending',
                'gateway' => 'admin',
                'message' => 'Package purchase request sent for admin approval',
            ]);
    
            // ✅ Save user package
            UserPackage::create([
                'user_id' => $user->id,
                'package_id' => $package->id,
                'start_date' => $startDate->toDateString(),
                'end_date' => $endDate->toDateString(),
                'roi_dates' => json_encode($roiDates),
                'total_roi_given' => 0,
                'is_active' => false,
                'source' => 'user',
            ]);
    
            \DB::commit();
            return back()->with('success', 'Package purchase successful & under admin approval.');
    
        } catch (\Exception $e) {
            \DB::rollBack();
            \Log::error('Package purchase error: ' . $e->getMessage());
            return back()->with('error', 'Purchase failed. Try again.');
        }
    }
    
    

    public function failedRequests()
    {
        $transactions = Transaction::with('user')
            ->where('status', 'failed')
            ->where('purpose_of_payment', 'buy_plan_one')
            ->latest()
            ->get();
        return view('backend.pages.failed_fund_requests', compact('transactions'));
    }

    public function userTransactions()
    {
        $transactions = Transaction::where('user_id', auth()->id())
            ->latest()
            ->get();

        return view('user.pages.transactions', compact('transactions'));
    }

    public function wallet()
    {
        $user = auth()->user();

        $wallets = \App\Models\Wallet::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->get();

        $balance = $wallets->sum(function($w) {
            return $w->type === 'credit' ? $w->amount : -$w->amount;
        });

        $afterBalance = $wallets->first()->balance_after ?? 0;

        return view('user.pages.wallet', compact('wallets', 'balance', 'afterBalance', 'user'));
    }
}
