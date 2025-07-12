<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use App\Models\SeriesLevel;
use App\Models\Wallet;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class DistributeSeriesSalary extends Command
{
    /**
     * Command Signature
     */
    protected $signature = 'app:distribute-series-salary';

    /**
     * Command Description
     */
    protected $description = 'Distribute fixed series-level salary to qualified users';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $today = Carbon::today();

        // Only users who haven't received series salary yet
        $users = User::where('role', 'user')
            ->where('series_level', '>', 0)
            ->whereNull('series_salary_paid_at')
            ->get();

        $distributedCount = 0;

        foreach ($users as $user) {
            $level = $user->series_level;
            $levelData = SeriesLevel::where('level', $level)->first();

            if (!$levelData) continue;

            // Months since user joined
            $joinDate = Carbon::parse($user->created_at);
            $monthsSinceJoin = $joinDate->diffInMonths($today);

            if ($monthsSinceJoin >= $levelData->period_months) {
                $salaryAmount = $levelData->salary_amount;

                // Get last wallet balance
                $lastBalance = Wallet::where('user_id', $user->id)
                    ->orderByDesc('id')
                    ->value('balance_after') ?? 0;

                $newBalance = $lastBalance + $salaryAmount;

                // Credit wallet
                Wallet::create([
                    'user_id' => $user->id,
                    'amount' => $salaryAmount,
                    'balance_after' => $newBalance,
                    'type' => 'credit',
                    'currency' => 'USDT',
                    'source' => 'series_salary',
                    'message' => "Series Salary credited for Level {$level}",
                ]);

                // Mark salary paid
                $user->series_salary_paid_at = now();
                $user->save();

                // Log info
                Log::info("✅ Series Salary Paid: User #{$user->id} | Level: {$level} | Joined: {$joinDate} | Months Passed: {$monthsSinceJoin}");

                $distributedCount++;
            }
        }

        $this->info("🎉 Series Salary successfully distributed to {$distributedCount} user(s).");
    }
}
