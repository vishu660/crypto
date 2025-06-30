<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use App\Models\Wallet;

class WalletController extends Controller
{
    public function index(Request $request)
    {
        $wallets = Wallet::with('user')
            ->where('user_id') 
            ->when($request->filled('user_id'), function ($query) use ($request) {
                $query->where('message', 'like', '%User #' . $request->user_id . '%');
            })
            ->where('source', 'package_purchase') 
            ->latest()
            ->paginate(20);

            $wallets = \App\Models\Wallet::all();
        return view('backend.pages.wallethistory', compact('wallets'));
    }
}