<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
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
            ->where('source', 'package_purchase') // Optional: सिर्फ पैकेज से जुड़ी एंट्रीज
            ->latest()
            ->paginate(20);

        return view('backend.pages.wallethistory', compact('wallets'));
    }

    /**
     * Display a listing of the wallets.
     */
    public function index()
    {
        // Example: Fetch all wallets (adjust as needed)
        $wallets = \App\Models\Wallet::all();
        return view('backend.pages.wallethistory', compact('wallets'));
    }
}
