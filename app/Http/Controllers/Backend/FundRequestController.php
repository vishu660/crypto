<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\User;

class FundRequestController extends Controller
{
    public function allRequests()
    {
        $transactions = Transaction::with('user')->latest()->get();
        return view('backend.pages.all_fund_requests', compact('transactions'));
    }

    public function approvedRequests()
    {
        $transactions = Transaction::with('user')
            ->where('status', 'success')
            ->where('purpose_of_payment', 'buy_plan_one')
            ->latest()
            ->get();
        return view('backend.pages.approved_fund_requests', compact('transactions'));
    }

    public function pendingRequests()
    {
        $transactions = Transaction::with('user')
            ->where('status', 'pending')
            ->where('purpose_of_payment', 'buy_plan_one')
            ->latest()
            ->get();
        return view('backend.pages.pending_fund_requests', compact('transactions'));
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
} 