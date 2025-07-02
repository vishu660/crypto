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
    protected $signature = 'app:distribute-series-salary';

    protected $description = 'Distribute series-level based fixed salary to qualified users';

    public function handle()
    {
        $today = Carbon::today();
        $users = User::where('role', 'user')
            ->where('series_level', '>', 0)
            ->whereNull('series_salary_paid_at') // ✅ Only unpaid
            ->get();

        $distributedCount = 0;

        foreach ($users as $user) {
            $seriesLevel = $user->series_level;
            $levelData = SeriesLevel::where('level', $seriesLevel)->first();

            if (!$levelData) continue;

            $joinDate = Carbon::parse($user->created_at);
            $monthsSinceJoin = $joinDate->diffInMonths($today);

            // ✅ Check if user qualifies for salary
            if ($monthsSinceJoin >= $levelData->period_months) {
                $salaryAmount = $levelData->amount;

                // ✅ Get last balance
                $lastBalance = Wallet::where('user_id', $user->id)
                    ->orderByDesc('id')
                    ->value('balance_after') ?? 0;

                $newBalance = $lastBalance + $salaryAmount;

                // ✅ Credit salary to wallet
                Wallet::create([
                    'user_id' => $user->id,
                    'amount' => $salaryAmount,
                    'balance_after' => $newBalance,
                    'type' => 'credit',
                    'currency' => 'INR',
                    'source' => 'series_salary',
                    'message' => "Series Salary credited for Level {$seriesLevel}",
                ]);

                // ✅ Mark user as paid
                $user->series_salary_paid_at = now();
                $user->save();

                Log::info("👀 Checking User #{$user->id} | Joined: {$joinDate} | Months: {$monthsSinceJoin} | Required: {$levelData->period_months}");
                $distributedCount++;
            }
        }

        $this->info("🎉 Series Salary distributed to {$distributedCount} user(s).");
    }
}
