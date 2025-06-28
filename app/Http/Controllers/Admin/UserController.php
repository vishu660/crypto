<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\User;

class UserController extends Controller
{
    public function dashboard()
    {
        $packages = Package::where('is_active', 1)->get();
        return view('user.user', compact('packages'));
    }

    public function index()
    {
        $users = User::all(); 
        return view('user.user', compact('users'));
    }

    public function profile($role = 'user')
    {
        // Get the authenticated user's data
        $user = auth()->user();
        // Get users filtered by role (default is 'user')
        $users = User::where('role', $role)->get();
        // Get all available roles
        $availableRoles = User::distinct()->pluck('role')->filter()->values();
        return view('user.pages.profile', compact('user', 'users', 'availableRoles', 'role'));
    }

    public function getUsersByRole($role = 'user')
    {
        // Get users filtered by specific role
        $users = User::where('role', $role)->get();
        // Get all available roles
        $availableRoles = User::distinct()->pluck('role')->filter()->values();
        return view('user.pages.profile', compact('users', 'availableRoles', 'role'));
    }
}
