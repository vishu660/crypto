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
            \Log::warning('Invalid request method for package purchase', [
                'method' => $request->method(),
                'expected' => 'POST'
            ]);
            return redirect()->route('user')->with('error', 'Invalid request method. Please use the Buy button to purchase packages.');
        }
    
        if (!auth()->check()) {
            \Log::warning('Unauthenticated user attempted to purchase package');
            return redirect()->route('login')->with('error', 'Please login to purchase packages.');
        }
    
        $request->validate([
            'package_id' => 'required|exists:packages,id',
        ]);
    
        $package = Package::findOrFail($request->package_id); // ✅ First fetch the package
    
        // ✅ Check if already exists for this user (prevent duplicate buy)
        $alreadyExists = UserPackage::where('user_id', auth()->id())
            ->where('package_id', $package->id)
            ->whereIn('is_active', [0, 1]) // already active or pending
            ->where('source', 'user') // only user purchases
            ->exists();
    
        if ($alreadyExists) {
            return back()->with('error', 'You have already requested or own this package.');
        }
    
        if (!$package->is_active) {
            \Log::info('User attempted to purchase inactive package', [
                'user_id' => auth()->id(),
                'package_id' => $package->id
            ]);
            return back()->with('error', 'This package is not available for purchase.');
        }
    
        try {
            // ✅ Create transaction
            $transaction = new Transaction();
            $transaction->user_id = auth()->id();
            $transaction->amount = $package->investment_amount;
            $transaction->currency = 'INR';
            $transaction->type = 'debit';
            $transaction->purpose_of_payment = 'buy_plan_one';
            $transaction->status = 'pending';
            $transaction->gateway = 'admin';
            $transaction->message = 'Package purchase request sent for admin approval';
            $transaction->save();
    
            // ✅ ROI Dates generation
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
    
            // ✅ Create user_package entry with source = 'user'
            UserPackage::create([
                'user_id' => auth()->id(),
                'package_id' => $package->id,
                'start_date' => $startDate->toDateString(),
                'end_date' => $endDate->toDateString(),
                'roi_dates' => json_encode($roiDates),
                'total_roi_given' => 0,
                'is_active' => false,
                'source' => 'user', // ✅ Important: Set source
            ]);
    
            \Log::info('Package purchase request created successfully', [
                'user_id' => auth()->id(),
                'package_id' => $package->id,
                'transaction_id' => $transaction->id,
                'amount' => $transaction->amount
            ]);
    
            return back()->with('success', 'Purchase request sent! Admin will approve within 30 minutes.');
        } catch (\Exception $e) {
            \Log::error('Failed to create package purchase request', [
                'user_id' => auth()->id(),
                'package_id' => $package->id,
                'error' => $e->getMessage()
            ]);
            return back()->with('error', 'Failed to create purchase request. Please try again.');
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
