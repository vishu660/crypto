<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class KycApiController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'kyc_type' => 'required|in:aadhaar,pan,dl',
            'aadhaar_number' => 'required_if:kyc_type,aadhaar|nullable|digits:12',
            'pan_number' => 'required_if:kyc_type,pan|nullable|string|max:10',
            'dl_number' => 'required_if:kyc_type,dl|nullable|string|max:20',
            'front_image' => 'required|image|max:4096',
            'back_image' => 'required|image|max:4096',
            'selfie' => 'required|image|max:4096',
        ]);

        $user = Auth::user();

        if ($request->kyc_type === 'aadhaar') {
            $user->aadhaar = $request->aadhaar_number;
        } elseif ($request->kyc_type === 'pan') {
            $user->pan = $request->pan_number;
        } elseif ($request->kyc_type === 'dl') {
            $user->dl = $request->dl_number;
        }

        if ($request->hasFile('front_image')) {
            $user->kyc_front = $request->file('front_image')->store('kyc/front', 'public');
        }

        if ($request->hasFile('back_image')) {
            $user->kyc_back = $request->file('back_image')->store('kyc/back', 'public');
        }

        if ($request->hasFile('selfie')) {
            $user->kyc_selfie = $request->file('selfie')->store('kyc/selfie', 'public');
        }

        $user->kyc_status = 'pending';
        $user->save();

        return response()->json([
            'message' => 'KYC submitted successfully!',
            'status' => 'pending'
        ], 200);
    }
}
