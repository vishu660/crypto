<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Withdraw;
use App\Models\FundRequest;
use App\Models\UserPackage;
use App\Models\Wallet;
use Carbon\Carbon;

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
   
  // 🆕 Show All Package Requests
  public function allPackageRequests()
  {
      $requests = UserPackage::with('user', 'package')->latest()->get();
      return view('backend.pages.all_package_requests', compact('requests'));
  }

  // 🆕 Approve Package Request
  public function approve($id)
  {
      $request = UserPackage::findOrFail($id);

      if ($request->status !== 'pending') {
          return back()->with('error', 'Request already processed.');
      }

      // Update status
      $request->status = 'approved';
      $request->is_active = true;
      $request->start_date = Carbon::now();
      $request->end_date = Carbon::now()->addDays($request->package->validity_days ?? 30); // fallback 30
      $request->save();

      // ROI dates create karna ho to yahan logic डालें

      return back()->with('success', 'Package request approved successfully.');
  }

  public function reject($id)
  {
      $request = UserPackage::findOrFail($id);

      if ($request->status !== 'pending') {
          return back()->with('error', 'Request already processed.');
      }

      $request->status = 'rejected';
      $request->is_active = false;
      $request->save();

      return back()->with('success', 'Package request rejected.');
  }
  
  public function pendingPackageRequests()
{
    $requests = \App\Models\UserPackage::with('user', 'package')
        ->where('status', 'pending')
        ->latest()
        ->get();

    return view('backend.pages.pending_package_requests', compact('requests'));
}
public function approvedPackageRequests()
{
    $requests = \App\Models\UserPackage::with('user', 'package')
        ->where('status', 'approved')
        ->latest()
        ->get();

    return view('backend.pages.approved_package', compact('requests'));
}
public function rejectedPackageRequests()
{
    $requests = \App\Models\UserPackage::with('user', 'package')
        ->where('status', 'rejected')
        ->latest()
        ->get();

    return view('backend.pages.rejected_package', compact('requests'));
}

    // 🆕 All Members
    public function allMembers()
    {
        $users = User::latest()->paginate(50);
        return view('backend.pages.all_members', ['users' => $users, 'members' => $users]);
    }

    // 🆕 Active Members
    public function activeMembers()
    {
        $users = User::where('status', 'active')->latest()->paginate(50);
        return view('backend.pages.active_members', ['users' => $users, 'members' => $users]);
    }

    // 🆕 Inactive Members
    public function inactiveMembers()
    {
        $users = User::where('status', 'inactive')->latest()->paginate(50);
        return view('backend.pages.inactive_members', ['users' => $users, 'members' => $users]);
    }

    // 🆕 Blocked Members
    public function blockedMembers()
    {
        $users = User::where('status', 'blocked')->latest()->paginate(50);
        return view('backend.pages.blocked_members', ['users' => $users, 'members' => $users]);
    }

    // 🆕 Password Details
    public function passwordDetails()
    {
        $users = User::latest()->paginate(50);
        return view('backend.pages.password_details', ['users' => $users, 'members' => $users]);
    }

    // 👀 Show Member Details
    public function showMember($id)
    {
        $user = User::with('referralUser')->findOrFail($id);
        $addresses = \App\Models\Address::all();
        return view('backend.pages.member_details', compact('user', 'addresses'));
    }

    // 🚫 Block Member
    public function blockMember(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if ($user->status === 'blocked') {
            return back()->with('error', 'User is already blocked.');
        }

        $user->status = 'banned'; // yahi value allowed hai
        $user->save();

        return back()->with('success', 'User blocked successfully!');
    }

    public function updateMember(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'mobile_no' => 'nullable|string|max:20',
            'address_id' => 'nullable|exists:addresses,id',
        ]);

        $user->full_name = $request->full_name;
        $user->email = $request->email;
        $user->mobile_no = $request->mobile_no;
        $user->address_id = $request->address_id;
        if ($request->has('status')) {
            $user->status = $request->status;
        }
        $user->save();

        return back()->with('success', 'Member updated successfully!');
    }

}

 