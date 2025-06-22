<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


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
            'full_name' => 'required|string|max:255',
            'email_id' => 'required|email|unique:users,email_id',
            'mobile_no' => 'required|digits_between:7,15|unique:users,mobile_no',
            'country_code' => 'required|string',
            'introducer' => 'nullable|string',
            'terms_accepted' => 'accepted'
        ]);

        // Generate passwords and OTP
        $rawPassword = Str::random(8);
        $rawTxnPassword = rand(1000, 9999);
        $otp = rand(1000, 9999);

        // Cache OTP
        Cache::put('otp_' . $request->mobile_no, $otp, now()->addMinutes(5));

        // Send OTP via SMS API
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

        // Create User
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
            'otp' => $otp,
            'otp_expires_at' => now()->addMinutes(5),
            'terms_accepted' => true,
        ]);

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
        return view('backend.auth.login');
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
            $user = Auth::user();
            if ($user->status !== 'active') {
                Auth::logout();
                return back()->withErrors(['email_id' => 'Your account is not active yet.']);
            }
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

    // OTP Verification
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'otp' => 'required|digits:4',
        ]);

        $user = User::findOrFail($request->user_id);
        $cachedOtp = Cache::get('otp_' . $user->mobile_no);

        if ($cachedOtp == $request->otp && now()->lt($user->otp_expires_at)) {
            $user->status = 'active';
            $user->otp = null;
            $user->otp_expires_at = null;
            $user->save();

            Auth::login($user);
            return redirect()->route('admin-dashboard')->with('success', 'OTP verified and logged in successfully!');
        } else {
            return back()->withErrors(['otp' => 'Invalid or expired OTP, please try again.']);
        }
    }
}
