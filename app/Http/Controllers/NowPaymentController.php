<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\CryptoPayment;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Package;
use App\Models\UserPackage;
use Carbon\Carbon;
use DB;
use App\Helpers\RoiHelper;

class NowPaymentController extends Controller
{
    // STEP 1: Create Payment Request
    public function createPayment(Request $request)
    {
        try {
            $request->validate([
                'amount' => 'required|numeric|min:1',
                'package_id' => 'required|exists:packages,id',
            ]);

            $user = auth()->user();
            
            if (!$user) {
                return response()->json([
                    'success' => false,
                    'message' => 'User not authenticated.',
                ], 401);
            }

            $package = Package::find($request->package_id);
            if (!$package) {
                return response()->json([
                    'success' => false,
                    'message' => 'Package not found.',
                ], 404);
            }

            // ✅ Use config() instead of env()
            $apiKey = '0TQY8D8-B96MB3F-JTEMJ69-S8C70JT'; 
            
            if (!$apiKey) {
                return response()->json([
                    'success' => false,
                    'message' => 'API key not configured.',
                ], 500);
            }

            $order_id = 'USER_' . $user->id . '_PACKAGE_' . $request->package_id . '_' . uniqid();

            $response = Http::withHeaders([
                'x-api-key' => $apiKey,
                'Content-Type' => 'application/json',
            ])->post('https://api.nowpayments.io/v1/payment', [
                'price_amount' => $request->amount,
                'price_currency' => 'usd',
                'pay_currency' => 'usdttrc20',
                'ipn_callback_url' => route('nowpayment.callback'),
                'order_id' => $order_id,
                'order_description' => 'Package Purchase via NowPayments',
            ]);

            $data = $response->json();

            if ($response->successful()) {
                return response()->json([
                    'success' => true,
                    'pay_address' => $data['pay_address'],
                    'pay_amount' => $data['pay_amount'],
                    'payment_id' => $data['payment_id'],
                    'payment_url' => "https://nowpayments.io/payment/" . $data['payment_id'],
                ]);
            } else {
                Log::error('NowPayments API Error', [
                    'response' => $data,
                    'status' => $response->status()
                ]);
                
                return response()->json([
                    'success' => false,
                    'message' => $data['message'] ?? 'Payment request failed.',
                ], 400);
            }
        } catch (\Exception $e) {
            Log::error('NowPayments Create Payment Error', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while processing your request.',
            ], 500);
        }
    }

    // STEP 2: IPN Callback Handler from NowPayments
    public function callback(Request $request)
    {
        Log::info("NOWPayments Callback", $request->all());

        try {
            $paymentId = $request->payment_id;
            $status = $request->payment_status;
            $orderId = $request->order_id;

            // Extract user_id and package_id from order_id
            preg_match('/USER_(\d+)_PACKAGE_(\d+)_/', $orderId, $matches);
            $userId = $matches[1] ?? null;
            $packageId = $matches[2] ?? null;

            if ($status === 'finished' && $userId && $packageId) {
                $existing = CryptoPayment::where('payment_id', $paymentId)->first();
                if ($existing) {
                    return response()->json(['message' => 'Already processed'], 200);
                }

                DB::transaction(function () use ($request, $paymentId, $userId, $packageId, $orderId) {
                    // Log crypto payment
                    CryptoPayment::create([
                        'payment_id' => $paymentId,
                        'status' => $request->payment_status,
                        'amount' => $request->pay_amount,
                        'currency' => $request->pay_currency,
                        'order_id' => $orderId,
                    ]);

                    $user = User::find($userId);
                    $package = Package::find($packageId);

                    if ($user && $package) {
                        $startDate = Carbon::today();
                        $validityDays = (int)$package->validity_days;
                        $endDate = $startDate->copy()->addDays($validityDays - 1);

                        $roiDates = RoiHelper::generateRoiDates(
                            $startDate,
                            $validityDays,
                            $package->type_of_investment_days,
                            [
                                'daily_days' => $package->daily_days,
                                'weekly_day' => $package->weekly_day,
                                'monthly_date' => $package->monthly_date,
                            ]
                        );

                        UserPackage::create([
                            'user_id' => $user->id,
                            'package_id' => $package->id,
                            'start_date' => $startDate->toDateString(),
                            'end_date' => $endDate->toDateString(),
                            'roi_dates' => json_encode($roiDates),
                            'total_roi_given' => 0,
                            'is_active' => true,
                            'source' => 'crypto',
                            'amount' => $package->investment_amount ?? $package->amount,
                        ]);

                        Transaction::create([
                            'user_id' => $user->id,
                            'amount' => $package->investment_amount ?? $package->amount,
                            'currency' => strtoupper($request->pay_currency),
                            'type' => 'package_buy',
                            'status' => 'success',
                            'gateway' => 'nowpayments',
                            'purpose_of_payment' => 'buy_plan_one',
                            'message' => 'Package auto-bought via NowPayments',
                        ]);
                    }
                });
            }
        } catch (\Exception $e) {
            Log::error('NowPayments Callback Error', [
                'error' => $e->getMessage(),
                'request' => $request->all()
            ]);
            
            return response()->json(['message' => 'Callback processing failed'], 500);
        }

        return response()->json(['message' => 'Callback processed'], 200);
    }
}
