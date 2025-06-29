<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class SalaryController extends Controller
{
    public function index()
    {
        $users = User::with(['wallets' => function($q) {
            $q->where('type', 'credit')->where('source', 'roi');
        }])->get();

        return view('backend.pages.show', compact('users'));
    }
}
