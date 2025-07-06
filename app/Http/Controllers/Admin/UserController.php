<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\User;
use App\Models\Transaction;
use App\Models\UserPackage;
use App\Models\AdminCode;
use App\Models\Epin;
use App\Models\UserBankDetail;
use Carbon\Carbon;
use App\Helpers\RoiHelper;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;

class UserController extends Controller
{
    public function dashboard()
    {
        $packages = Package::where('is_active', 1)->get();
        $allTransactions = Transaction::where('user_id', auth()->id())->get();
        $recentTransactions = Transaction::where('user_id', auth()->id())
            ->latest()->take(5)->get();
        $user = auth()->user();
        $balance = $user->wallets->sum(function ($wallet) {
            return $wallet->type === 'credit' ? $wallet->amount : -$wallet->amount;
        });
        return view('user.user', compact('packages', 'recentTransactions', 'allTransactions', 'balance'));
    }

    public function showBuyPage($id)
    {
        $package = Package::findOrFail($id);
        return view('user.pages.buy_package', compact('package'));
    }

    public function buyWithCode(Request $request)
    {
        $request->validate([
            'package_id' => 'required|exists:packages,id',
            'secret_code' => 'required|string|min:6|max:20',
        ]);

        $epin = Epin::where('code', $request->secret_code)
            ->where('status', 'active')
            ->where(function ($query) {
                $query->whereNull('expiry_date')->orWhere('expiry_date', '>=', now());
            })
            ->first();

        if (!$epin) {
            return back()->with('error', 'Invalid, expired, or already used E-pin.');
        }

        $user = auth()->user();
        $package = Package::findOrFail($request->package_id);

        if (UserPackage::where('user_id', $user->id)->where('package_id', $package->id)->exists()) {
            return back()->with('error', 'Package already purchased or requested.');
        }

        try {
            DB::beginTransaction();

            $startDate = Carbon::today();
            $endDate = $startDate->copy()->addDays($package->validity_days - 1);

            $roiDates = RoiHelper::generateRoiDates(
                $startDate,
                $package->validity_days,
                $package->type_of_investment_days,
                [
                    'daily_days' => $package->daily_days,
                    'weekly_day' => $package->weekly_day,
                    'monthly_date' => $package->monthly_date,
                ]
            );

            UserPackage::create([
                'user_id' => $user->id,
                'package_id' => $package->id,
                'start_date' => $startDate->toDateString(),
                'end_date' => $endDate->toDateString(),
                'roi_dates' => json_encode($roiDates),
                'total_roi_given' => 0,
                'is_active' => true,
                'source' => 'epin',
            ]);

            $epin->status = 'used';
            $epin->user_id = $user->id;
            $epin->used_at = now();
            $epin->save();

            DB::commit();
            return redirect()->route('user')->with('success', 'Package bought successfully using E-pin.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('BuyWithCode error: ' . $e->getMessage());
            return back()->with('error', 'Something went wrong. Please try again later.');
        }
    }

    public function buyWithRequest(Request $request)
    {
        $request->validate([
            'package_id' => 'required|exists:packages,id',
        ]);

        $user = auth()->user();
        $package = Package::findOrFail($request->package_id);

        if (UserPackage::where('user_id', $user->id)->where('package_id', $package->id)->exists()) {
            return back()->with('error', 'Package already purchased or requested.');
        }

        Transaction::create([
            'user_id' => $user->id,
            'package_id' => $package->id,
            'status' => 'pending',
            'amount' => $package->amount,
            'type' => 'buy_request',
            'message' => 'User requested package approval.',
        ]);

        return redirect()->route('user')->with('success', 'Buy request sent to admin.');
    }

    public function wallet()
    {
        $user = auth()->user();
        $wallets = $user->wallets()->latest()->get();
        $balance = $wallets->sum(function ($wallet) {
            return $wallet->type === 'credit' ? $wallet->amount : -$wallet->amount;
        });
        $afterBalance = $balance;

        return view('user.pages.wallet', compact('wallets', 'balance', 'afterBalance'));
    }

    public function blank()
    {
        $user = auth()->user();
        $balance = $user->wallets->sum(function ($wallet) {
            return $wallet->type === 'credit' ? $wallet->amount : -$wallet->amount;
        });
        return view('user.pages.blank', compact('balance'));
    }

    public function transfer(Request $request)
    {
        $ethBalance = 2.56213968;
        $ethInrRate = 250000;
        $ethUsdRate = 3941.23;
        $ethInrValue = $ethBalance * $ethInrRate;
        $ethUsdValue = $ethBalance * $ethUsdRate;
        $convertedInr = $request->query('amount_inr');
        return view('user.pages.transfer', compact('ethBalance', 'ethInrValue', 'ethUsdValue', 'convertedInr'));
    }

    public function showProfile()
    {
        $user = auth()->user();
        $transactions = $user->transactions;
        return view('user.pages.profile', compact('user', 'transactions'));
    }

    public function profile()
    {
        $user = Auth::user();
        $transactions = $user->transactions ?? [];
        return view('user.pages.profile', compact('user', 'transactions'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'full_name'   => 'required|string|max:255',
            'email'       => 'required|email|max:255|unique:users,email,' . $user->id,
            'mobile_no'   => 'nullable|string|max:20',
            'city'        => 'nullable|string|max:100',
            'state'       => 'nullable|string|max:100',
            'country'     => 'nullable|string|max:100',
            'profile_image' => 'nullable|image|max:2048',
        ]);

        $user->full_name = $request->full_name;
        $user->email     = $request->email;
        $user->mobile_no = $request->mobile_no;
        $user->city      = $request->city;
        $user->state     = $request->state;
        $user->country   = $request->country;

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile_image = $image;
        }

        $user->save();

        return back()->with('success', 'Profile updated successfully!');
    }

