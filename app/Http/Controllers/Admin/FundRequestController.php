<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FundRequest;
use App\Models\Wallet;

class FundRequestController extends Controller
{
    // Show all fund requests
    public function allFundRequests()
    {
        $fundRequests = FundRequest::with('user')->latest()->get();
        return view('backend.pages.all_fund_requests', compact('fundRequests'));
    }

    // Approve fund request
    public function approve($id)
    {
        $request = FundRequest::findOrFail($id);
        $request->status = 'approved';
        $request->save();

        // Wallet में पैसे जोड़ें (credit)
        Wallet::create([
            'user_id' => $request->user_id,
            'amount' => $request->amount,
            'type' => 'credit',
            'remark' => 'Fund Approved by Admin',
        ]);

        return back()->with('success', 'Fund request approved and amount credited.');
    }

    // Reject fund request
    public function reject($id)
    {
        $request = FundRequest::findOrFail($id);
        $request->status = 'rejected';
        $request->save();

        return back()->with('success', 'Fund request rejected.');
    }

    // Pending fund requests
    public function pendingRequests()
    {
        $transactions = FundRequest::with('user')
            ->where('status', 'pending')
            ->latest()
            ->get();

        return view('backend.pages.pending_fund_requests', compact('transactions'));
    }

    // Approved fund requests
    public function approvedRequests()
    {
        $transactions = FundRequest::with('user')
            ->where('status', 'approved')
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('backend.pages.approved_fund_requests', compact('transactions'));
    }
    public function failedRequests()
    {
        $transactions = FundRequest::with('user')
            ->where('status', 'rejected')
            ->latest()
            ->get();
    
        return view('backend.pages.failed_fund_requests', compact('transactions'));
    }
}
