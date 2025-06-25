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
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Str;

class RegisteredUserController extends Controller
{
    /**
     * Show the registration form
     */
    public function create(Request $request): View
    {
        $referralCode = $request->query('ref'); 
    
        $adminUser = \App\Models\User::where('role', 'admin')->first();
        $adminIntroducer = $adminUser ? $adminUser->introducer : 'ADMINCODE';
    
        $introducerCode = $adminIntroducer;
    
        if ($referralCode) {
            $refUser = \App\Models\User::where('introducer', $referralCode)->first();
            if ($refUser) {
                $introducerCode = $refUser->introducer;
            }
        }
    
        return view('auth.register', [
            'introducerCode' => $introducerCode,
        ]);
    }
    

    /**
     * Handle user registration request
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'mobile_no' => ['required', 'digits_between:7,15', 'unique:users,mobile_no'],
            'country_code' => ['required', 'string'],
            'introducer' => ['nullable', 'string'],
            'terms_accepted' => ['accepted'],
        ]);
    
        // Lookup introducer_id if introducer code is provided
        $introducerUser = null;
        if ($request->filled('introducer')) {
            $introducerUser = User::where('introducer', $request->introducer)->first();
        }
    
        // Generate passwords and OTP
        $rawPassword = Str::random(8);
        $rawTxnPassword = rand(1000, 9999);
        $otp = rand(1000, 9999);
    
        // Cache OTP for 5 mins
        Cache::put('otp_' . $request->mobile_no, $otp, now()->addMinutes(5));
    
        // Send OTP (optional)
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
            'introducer' => User::generateReferralCode(),
            'introducer_id' => $introducerUser?->id, 
            'password' => Hash::make($rawPassword),
            'transaction_password' => Hash::make($rawTxnPassword),
            'role' => 'user',
            'status' => 'pending',
            'otp' => $otp,
            'otp_expires_at' => now()->addMinutes(5),
            'terms_accepted' => true,
        ]);
    
        event(new Registered($user));
    
        return redirect()->route('verify-otp')->with([
            'user_id' => $user->id,
            'otp' => $otp,
            'rawPassword' => $rawPassword,
            'rawTxnPassword' => $rawTxnPassword,
            'introducer' => $introducerUser?->introducer,
        ]);
    }
    
}
