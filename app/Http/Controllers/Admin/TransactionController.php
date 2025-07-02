<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;
use App\Models\UserPackage;
use Illuminate\Support\Facades\Log;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('user')
            ->where('purpose_of_payment', 'buy_plan_one')
            ->latest()
            ->get();

        return view('backend.pages.all_fund_requests', compact('transactions'));
    }

    public function create()
    {
        return view(''); // Optional
    }

    public function store(Request $request)
    {
        $request->validate([
            'member_id' => 'required|exists:users,id',
            'amount' => 'required|numeric|min:1',
            'wallet' => 'required|in:main,commission',
            'remark' => 'required|string|max:255',
        ]);

        $user = User::findOrFail($request->member_id);

        Transaction::create([
            'user_id' => $user->id,
            'amount' => $request->amount,
            'currency' => 'INR',
            'type' => 'debit',
            'purpose_of_payment' => 'buy_plan_one',
            'status' => 'pending',
            'gateway' => 'admin',
            'message' => $request->remark,
        ]);

        return redirect()->route('admin.transactions.index')->with('success', 'Fund request created successfully.');
    }

    public function approve($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->status = 'success';
        $transaction->save();

        $userPackage = UserPackage::where('user_id', $transaction->user_id)
            ->where('is_active', 0)
            ->latest()
            ->first();

        Log::info('Approving transaction', [
            'transaction_id' => $transaction->id,
            'user_id' => $transaction->user_id,
            'user_package_found' => $userPackage ? 'yes' : 'no'
        ]);

        if ($userPackage) {
            $userPackage->is_active = true;
            $userPackage->save();
        }

        return back()->with('success', 'Transaction approved & Package activated successfully.');
    }

    public function reject($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->status = 'failed';
        $transaction->message = 'Package purchase request rejected by admin';
        $transaction->save();

        return back()->with('success', 'Transaction rejected successfully.');
    }

    // 🔽🔽 E-PIN FEATURES ADDED BELOW 🔽🔽

    public function epinTransfer()
    {
        $users = User::all();
        $epins = []; // Replace with Epin::where('status', 'active')->get(); if Epin model exists
        return view('backend.epin.transfer', compact('users', 'epins'));
    }

    public function epinPurchase()
    {
        $users = User::all();
        return view('backend.epin.purchase', compact('users'));
    }

    public function epinTransferSubmit(Request $request)
    {
        // Handle form validation & DB logic
        // Placeholder only
        return back()->with('success', 'E-pin transferred successfully.');
    }

    public function epinPurchaseSubmit(Request $request)
    {
        // Handle form validation & DB logic
        // Placeholder only
        return back()->with('success', 'E-pin purchased successfully.');
    }
}
