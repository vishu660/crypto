<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    // Show Registration Form
    public function showRegister()
    {
        return view('backend.auth.register');
    }

    // Handle Registration Form Submit
    public function register(Request $request)
    {
        $request->validate([
            'full_name' => '|string|max:255',
            'email_id' => 'required|email|unique:users,email_id',
            'mobile_no' required=> 'required|digits_between:7,15|unique:users,mobile_no',
            'country_code' => 'required|string',
            'introducer' => 'nullable|string',
            'terms_accepted' => 'accepted',
        ]);

        // Generate random passwords & OTP
        $rawPassword = Str::random(8);
        $rawTxnPassword = rand(1000, 9999);
        $otp = rand(1000, 9999);

        // Cache the OTP for 5 minutes
        Cache::put('otp_' . $request->mobile_no, $otp, now()->addMinutes(5));

        // Create the user
        $user = User::create([
            'full_name' => $request->full_name,
            'email_id' => $request->email_id,
            'mobile_no' => $request->mobile_no, 
            'country_code' => $request->country_code,
            'introducer' => $request->introducer,
            'password' => Hash::make($rawPassword),
            'transaction_password' => Hash::make($rawTxnPassword),
            'role' => 'user',
            'status' => 'pending',
            'terms_accepted' => true,
        ]);

        // TODO: Send OTP via email/sms (optional)

        // Return OTP page
        return view('backend.auth.verify-otp', [
            'user' => $user,
            'otp' => $otp,
            'rawPassword' => $rawPassword,
            'rawTxnPassword' => $rawTxnPassword,
        ]);
    }

    // Show Login Form
    public function showLogin()
    {
        return view('auth.login');
    }

    // Handle Login
    public function login(Request $request)
    {
        $request->validate([
            'email_id' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = [
            'email_id' => $request->email_id,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin-dashboard');
        }

        return back()->withErrors(['email_id' => 'Invalid credentials']);
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function verifyOtp(Request $request){
    $request->validate([
        'user_id' => 'required|exists:users,id',
        'otp' => 'required|digits:4',
    ]);

    $user = User::findOrFail($request->user_id);
    $cachedOtp = Cache::get('otp_' . $user->mobile_no);

    if ($cachedOtp == $request->otp) {
        $user->status = 'active';
        $user->save();
        Auth::login($user);
        return redirect()->route('admin-dashboard')->with('success', 'OTP verified and logged in successfully!');
    } else {
        return back()->withErrors(['otp' => 'Invalid OTP, please try again.']);
    }
}

}
