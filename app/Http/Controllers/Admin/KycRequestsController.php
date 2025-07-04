<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class KycRequestsController extends Controller
{
    public function index()
    {
        $users = User::whereNotNull('kyc_status')->get();
        return view('backend.kyc_requests', compact('users'));
    }

    public function approve(User $user)
    {
        $user->kyc_status = 'approved';
        $user->save();
        return back()->with('success', 'KYC Approved!');
    }

    public function reject(User $user)
    {
        $user->kyc_status = 'rejected';
        $user->save();
        return back()->with('success', 'KYC Rejected!');
    }
} 