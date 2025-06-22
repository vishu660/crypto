<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class MemberController extends Controller
{
    public function index()
    {
        $members = User::all();
        return view('backend.pages.all_members', compact('members'));
    }

    public function activeMembers()
    {
        $members = User::where('status', 'active')->get();
        return view('backend.pages.active_members', compact('members'));
    }

    public function inactiveMembers()
    {
        $members = User::where('status', 'inactive')->get();
        return view('backend.pages.inactive_members', compact('members'));
    }

    public function blockedMembers()
    {
        $members = User::where('status', 'blocked')->get();
        return view('backend.pages.blocked_members', compact('members'));
    }
} 