    public function updateBank(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'bank_name'      => 'required|string|max:255',
            'account_number' => 'required|string|max:255',
        ]);
        $user->bank_name      = $request->bank_name;
        $user->account_number = $request->account_number;
        $user->save();

        return back()->with('success', 'Bank details updated!');
    }

    public function updateContact(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'phone'   => 'required|string|max:20',
            'address' => 'required|string|max:255',
        ]);
        $user->phone   = $request->phone;
        $user->address = $request->address;
        $user->save();

        return back()->with('success', 'Contact details updated!');
    }

    public function updateKyc(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'aadhaar_front' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:4096',
            'aadhaar_back'  => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:4096',
            'pan_card'      => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:4096',
            'driving_front' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:4096',
            'driving_back'  => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:4096',
        ]);

        if ($request->hasFile('aadhaar_front')) {
            $user->aadhaar_front = $request->file('aadhaar_front')->store('kyc_documents', 'public');
        }
        if ($request->hasFile('aadhaar_back')) {
            $user->aadhaar_back = $request->file('aadhaar_back')->store('kyc_documents', 'public');
        }
        if ($request->hasFile('pan_card')) {
            $user->pan_card = $request->file('pan_card')->store('kyc_documents', 'public');
        }
        if ($request->hasFile('driving_front')) {
            $user->driving_front = $request->file('driving_front')->store('kyc_documents', 'public');
        }
        if ($request->hasFile('driving_back')) {
            $user->driving_back = $request->file('driving_back')->store('kyc_documents', 'public');
        }

        $user->kyc_status = 'pending';
        $user->save();

        return back()->with('success', 'KYC documents uploaded! Status: Pending');
    }

    public function kycForm()
    {
        $user = Auth::user();
        return view('user.pages.kyc', compact('user'));
    }

    public function kycSubmit(Request $request)
    {
        $request->validate([
            'kyc_type' => 'required|in:aadhaar,pan,dl',
            'selfie' => 'required|image|max:2048',
            'aadhaar_number' => 'required_if:kyc_type,aadhaar|nullable|digits:12',
            'pan_number' => 'required_if:kyc_type,pan|nullable|string|max:10',
            'dl_number' => 'required_if:kyc_type,dl|nullable|string|max:20',
            'front_image' => 'required|image|max:4096',
            'back_image' => 'required|image|max:4096', 
        ]);

        $user = Auth::user();

        if ($request->kyc_type == 'aadhaar') {
            $user->aadhaar = $request->aadhaar_number;
        } elseif ($request->kyc_type == 'pan') {
            $user->pan = $request->pan_number;
        } elseif ($request->kyc_type == 'dl') {
            $user->dl = $request->dl_number;
        }

        if ($request->hasFile('selfie')) {
            $user->kyc_selfie = $request->file('selfie')->store('kyc_selfies', 'public');
        }
        if ($request->hasFile('front_image')) {
            $user->kyc_front = $request->file('front_image')->store('kyc_documents', 'public');
        }
        if ($request->hasFile('back_image')) {
            $user->kyc_back = $request->file('back_image')->store('kyc_documents', 'public');
        }

        $user->kyc_status = 'pending';
        $user->save();

        return back()->with('success', 'KYC submitted! Status: Pending');
    }

    public function saveBankDetails(Request $request)
    {
        $request->validate([
            'account_holder' => 'required|string|max:255',
            'bank_name' => 'required|string|max:255',
            'account_number' => 'required|digits_between:9,18',
            'ifsc_code' => 'required|regex:/^[A-Z]{4}0[A-Z0-9]{6}$/',
        ]);

        $user = Auth::user();

        Log::info("User ID {$user->id} submitted bank details", ['ip' => $request->ip()]);

        UserBankDetail::updateOrCreate(
            ['user_id' => $user->id],
            [
                'account_holder' => $request->account_holder,
                'bank_name' => $request->bank_name,
                'account_number' => $request->account_number,
                'ifsc_code' => $request->ifsc_code,
                'is_approved' => false,
                'approved_at' => null,
            ]
        );

        return back()->with('success', 'Bank details submitted for admin approval.');
    }
    // Route: GET admin/bank-requests
    public function bankRequests(Request $request)
    {
        $query = UserBankDetail::with('user');

        if ($request->status === 'pending') {
            $query->where('is_approved', false);
        } elseif ($request->status === 'approved') {
            $query->where('is_approved', true);
        }

        if ($search = $request->search) {
            $query->whereHas('user', function ($q) use ($search) {
                $q->where('full_name', 'like', "%$search%")
                  ->orWhere('email', 'like', "%$search%");
            });
        }

        $banks = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('backend.pages.bankdetail', compact('banks'));
    }
    public function approveBank($id)
    {
        $bank = UserBankDetail::findOrFail($id);
        $bank->is_approved = true;
        $bank->approved_at = now();
        $bank->save();

        return redirect()->back()->with('success', 'Bank detail approved successfully.');
    }

    public function transferReport(User $user)
    {
        $transactions = $user->transactions()->latest()->get();
        return view('backend.pages.transferreport', compact('user', 'transactions'));
    }

    public function userTransactions(User $user)
    {
        $transactions = $user->transactions()->latest()->get();
        return view('user.pages.transactions', compact('user', 'transactions'));
    }

    public function transferToAdmin(Request $request)
    {
        $admin = auth()->user(); // assuming admin is logged in
        $user = User::find($request->user_id);
        $amount = $request->amount;

        // Admin transaction (debit)
        Transaction::create([
            'user_id' => $admin->id,
            'amount' => $amount,
            'type' => 'debit',
            'purpose_of_payment' => 'transfer_to_user',
            'status' => 'success',
            'currency' => 'INR',
        ]);

        // User transaction (credit)
        Transaction::create([
            'user_id' => $user->id,
            'amount' => $amount,
            'type' => 'credit',
            'purpose_of_payment' => 'received_from_admin',
            'status' => 'success',
            'currency' => 'INR',
        ]);

        return back()->with('success', 'Transfer to admin successful!');
    }

    public function activity()
    {
        $user = auth()->user();

        // Transactions (buy, sell, deposit, withdraw, transfer, etc.)
        $transactions = $user->transactions()->get();

        // If you add ROI or profit models in future, add their logic here
        // $rois = $user->rois()->get();
        // $profits = $user->profits()->get();

        // Merge all activities into one collection
        $activities = collect();

        foreach ($transactions as $t) {
            $activities->push([
                'type' => ucfirst($t->purpose_of_payment), // e.g. Buy, Sold, Deposit, Withdraw, Transfer
                'amount' => $t->amount,
                'asset' => $t->currency,
                'transaction_id' => $t->id,
                'date' => $t->created_at,
                'status' => $t->status,
                'fee' => $t->fee ?? 0,
            ]);
        }

        // Sort by date desc
        $activities = $activities->sortByDesc('date');

        return view('user.pages.activity', compact('activities'));
    }
    public function inbox()
    {
        $userId = Auth::id();

        $inboxCount = Message::where('receiver_id', $userId)->count();
        $sentCount = Message::where('sender_id', $userId)->count();

        // ✅ Ye wala sahi hai:
        $messages = Message::with('sender') 
            ->where('receiver_id', $userId)
            ->latest()
            ->paginate(10);

        return view('user.pages.email', compact('messages', 'inboxCount', 'sentCount'));
    }
}
