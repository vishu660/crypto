<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wallet;
use App\Models\User;

class WalletController extends Controller
{

    public function index()
    {
        $user = auth()->user();

        if ($user->role === 'admin') {
            // Admin sees all wallet records
            $wallets = Wallet::with('user')->latest()->paginate(50);
        } else {
            // Normal user sees only their own wallet records
            $wallets = Wallet::with('user')->where('user_id', $user->id)->latest()->paginate(50);
        }

        return view('backend.pages.wallethistory', compact('wallets'));
    }
}
