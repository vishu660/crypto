<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserAddress;

class UserUsdtApprovalController extends Controller
{
    public function index()
    {
        $pendingAddresses = UserAddress::with('user', 'address')->get();
        return view('backend.pages.user_usdt_approvals', compact('pendingAddresses'));
    }

    public function approve(UserAddress $userAddress)
    {
        $userAddress->update(['is_approved' => true]);
        return back()->with('success', 'Address Approved!');
    }

    public function reject(UserAddress $userAddress)
    {
        $userAddress->update(['is_approved' => false]);
        return back()->with('success', 'Address Marked as Pending!');
    }
}
