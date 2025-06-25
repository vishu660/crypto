<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();
    
        $user = Auth::user();
    
        if ($user->role === 'admin') {
            return redirect()->route('admin-dashboard');
        }elseif ($user->role === 'user') {
            return redirect()->route('user-dashboard'); // ✅ या जहां आप भेजना चाहें
        }
    
        return redirect()->route('login')->withErrors(['email' => 'Unauthorized role.']);
    }
    

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function showOtpForm(Request $request)
    {
        $userId = session('user_id') ?? $request->query('user_id');
        $rawPassword = session('rawPassword');
        $rawTxnPassword = session('rawTxnPassword');

        $user = \App\Models\User::find($userId);

        $userId = session('user_id');
$rawPassword = session('rawPassword');

if (!$user || !$rawPassword) {
    return redirect()->route('register')->withErrors(['user' => 'Session expired. Please register again.']);
}

        return view('backend.auth.verify-otp', [
            'user' => $user,
            'rawPassword' => $rawPassword,
            'rawTxnPassword' => $rawTxnPassword,
        ]);
    }
}
