<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;
use Illuminate\Support\Str;

class RegisteredUserController extends Controller
{
    /**
     * Show the registration form
     */
    public function create(Request $request, $referralCode = null): View
    {
        if ($referralCode) {
            $refUser = User::where('referral_id', $referralCode)->first();
            if ($refUser) {
                return view('auth.register', ['referralCode' => $referralCode]);
            }
        }

        $adminUser = User::where('role', 'admin')->first();
        $referralCode = $adminUser?->referral_id ?? 'ADMINCODE';

        return view('auth.register', ['referralCode' => $referralCode]);
    }

    /**
     * Handle user registration request
     */
    public function store(Request $request): RedirectResponse
{
    $request->validate([
        'full_name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
        'mobile_no' => ['required', 'regex:/^[0-9]{10}$/', 'unique:users,mobile_no'],
        'country_code' => ['required', 'string'],
        'referral_id' => ['nullable', 'string'],
        'terms_accepted' => ['accepted'],
    ], [
        'mobile_no.regex' => 'Mobile number must be exactly 10 digits.',
    ]);

    // ✅ Check referral user or fallback to admin
    $referralUser = null;

    if ($request->filled('referral_id')) {
        $referralUser = User::where('referral_id', $request->referral_id)->first();
        if (!$referralUser) {
            return back()->withErrors(['referral_id' => 'Invalid referral code.']);
        }
    } else {
        $referralUser = User::where('role', 'admin')->first();
    }

    // Generate passwords and OTP
    $rawPassword = Str::random(8);
    $rawTxnPassword = rand(1000, 9999);
    $otp = rand(1000, 9999);

    // Cache OTP for 5 mins
    Cache::put('otp_' . $request->mobile_no, $otp, now()->addMinutes(5));

    // Send OTP (Optional SMS API)
    try {
        Http::post('https://www.fast2sms.com/dev/bulkV2', [
            'authorization' => 'YOUR_API_KEY',
            'message' => "Your OTP is $otp",
            'language' => 'english',
            'route' => 'q',
            'numbers' => $request->mobile_no,
        ]);
    } catch (\Exception $e) {
        return back()->withErrors(['mobile_no' => 'OTP sending failed: ' . $e->getMessage()]);
    }

    // Create user
    $user = User::create([
        'full_name' => $request->full_name,
        'email' => $request->email,
        'mobile_no' => $request->mobile_no,
        'country_code' => $request->country_code,
        'referral_id' => User::generateReferralCode(),
        'referral_by' => $referralUser?->id,
        'password' => Hash::make($rawPassword),
        'transaction_password' => Hash::make($rawTxnPassword),
        'role' => 'user',
        'status' => 'pending',
        'otp' => $otp,
        'otp_expires_at' => now()->addMinutes(5),
        'terms_accepted' => true,
    ]);

    event(new Registered($user));

    // Store raw credentials (temporary, for OTP confirmation)
    session([
        'user_id' => $user->id,
        'rawPassword' => $rawPassword,
        'rawTxnPassword' => $rawTxnPassword,
    ]);

    return redirect()->route('verify-otp');
}
}
