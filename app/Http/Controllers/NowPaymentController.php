<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\CryptoPayment;

class NowPaymentController extends Controller
{
    // ✅ Create Payment Request
    public function createPayment(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1',
        ]);

        $apiKey = env('NOWPAY_API_KEY');

        $response = Http::withHeaders([
            'x-api-key' => $apiKey,
            'Content-Type' => 'application/json',
        ])->post('https://api.nowpayments.io/v1/payment', [
            'price_amount' => $request->amount,
            'price_currency' => 'usd',
            'pay_currency' => 'usdttrc20',
            'ipn_callback_url' => route('nowpayment.callback'),
            'order_id' => 'ORDER_' . uniqid(),
            'order_description' => 'Package Purchase',
        ]);

        $data = $response->json();

        if ($response->successful()) {
            return response()->json([
                'success' => true,
                'pay_address' => $data['pay_address'],
                'pay_amount' => $data['pay_amount'],
                'payment_id' => $data['payment_id'],
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => $data['message'] ?? 'Payment request failed.',
            ], 400);
        }
    }

    // ✅ IPN Callback (NowPayments will hit this)
    public function callback(Request $request)
    {
        Log::info("NOWPayments Callback", $request->all());

        $paymentId = $request->payment_id;
        $status = $request->payment_status;

        if ($status === 'finished') {
            // Prevent duplicate entries
            $existing = CryptoPayment::where('payment_id', $paymentId)->first();
            if (!$existing) {
                CryptoPayment::create([
                    'payment_id' => $paymentId,
                    'status' => $status,
                    'amount' => $request->pay_amount,
                    'currency' => $request->pay_currency,
                    'order_id' => $request->order_id,
                ]);
            }
        }

        return response()->json(['message' => 'Callback received'], 200);
    }
}
