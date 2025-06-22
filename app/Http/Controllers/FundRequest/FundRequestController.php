<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FundRequestController extends Controller
{
    public function allRequests()
    {
        return view('backend.pages.all_fund_requests');
    }

    public function approvedRequests()
    {
        return view('backend.pages.approved_fund_requests');
    }

    public function pendingRequests()
    {
        return view('backend.pages.pending_fund_requests');
    }
} 