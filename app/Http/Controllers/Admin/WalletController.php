<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wallet;
use App\Models\User;

class WalletController extends Controller
{
    public function index(Request $request)
    {
        $wallets = Wallet::with('user')
            ->when($request->filled('user_id'), function ($query) use ($request) {
                $query->where('user_id', $request->user_id); 
            })
            ->latest()
            ->paginate(20);

       
        $users = User::all(); 

        return view('backend.pages.wallethistory', compact('wallets', 'users'));
    }
}
