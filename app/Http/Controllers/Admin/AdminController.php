<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.pages.dashboard');
    }

    public function dashboard()
    {
        $totalUsers = User::count();
        $activeUsers = User::where('status', 'active')->count();
        $inactiveUsers = User::where('status', 'inactive')->count();

        return view('backend.pages.dashboard', compact('totalUsers', 'activeUsers', 'inactiveUsers'));
    }
    public function userSearch(Request $request)
    {
        $query = $request->q;

        $users = User::where('email', 'like', "$query%")
            ->select('id', 'full_name', 'email', 'referral_id')
            ->limit(10)
            ->get();

        return response()->json($users);
    }
    

} 