<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;


class TransactionController extends Controller
{
    public function index() {
        $transactions = Transaction::with('user')
            ->where('purpose_of_payment', 'buy_plan_one')
            ->latest()
            ->get();
        return view('backend.pages.all_fund_requests', compact('transactions'));
    }

    public function create()
    {
        return view('backend.transfers.create');
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

        return back()->with('success', 'Transaction approved successfully.');
    }

    public function reject($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->status = 'failed';
        $transaction->message = 'Package purchase request rejected by admin';
        $transaction->save();

        return back()->with('success', 'Transaction rejected successfully.');
    }
}
