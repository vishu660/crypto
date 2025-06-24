<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
//     public function edit(Request $request): View
// {
//     return view('backend.pages.profile', [
//     ]);
// }

    public function update(Request $request)
    {
        $user = $request->user();

        $request->validate([
            'company_name' => 'required|string|max:255',
            'contact_no' => 'required|string|max:15|unique:users,mobile_no,' . $user->id,
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'country' => 'required|string|max:100',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('profile_image')) {
            $imagePath = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile_image = $imagePath;
        }

        $user->company_name = $request->company_name;
        $user->mobile_no = $request->contact_no;
        $user->email = $request->email;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->country = $request->country;

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        return Redirect::route('admin.profile.edit')->with('status', 'Profile updated!');
    }
}
