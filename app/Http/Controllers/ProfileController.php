<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request): RedirectResponse
    {
        $user = auth()->user();
    
        $request->validate([
            'company_name' => 'required|string|max:255',
            'contact_no' => 'required|string|max:15|unique:users,mobile_no,' . $user->id,
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'country' => 'required|string|max:100',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        // Profile Image Upload
        if ($request->hasFile('profile_image')) {
            $imagePath = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile_image = $imagePath;
        }
    
        // Update other profile fields
        $user->company_name = $request->company_name;
        $user->mobile_no = $request->contact_no;
        $user->email = $request->email;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->country = $request->country;
    
        // Reset email verification if email changed
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }
    
        $user->save();
    
        return Redirect::route('admin.profile.edit')->with('status', 'Profile updated successfully!');
    }
    

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
