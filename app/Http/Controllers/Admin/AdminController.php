<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Withdraw;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.pages.dashboard');
    }

    // public function dashboard()
    // {
    //     $totalUsers = User::count();
    //     $activeUsers = User::where('status', 'active')->count();
    //     $inactiveUsers = User::where('status', 'inactive')->count();

    //     // Total Activation (assuming UserPackage is activation)
    //     $totalActivations = \App\Models\UserPackage::count();
    //     $todayActivations = \App\Models\UserPackage::whereDate('created_at', today())->count();
    //     $weekActivations = \App\Models\UserPackage::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count();
    //     $monthActivations = \App\Models\UserPackage::whereMonth('created_at', now()->month)->count();

    //     // Total Earnings (assuming Transaction type 'earning')
    //     $totalEarnings = \App\Models\Transaction::where('type', 'earning')->sum('amount');
    //     $todayEarnings = \App\Models\Transaction::where('type', 'earning')->whereDate('created_at', today())->sum('amount');
    //     $weekEarnings = \App\Models\Transaction::where('type', 'earning')->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->sum('amount');
    //     $monthEarnings = \App\Models\Transaction::where('type', 'earning')->whereMonth('created_at', now()->month)->sum('amount');

    //     // Payouts
    //     $totalPayouts = \App\Models\Withdraw::count();
    //     $unpaidPayouts = \App\Models\Withdraw::where('status', 'pending')->count();
    //     $paidPayouts = \App\Models\Withdraw::where('status', 'approved')->count();
    //     $todayPayouts = \App\Models\Withdraw::whereDate('created_at', today())->count();

    //     // For charts (monthly activations and earnings)
    //     $activationsByMonth = \App\Models\UserPackage::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
    //         ->groupBy('month')->pluck('count', 'month')->toArray();
    //     $earningsByMonth = \App\Models\Transaction::where('type', 'earning')
    //         ->selectRaw('MONTH(created_at) as month, SUM(amount) as total')
    //         ->groupBy('month')->pluck('total', 'month')->toArray();

    //     // Team Summary (dummy, replace with your logic if needed)
    //     $teamSummary = [
    //         'ROI Income' => 0,
    //         'Passive Income' => 0,
    //         'Direct Income' => 0,
    //         'Royalty' => 0,
    //         'Rewards' => 0,
    //     ];

    //     return view('backend.pages.dashboard', compact(
    //         'totalUsers', 'activeUsers', 'inactiveUsers',
    //         'totalActivations', 'todayActivations', 'weekActivations', 'monthActivations',
    //         'totalEarnings', 'todayEarnings', 'weekEarnings', 'monthEarnings',
    //         'totalPayouts', 'unpaidPayouts', 'paidPayouts', 'todayPayouts',
    //         'activationsByMonth', 'earningsByMonth', 'teamSummary'
    //     ));
    // }

    public function userSearch(Request $request)
    {
        $query = $request->q;

        $users = User::where('email', 'like', "$query%")
            ->select('id', 'full_name', 'email', 'referral_id')
            ->limit(10)
            ->get();

        return response()->json($users);
    }

    // ✅ Withdraw List
    public function withdrawRequests()
    {
        $withdraws = Withdraw::with('user')
                    ->latest()
                    ->paginate(10);

        return view('backend.pages.unpaidpayouts', compact('withdraws'));
    }

    // ✅ Withdraw List (Alternative method)
    public function withdrawList()
    {
        $withdraws = Withdraw::with('user')
                    ->latest()
                    ->paginate(10);

        return view('backend.pages.unpaidpayouts', compact('withdraws'));
    }

    // ✅ Paid Payouts
    public function paidPayouts()
    {
        $withdraws = Withdraw::with('user')
                    ->where('status', 'approved')
                    ->latest()
                    ->paginate(10);

        return view('backend.pages.unpaidpayouts', compact('withdraws'));
    }

    // ✅ Rejected Payouts
    public function rejectedPayouts()
    {
        $withdraws = Withdraw::with('user')
                    ->where('status', 'rejected')
                    ->latest()
                    ->paginate(10);

        return view('backend.pages.unpaidpayouts', compact('withdraws'));
    }

    // ✅ Approve Withdraw
    public function approveWithdraw(Request $request, $id)
    {
        $withdraw = Withdraw::findOrFail($id);
        $withdraw->status = 'approved';
        $withdraw->approved_at = now();
        $withdraw->save();

        return back()->with('success', 'Withdraw approved successfully.');
    }

    // ✅ Reject Withdraw
    public function rejectWithdraw(Request $request, $id)
    {
        $withdraw = Withdraw::findOrFail($id);
        $withdraw->status = 'rejected';
        $withdraw->admin_remark = $request->admin_remark ?? 'Rejected by admin';
        $withdraw->save();

        return back()->with('error', 'Withdraw rejected.');
    }

    // ✅ Bank Approve
    public function approveBank($id)
    {
        $bank = \App\Models\UserBankDetail::findOrFail($id);
        $bank->is_approved = true;
        $bank->approved_at = now();
        $bank->save();

        return back()->with('success', 'Bank details approved successfully.');
    }
}
 