<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\UserPackage;
use App\Models\Wallet;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class DistributeRoi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * Run this using:
     * php artisan app:distribute-roi
     */
    protected $signature = 'app:distribute-roi';

    /**
     * The console command description.
     */
    protected $description = 'Distribute ROI to eligible users based on their packages and ROI dates';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $today = Carbon::today()->toDateString();

        $userPackages = UserPackage::with('user', 'package')
            ->where('is_active', true)
            ->get();

        $distributedCount = 0;

        foreach ($userPackages as $userPackage) {
            $roiDates = $userPackage->roi_dates; // ✅ Already casted to array

            if (in_array($today, $roiDates)) {
                $roiAmount = ($userPackage->package->investment_amount * $userPackage->package->roi_percent) / 100;

                // Add ROI to wallet
                Wallet::create([
                    'user_id' => $userPackage->user_id,
                    'amount' => $roiAmount,
                    'type' => 'credit',
                    'currency' => 'INR',
                    'source' => 'roi', // ✅ Important for tracking
                    'message' => 'ROI credited for package #' . $userPackage->package_id,
                ]);

                // Remove today's date from roi_dates
                $roiDates = array_filter($roiDates, fn($date) => $date !== $today);
                $userPackage->roi_dates = array_values($roiDates); // reindex array
                $userPackage->total_roi_given += 1;

                // Deactivate if no dates left
                if (empty($roiDates)) {
                    $userPackage->is_active = false;
                }

                $userPackage->save();

                $distributedCount++;
                Log::info("ROI ₹{$roiAmount} credited to user #{$userPackage->user_id} for package #{$userPackage->package_id}");
            }
        }

        $this->info("✅ ROI distribution process completed. Total: {$distributedCount} users credited.");
    }
}
