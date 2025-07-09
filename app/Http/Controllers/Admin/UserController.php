<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\User;
use App\Models\Withdraw;
use App\Models\Transaction;
use App\Models\UserPackage;
use App\Models\AdminCode;
use App\Models\FundRequest;
use App\Models\Epin;
use App\Models\UserBankDetail;
use Carbon\Carbon;
use App\Helpers\RoiHelper;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();
        $packages = Package::where('is_active', 1)->get();
        $allTransactions = Transaction::where('user_id', $user->id)->get();
        $recentTransactions = Transaction::where('user_id', $user->id)->latest()->take(5)->get();
        $balance = $user->wallets->sum(function ($wallet) {
            return $wallet->type === 'credit' ? $wallet->amount : -$wallet->amount;
        });
        // Epins
        $freshEpins = Epin::where('user_id', $user->id)->where('status', 'active')->count();
        $appliedEpins = Epin::where('user_id', $user->id)->where('status', 'applied')->count();
        // Referrals
        $myReferrals = $user->directReferrals()->count();
        // Team (recursive)
        $downlines = collect();
        $this->getDownlinesRecursive($user, $downlines, 1);
        $myTeamCount = $downlines->count();
        // Wallets
        $earningWallet = $user->wallets->where('type', 'credit')->sum('amount');
        $depositWallet = $user->wallets->where('type', 'deposit')->sum('amount');
        // Fund Requested
        $fundRequested = FundRequest::where('user_id', $user->id)->sum('amount');
        // Matching Bonus (dummy)
        $matchingBonus = 0;
        // Left/Right Team (dummy)
        $leftTeam = 6; $rightTeam = 0;
        // Earnings Chart (dummy)
        $earningsChart = [0, 0, 0, 1500, 0, 0, 0, 0, 0, 0, 0, 0];
        // My Earnings/Payouts (dummy)
        $myEarnings = 1450.3;
        $referBonus = 1000.3;
        $levelBonus = 450;
        $myPayouts = 644;
        $pendingPayouts = 145;
        $approvedPayouts = 499;
        // ETH Address (dummy)
        $ethAddress = 'demoa1673C0B47B0cdsss1bd3C445e9';
        // Notifications (dummy)
        $notifications = [
            ['text' => 'Make A One 10k Business To Achieve One Bike', 'date' => '04-04-2025 03:51pm'],
            ['text' => 'Mjhghghgjkgjkgjgjjh', 'date' => '04-04-2025 02:19pm'],
            ['text' => 'Global 10000$ Joining To Achive Goa Trip', 'date' => '14-03-2024 09:45pm'],
        ];
        return view('user.user', compact(
            'packages', 'recentTransactions', 'allTransactions', 'balance',
            'freshEpins', 'appliedEpins', 'myReferrals', 'myTeamCount',
            'earningWallet', 'depositWallet', 'fundRequested', 'matchingBonus',
            'leftTeam', 'rightTeam', 'earningsChart', 'myEarnings', 'referBonus',
            'levelBonus', 'myPayouts', 'pendingPayouts', 'approvedPayouts',
            'ethAddress', 'notifications', 'user'
        ));
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
                'amount' => $package->investment_amount, // ✅ FIXED
            ]);
    
            // Optional Transaction Entry
            Transaction::create([
                'user_id' => $user->id,
                'amount' => $package->investment_amount, // ✅ FIXED
                'type' => 'package_buy',
                'status' => 'success',
                'message' => 'Package bought using E-PIN',
            ]);
    
            // Update EPIN
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
    
        // Check if user already has the same package
        if (UserPackage::where('user_id', $user->id)->where('package_id', $package->id)->exists()) {
            return back()->with('error', 'Package already purchased or requested.');
        }
    
        // Create UserPackage entry with is_active = false (admin approval needed)
        UserPackage::create([
            'user_id' => $user->id,
            'package_id' => $package->id,
            'amount' => $package->investment_amount,
            'roi_dates' => [],
            'total_roi_given' => 0,
            'is_active' => false, // Pending approval
            'source' => 'admin',  // Requested via Admin
        ]);
    
        // Create transaction log (optional)
        Transaction::create([
            'user_id' => $user->id,
            'amount' => $package->investment_amount,
            'type' => 'debit',
            'purpose_of_payment' => 'buy_plan_one',
            'status' => 'pending', // Admin hasn't approved yet
            'message' => 'Buy request sent to admin.',
            'currency' => 'INR',
            'gateway' => 'admin', // Not 'epin'
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

    // Validation
    $request->validate([
        'full_name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'mobile_no' => 'nullable|string|max:20',
        'city' => 'nullable|string|max:100',
        'state' => 'nullable|string|max:100',
        'country' => 'nullable|string|max:100',
        'profile_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    // Update profile image
    if ($request->hasFile('profile_image')) {
        $image = $request->file('profile_image');
        $path = $image->store('profile_images', 'public');

        
        if ($user->profile_image) {
            Storage::disk('public')->delete($user->profile_image);
        }

        $user->profile_image = $path;
    }

    
    $user->full_name = $request->full_name;
    $user->email = $request->email;
    $user->mobile_no = $request->mobile_no;
    $user->city = $request->city;
    $user->state = $request->state;
    $user->country = $request->country;

    $user->save();

    return back()->with('success', 'Profile updated successfully!');
}

    // public function updateProfile(Request $request)
    // {
    //     $user = Auth::user();

    //     $request->validate([
    //         'full_name'   => 'required|string|max:255',
    //         'email'       => 'required|email|max:255|unique:users,email,' . $user->id,
    //         'mobile_no'   => 'nullable|string|max:20',
    //         'city'        => 'nullable|string|max:100',
    //         'state'       => 'nullable|string|max:100',
    //         'country'     => 'nullable|string|max:100',
    //         'profile_image' => 'nullable|image|max:2048',
    //     ]);

    //     $user->full_name = $request->full_name;
    //     $user->email     = $request->email;
    //     $user->mobile_no = $request->mobile_no;
    //     $user->city      = $request->city;
    //     $user->state     = $request->state;
    //     $user->country   = $request->country;

    //     if ($request->hasFile('profile_image')) {
    //         $image = $request->file('profile_image')->store('profile_images', 'public');
    //         $user->profile_image = $image;
    //     }

    //     $user->save();

    //     return back()->with('success', 'Profile updated successfully!');
    // }

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
// public function bankRequests(Request $request)
// {
//     $query = UserBankDetail::with('user');

//     if ($request->status === 'pending') {
//         $query->where('is_approved', false);
//     } elseif ($request->status === 'approved') {
//         $query->where('is_approved', true);
//     }

//     if ($search = $request->search) {
//         $query->whereHas('user', function ($q) use ($search) {
//             $q->where('full_name', 'like', "%$search%")
//               ->orWhere('email', 'like', "%$search%");
//         });
//     }

//     $banks = $query->orderBy('created_at', 'desc')->paginate(10);

//     return view('backend.pages.bankdetail', compact('banks'));
// }
public function showWithdrawalForm()
{
    $user = Auth::user();
    $bankDetail = \App\Models\UserBankDetail::where('user_id', $user->id)->first();
    return view('user.pages.withdrawal', compact('bankDetail'));
}
public function approveBank($id)
{
    $bank = UserBankDetail::findOrFail($id);
    $bank->is_approved = true;
    $bank->approved_at = now();
    $bank->save();

    return redirect()->back()->with('success', 'Bank detail approved successfully.');
}

public function withdrawSubmit(Request $request)
{
    try {
        $request->validate([
            'amount' => 'required|numeric|min:10',
            'wallet' => 'required|string',
            'payment_method' => 'required|in:bank,usdt',
            'transaction_password' => 'required|string',
            'remark' => 'nullable|string|max:255',
        ]);

        if (!Auth::user()->transaction_password) {
            return back()->with('error', 'Transaction password not set. Please set your transaction password first.');
        }

        if (!Hash::check($request->transaction_password, Auth::user()->transaction_password)) {
            return back()->with('error', 'Invalid Transaction Password');
        }

        $paymentAddress = '';

        if ($request->payment_method === 'bank') {
            $request->validate([
                'account_holder' => 'required|string|max:100',
                'bank_account' => 'required|string|max:50',
                'ifsc_code' => 'required|string|max:20',
                'bank_name' => 'required|string|max:100',
            ]);

            $paymentAddress = "Holder: {$request->account_holder}\n"
                            . "Account No: {$request->bank_account}\n"
                            . "IFSC: {$request->ifsc_code}\n"
                            . "Bank: {$request->bank_name}";
        } elseif ($request->payment_method === 'usdt') {
            $request->validate([
                'usdt_address' => 'required|string',
                'usdt_network' => 'required|in:TRC20,ERC20,BEP20',
            ]);

            $paymentAddress = "USDT Address: {$request->usdt_address}\n"
                            . "Network: {$request->usdt_network}";
        }

        $amount = $request->amount;
        $charge = 5; // Flat ₹5 charge
        $payable = $amount - $charge;

        if ($payable <= 0) {
            return back()->with('error', 'Payable amount must be greater than 0 after charges.');
        }

        $withdraw = Withdraw::create([
            'user_id'           => Auth::id(),
            'amount'            => $amount,
            'processing_charge' => $charge,
            'payable_amount'    => $payable,
            'wallet_type'       => $request->wallet,
            'payment_method'    => $request->payment_method,
            'payment_address'   => $paymentAddress,
            'remark'            => $request->remark,
            'status'            => 'pending',
        ]);

        Log::info('Withdrawal request created', [
            'user_id' => Auth::id(),
            'withdraw_id' => $withdraw->id,
            'amount' => $amount,
            'payment_method' => $request->payment_method
        ]);

        return back()->with('success', 'Withdraw request submitted successfully!');

    } catch (\Illuminate\Validation\ValidationException $e) {
        return back()->withErrors($e->validator)->withInput();
    } catch (\Exception $e) {
        Log::error('Withdrawal submission error: ' . $e->getMessage(), [
            'file' => $e->getFile(),
            'line' => $e->getLine(),
            'trace' => $e->getTraceAsString()
        ]);
        return back()->with('error', 'Something went wrong. Please try again. Error: ' . $e->getMessage());
    }
}


public function myWithdraws()
{
    $withdraws = Withdraw::where('user_id', Auth::id())
                        ->latest()
                        ->paginate(10);

    return view('user.pages.payouts', compact('withdraws'));
}
public function changeTransactionPassword(Request $request)
{
    $request->validate([
        'transaction_password' => 'required|min:6|confirmed',
    ]);

    $user = auth()->user(); // या User::find($id); यदि आप Admin Panel से change कर रहे हैं
    $user->transaction_password = bcrypt($request->transaction_password);
    $user->save();

    return redirect()->back()->with('success', 'Transaction password updated successfully.');
}

public function paidPayouts()
{
    $paidPayouts = \App\Models\Withdraw::where('status', 'paid')->latest()->get();
    return view('backend.pages.paidpayouts', compact('paidPayouts'));
}

public function user() {
    return $this->belongsTo(User::class);
}

// Add this method for user available epins page
public function availableEpins()
{
    $user = auth()->user();
    $epins = \App\Models\Epin::where('user_id', $user->id)
        ->where('status', 'active')
        ->where(function($query) {
            $query->whereNull('expiry_date')->orWhere('expiry_date', '>=', now());
        })
        ->latest()
        ->get();
    return view('user.pages.available_epins', compact('epins'));
}

// Add this method for user applied epins page
public function appliedEpins()
{
    $user = auth()->user();
    $appliedEpins = \App\Models\Epin::where('user_id', $user->id)
        ->where('status', 'used')
        ->latest()
        ->get()
        ->map(function($epin) {
            return [
                'issued_to' => $epin->user_id ? (\App\Models\User::find($epin->user_id)->username ?? '-') : '-',
                'used_by' => $epin->user_id ? (\App\Models\User::find($epin->user_id)->username ?? '-') : '-',
                'code' => $epin->code,
                'amount' => $epin->amount,
                'used_at' => $epin->used_at,
            ];
        });
    return view('user.pages.applied_epin', compact('appliedEpins'));
}

// Add this method for user total earnings page
public function totalEarnings()
{
    $user = auth()->user();
    $earnings = collect([
        (object)[
            'member_id' => $user->username ?? $user->id,
            'name' => $user->full_name ?? $user->name,
            'total_earnings' => \App\Models\Transaction::where('user_id', $user->id)->where('type', 'earning')->sum('amount'),
        ]
    ]);
    return view('user.pages.total_earnings', compact('earnings'));
}

// Add this method for user refer bonus page
public function referBonus()
{
    $user = auth()->user();
    // Example: Fetch refer bonuses from transactions or a dedicated table
    $referBonuses = \App\Models\Transaction::where('user_id', $user->id)
        ->where('type', 'refer_bonus')
        ->latest()
        ->get()
        ->map(function($txn) use ($user) {
            return (object)[
                'member_id' => $user->username ?? $user->id,
                'name' => $user->full_name ?? $user->name,
                'referral_id' => $txn->referral_id ?? '-',
                'package_amount' => $txn->package_amount ?? '-',
                'refer_bonus' => $txn->amount,
                'date' => $txn->created_at,
            ];
        });
    return view('user.pages.refer_bonus', compact('referBonuses'));
}

// Add this method for user matching bonus page
public function matchingBonus()
{
    $user = auth()->user();
    // Example: Fetch matching bonuses from transactions or a dedicated table
    $matchingBonuses = \App\Models\Transaction::where('user_id', $user->id)
        ->where('type', 'matching_bonus')
        ->latest()
        ->get()
        ->map(function($txn) {
            return (object)[
                'left' => $txn->left ?? '-',
                'right' => $txn->right ?? '-',
                'matching' => $txn->matching ?? '-',
                'left_carry' => $txn->left_carry ?? '-',
                'right_carry' => $txn->right_carry ?? '-',
                'capping' => $txn->capping ?? '-',
                'matching_bonus' => $txn->amount,
                'date' => $txn->created_at,
            ];
        });
    return view('user.pages.matching_bonus', compact('matchingBonuses'));
}

//Add this method for user tree view page
// public function treeView(Request $request)
// {
//     $user = auth()->user();

//     // If admin searches by Member ID
//     if ($request->has('member_id')) {
//         $user = User::where('username', $request->member_id)->firstOrFail();
//     }

//     // Find left and right child
//     $left_user = User::where('referral_id', $user->id)->where('position', 'L')->first();
//     $right_user = User::where('referral_id', $user->id)->where('position', 'R')->first();

//     // Find sub-children (left of left, right of right)
//     $left_left_user = $left_user ? User::where('referral_id', $left_user->id)->where('position', 'L')->first() : null;
//     $right_right_user = $right_user ? User::where('referral_id', $right_user->id)->where('position', 'R')->first() : null;

//     // Count direct referrals on both sides
//     $left_members = User::where('referral_id', $user->id)->where('position', 'L')->count();
//     $right_members = User::where('referral_id', $user->id)->where('position', 'R')->count();

//     // Get sum of package amount via package relation
//     $left_amount = UserPackage::with('package')
//         ->whereIn('user_id', function($q) use ($user) {
//             $q->select('id')->from('users')->where('referral_id', $user->id)->where('position', 'L');
//         })
//         ->get()
//         ->sum(function ($pkg) {
//             return $pkg->package->amount ?? 0;
//         });

//     $right_amount = UserPackage::with('package')
//         ->whereIn('user_id', function($q) use ($user) {
//             $q->select('id')->from('users')->where('referral_id', $user->id)->where('position', 'R');
//         })
//         ->get()
//         ->sum(function ($pkg) {
//             return $pkg->package->amount ?? 0;
//         });
        
//         return view('user.pages.tree_view', [
//             'user' => $user,
//             'left_user' => $left_user,
//             'right_user' => $right_user,
//             'left_left_user' => $left_left_user,
//             'right_right_user' => $right_right_user,
//             'left_members' => $left_members,
//             'right_members' => $right_members,
//             'left_amount' => $left_amount,
//             'right_amount' => $right_amount,
//         ]);
        
// }
public function treeView(Request $request)
{
    $user = auth()->user();

    $left_user = User::where('placement_id', $user->id)->where('position', 'left')->first();
    $right_user = User::where('placement_id', $user->id)->where('position', 'right')->first();

    $left_left_user = $left_user ? User::where('placement_id', $left_user->id)->where('position', 'left')->first() : null;
    $right_right_user = $right_user ? User::where('placement_id', $right_user->id)->where('position', 'right')->first() : null;

    // Optional counts and amount data
    $left_members = 0;
    $right_members = 0;
    $left_amount = 0;
    $right_amount = 0;

    return view('user.pages.tree_view', compact('user', 'left_user', 'right_user', 'left_left_user', 'right_right_user', 'left_members', 'right_members', 'left_amount', 'right_amount'));
}

// Add this method for user referral list page
public function referralList()
{
    $user = auth()->user();
    $referrals = $user->directReferrals()->with(['referredBy', 'packages'])->get()->map(function($ref) {
        $package = $ref->packages->first();
        return (object)[
            'member_id' => $ref->username ?? $ref->id,
            'name' => $ref->full_name ?? $ref->name,
            'referral_id' => $ref->referredBy->referral_id ?? '-',
            'referrer_name' => $ref->referredBy->full_name ?? '-',
            'package' => $package ? ($package->amount ?? 'Inactive') : 'Inactive',
            'join_date' => $ref->created_at,
            'activation_date' => $package && $package->pivot->start_date ? $package->pivot->start_date : null,
        ];
    });
    return view('user.pages.referral_list', compact('referrals'));
}

// Add this method for user downline team page
public function downlineTeam()
{
    $user = auth()->user();
    $downlines = collect();
    $this->getDownlinesRecursive($user, $downlines, 1);
    return view('user.pages.downline_team', compact('downlines'));
}

// Helper to recursively get all downlines
private function getDownlinesRecursive($user, &$downlines, $level)
{
    foreach ($user->directReferrals()->with(['referredBy', 'packages'])->get() as $ref) {
        $package = $ref->packages->first();
        $downlines->push((object)[
            'member_id' => $ref->username ?? $ref->id,
            'name' => $ref->full_name ?? $ref->name,
            'referral_id' => $ref->referredBy->referral_id ?? '-',
            'referrer_name' => $ref->referredBy->full_name ?? '-',
            'level' => $level,
            'package' => $package ? ($package->amount ?? 'Inactive') : 'Inactive',
            'join_date' => $ref->created_at,
            'activation_date' => $package && $package->pivot->start_date ? $package->pivot->start_date : null,
        ]);
        $this->getDownlinesRecursive($ref, $downlines, $level + 1);
    }
}

// Show new fund request form
public function newFundRequest()
{
    $user = auth()->user();

    // अब wallets() के बजाय wallets लिया गया है (Collection)
    $wallet_balance = $user->wallets->sum(function($w) {
        return $w->type === 'credit' ? $w->amount : -$w->amount;
    });

    return view('user.pages.new_fund_request', compact('user', 'wallet_balance'));
}

// Handle fund request submission
public function storeFundRequest(Request $request)
{
    $request->validate([
        'amount' => 'required|numeric|min:1',
        'hash_key' => 'required|string|max:255',
        'remark' => 'required|string|max:255',
    ]);

    FundRequest::create([
        'user_id' => auth()->id(),
        'amount' => $request->amount,
        'hash_key' => $request->hash_key,
        'remark' => $request->remark,
        'status' => 'pending',
    ]);

    return back()->with('success', 'Your fund request has been submitted and is pending approval.');
}

public function fundRequests()
{
    $user = auth()->user();

    $fundRequests = FundRequest::with('user')
        ->where('user_id', $user->id)
        ->latest()
        ->get();

    return view('user.pages.requests_details', compact('fundRequests'));
}


public function userTransactions()
{
    $user = auth()->user();
    $transactions = \App\Models\Transaction::where('user_id', $user->id)->latest()->get();
    $activities = $transactions->map(function($txn) {
        return [
            'asset' => $txn->asset ?? 'INR', // Adjust as needed
            'type' => $txn->type ?? '-',
            'amount' => $txn->amount ?? 0,
            'transaction_id' => $txn->id ?? '-',
            'date' => $txn->created_at,
            'status' => $txn->status ?? '-',
            'fee' => $txn->fee ?? 0,
        ];
    });
    return view('user.pages.activity', compact('activities'));
}

}
