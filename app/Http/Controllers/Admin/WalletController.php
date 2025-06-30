<?php

namespace App\Http\Controllers\Admin;

use App\Models\Wallet;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use App\Http\Controllers\Controller;

class WalletController extends Controller
{
    /**
     * Add a credit or debit transaction to wallet.
     */
    public function addTransaction(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'amount' => 'required|numeric|min:0.01',
            'type' => 'required|in:credit,debit',
            'source' => 'required|in:roi,referral,deposit,withdrawal,admin,bonus',
            'message' => 'nullable|string',
        ]);

        try {
            DB::beginTransaction();

            $userId = $validated['user_id'];
            $amount = $validated['amount'];
            $type = $validated['type'];

            // Calculate current wallet balance
            $balance = Wallet::where('user_id', $userId)->sum(DB::raw("CASE WHEN type = 'credit' THEN amount ELSE -amount END"));
            
            // Update new balance after transaction
            $newBalance = $type === 'credit' ? $balance + $amount : $balance - $amount;

            // Optional: Prevent negative balance
            if ($newBalance < 0 && $type === 'debit') {
                return response()->json(['error' => 'Insufficient balance.'], 400);
            }

            // Create transaction
            $wallet = Wallet::create([
                'user_id' => $userId,
                'amount' => $amount,
                'balance_after' => $newBalance,
                'currency' => 'INR',
                'type' => $type,
                'source' => $validated['source'],
                'message' => $validated['message'] ?? null,
            ]);

            DB::commit();

            return response()->json(['success' => true, 'wallet' => $wallet], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Wallet Transaction Error: ' . $e->getMessage());
            return response()->json(['error' => 'Transaction failed.'], 500);
        }
    }

    /**
     * Get total wallet balance of a user.
     */
    public function getBalance($userId)
    {
        $balance = Wallet::where('user_id', $userId)
            ->sum(DB::raw("CASE WHEN type = 'credit' THEN amount ELSE -amount END"));

        return response()->json(['balance' => $balance], 200);
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
