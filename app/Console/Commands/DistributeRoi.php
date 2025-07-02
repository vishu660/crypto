<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\UserPackage;
use App\Models\Wallet;
use App\Models\ReferralSetting;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class DistributeRoi extends Command
{
    protected $signature = 'app:distribute-roi';

    protected $description = 'Distribute ROI to eligible users based on their packages and ROI dates';

    public function handle()
    {
        $today = Carbon::today()->toDateString();

        $userPackages = UserPackage::with('user.directReferrals', 'package')
            ->where('is_active', true)
            ->get();

        $distributedCount = 0;

        // ✅ Get required referral count from settings
        $referralSetting = ReferralSetting::first();
        $requiredReferrals = $referralSetting->required_referrals ?? 2;

        foreach ($userPackages as $userPackage) {
            $user = $userPackage->user;

            // Skip if no user or not enough direct referrals
            if (!$user || $user->directReferrals->count() < $requiredReferrals) {
                Log::info("⛔ User #{$userPackage->user_id} skipped: Not enough direct referrals.");
                continue;
            }

            // Decode ROI Dates safely
            $roiDatesRaw = $userPackage->roi_dates;
            $roiDates = is_string($roiDatesRaw) ? json_decode($roiDatesRaw, true) : $roiDatesRaw;

            if (!is_array($roiDates)) {
                Log::warning("⚠️ Invalid ROI dates for UserPackage ID: {$userPackage->id}");
                continue;
            }

            if (in_array($today, $roiDates)) {
                $roiAmount = ($userPackage->package->investment_amount * $userPackage->package->roi_percent) / 100;

                // Get last balance
                $lastBalance = Wallet::where('user_id', $userPackage->user_id)
                    ->orderByDesc('id')
                    ->value('balance_after') ?? 0;

                $newBalance = $lastBalance + $roiAmount;

                // Wallet entry
                Wallet::create([
                    'user_id' => $userPackage->user_id,
                    'amount' => $roiAmount,
                    'balance_after' => $newBalance,
                    'type' => 'credit',
                    'currency' => 'INR',
                    'source' => 'roi',
                    'message' => 'ROI credited for package #' . $userPackage->package_id,
                ]);

                // Update package
                $roiDates = array_filter($roiDates, fn($date) => $date !== $today);
                $userPackage->roi_dates = json_encode(array_values($roiDates));
                $userPackage->total_roi_given += 1;

                if (empty($roiDates)) {
                    $userPackage->is_active = false;
                }

                $userPackage->save();

                $distributedCount++;
                Log::info("✅ ROI ₹{$roiAmount} credited to user #{$userPackage->user_id} for package #{$userPackage->package_id}");
            }
        }

        $this->info("✅ ROI distribution completed. Total: {$distributedCount} users credited.");
    }
}
