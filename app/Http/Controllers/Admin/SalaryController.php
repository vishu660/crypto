<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Transaction;

class SalaryController extends Controller
{
    public function index()
    {
        // Maan le salary = user ke transactions ka total ROI credit
        $users = User::with(['transactions' => function($q) {
            $q->where('type', 'credit')->where('purpose_of_payment', 'roi');
        }])->get();

        return view('backend.pages.show', compact('users'));
    }
}
