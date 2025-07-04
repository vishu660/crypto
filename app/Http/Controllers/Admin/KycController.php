<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class KycController extends Controller
{
    public function digilockerCallback(Request $request)
    {
        $code = $request->input('code');
        if (!$code) {
            return redirect()->route('user.pages.kyc_step1_new')->with('error', 'DigiLocker verification failed.');
        }

        // 1. Exchange code for access token (DigiLocker API)
        $tokenResponse = Http::asForm()->post('https://digilocker.meripehchaan.gov.in/public/oauth2/1/token', [
            'client_id' => 'ACTUAL_CLIENT_ID_YAHAN',
            'client_secret' => 'ACTUAL_CLIENT_SECRET_YAHAN',
            'grant_type' => 'authorization_code',
            'code' => $code,
            'redirect_uri' => 'ACTUAL_REGISTERED_REDIRECT_URI_YAHAN',
        ]);
        $accessToken = $tokenResponse['access_token'] ?? null;

        // 2. Fetch user KYC data from DigiLocker
        $kycData = [];
        if ($accessToken) {
            $kycResponse = Http::withToken($accessToken)
                ->get('https://digilocker.meripehchaan.gov.in/public/oauth2/1/userinfo');
            $kycData = $kycResponse->json();
        }

        // 3. Save KYC data to database
        $user = auth()->user();
        $user->kyc_data = json_encode($kycData);
        $user->kyc_status = 'pending';
        $user->save();

        DB::table('kyc_requests')->insert([
            'user_id' => $user->id,
            'aadhaar' => $kycData['aadhaar'] ?? null,
            'pan' => $kycData['pan'] ?? null,
            'dl' => $kycData['driving_license'] ?? null,
            'kyc_json' => json_encode($kycData),
            'status' => 'pending',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 4. Notify admin (optional: send email or show in admin panel)
        // You can create a notification or just show in admin dashboard

        return redirect()->route('user.pages.kyc_step1_new')->with('success', 'KYC submitted! Awaiting admin approval.');
    }
}
