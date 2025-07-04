<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;
use App\Models\UserPackage;
use Illuminate\Support\Facades\Log;
use App\Models\Epin;
use App\Models\Package;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;


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

    // public function create()
    // {
    //     return view(''); // Optional
    // }

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
        return view('backend.e_pin.transfer', compact('users', 'epins'));
    }

    public function epinPurchase()
    {
        $users = User::all();
        return view('backend.e_pin.purchase', compact('users'));
    }
    public function epinPage()
    {
        $users = User::all();
        $packages = Package::all();
        $epins = Epin::with('user')->latest()->get();
        $user = auth()->user();
        $walletBalance = $user->wallets->sum(function($wallet) {
            return $wallet->type === 'credit' ? $wallet->amount : -$wallet->amount;
        });
        return view('backend.pages.e_pin', compact('users', 'packages', 'epins', 'walletBalance'));
    }
    
    public function epinPurchaseSubmit(Request $request)
    {
        \Log::info('Epin Purchase Request - RAW', $request->all());

        try {
            $validated = $request->validate([
                'user_id' => 'required|exists:users,id',
                'amount' => 'required|numeric|min:1',
                'plan' => 'required|string',
                'expiry_date' => 'required|date',
                'count' => 'required|integer|min:1',
            ]);
            \Log::info('Epin Purchase Request - VALIDATED', $validated);
        } catch (\Illuminate\Validation\ValidationException $e) {
            \Log::error('Epin Purchase Validation Error: ' . $e->getMessage(), $e->errors());
            return back()->withErrors($e->errors())->withInput();
        }

        try {
            for ($i = 0; $i < $request->count; $i++) {
                \Log::info('Epin Create Attempt', [
                    'user_id' => $request->user_id,
                    'code' => 'will be generated',
                    'plan' => $request->plan,
                    'amount' => $request->amount,
                    'expiry_date' => $request->expiry_date,
                    'status' => 'active',
                ]);
                $epin = Epin::create([
                    'user_id' => $request->user_id,
                    'code' => strtoupper(Str::random(12)),
                    'plan' => $request->plan,
                    'amount' => $request->amount,
                    'expiry_date' => $request->expiry_date,
                    'status' => 'active',
                ]);
                \Log::info('Epin Created', $epin->toArray());
            }
        } catch (\Exception $e) {
            \Log::error('Epin Create Error: ' . $e->getMessage());
            return back()->with('error', 'E-pin create failed: ' . $e->getMessage());
        }

        return back()->with('success', 'E-pin(s) generated successfully.');
    }

    public function epinTransferSubmit(Request $request)
    {
        $request->validate([
            'from_username' => 'required|email|exists:users,email',
            'epin_code' => 'required|exists:epins,code',
        ]);

        $toUser = User::where('email', $request->from_username)->first();
        $epin = Epin::where('code', $request->epin_code)->first();

        if (!$epin) {
            return back()->with('error', 'E-pin not found.');
        }

        $epin->user_id = $toUser->id;
        $epin->save();

        // Send email to recipient
        if ($toUser && $toUser->email) {
            $epinCode = $epin->code;
            $userName = $toUser->full_name;
            \Mail::send([], [], function ($message) use ($toUser, $epinCode, $userName) {
                $message->to($toUser->email)
                    ->subject('You have received an E-Pin')
                    ->html(
                        "<p>Dear <strong>{$userName}</strong>,</p>
                        <p>You have received an <strong>E-Pin</strong>!</p>
                        <p><b>E-Pin Code:</b> <span style='font-size:18px;color:#007bff;'>{$epinCode}</span></p>
                        <p>Please use this E-Pin as per the instructions on the platform.</p>
                        <br><p>Thank you,<br>Your Admin Team</p>"
                    );
            });
        }

        return back()->with('success', 'E-pin transferred and sent to user email.');
    }
    
}
