<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\User;
use App\Models\Transaction;

class UserController extends Controller
{
    public function dashboard()
    {
        $packages = Package::where('is_active', 1)->get();
        return view('user.user', compact('packages'));
    }

    public function index()
    {
        $users = User::all(); 
        return view('user.user', compact('users'));
    }

    public function profile($role = 'user')
    {
        // Get the authenticated user's data
        $user = auth()->user();
        // Get users filtered by role (default is 'user')
        $users = User::where('role', $role)->get();
        // Get all available roles
        $availableRoles = User::distinct()->pluck('role')->filter()->values();
        return view('user.pages.profile', compact('user', 'users', 'availableRoles', 'role'));
    }

    public function getUsersByRole($role = 'user')
    {
        // Get users filtered by specific role
        $users = User::where('role', $role)->get();
        // Get all available roles
        $availableRoles = User::distinct()->pluck('role')->filter()->values();
        return view('user.pages.profile', compact('users', 'availableRoles', 'role'));
    }

    public function buy(Request $request)
    {
        // Log the request method for debugging
        \Log::info('Package buy request received', [
            'method' => $request->method(),
            'url' => $request->url(),
            'user_agent' => $request->userAgent(),
            'ip' => $request->ip()
        ]);

        // Check if the request method is POST
        if (!$request->isMethod('post')) {
            \Log::warning('Invalid request method for package purchase', [
                'method' => $request->method(),
                'expected' => 'POST'
            ]);
            return redirect()->route('user')->with('error', 'Invalid request method. Please use the Buy button to purchase packages.');
        }

        // Check if user is authenticated
        if (!auth()->check()) {
            \Log::warning('Unauthenticated user attempted to purchase package');
            return redirect()->route('login')->with('error', 'Please login to purchase packages.');
        }

        $request->validate([
            'package_id' => 'required|exists:packages,id',
        ]);

        $package = Package::findOrFail($request->package_id);

        // Check if package is active
        if (!$package->is_active) {
            \Log::info('User attempted to purchase inactive package', [
                'user_id' => auth()->id(),
                'package_id' => $package->id
            ]);
            return back()->with('error', 'This package is not available for purchase.');
        }

        try {
            // Create transaction
            $transaction = new Transaction();
            $transaction->user_id = auth()->id();
            $transaction->amount = $package->investment_amount;
            $transaction->currency = 'INR';
            $transaction->type = 'debit';
            $transaction->purpose_of_payment = 'buy_plan_one';
            $transaction->status = 'pending';
            $transaction->gateway = 'admin'; // Admin will approve
            $transaction->message = 'Package purchase request sent for admin approval';
            $transaction->save();

            \Log::info('Package purchase request created successfully', [
                'user_id' => auth()->id(),
                'package_id' => $package->id,
                'transaction_id' => $transaction->id,
                'amount' => $transaction->amount
            ]);

            return back()->with('success', 'Purchase request sent! Admin will approve within 30 minutes.');
        } catch (\Exception $e) {
            \Log::error('Failed to create package purchase request', [
                'user_id' => auth()->id(),
                'package_id' => $package->id,
                'error' => $e->getMessage()
            ]);
            return back()->with('error', 'Failed to create purchase request. Please try again.');
        }
    }
}
