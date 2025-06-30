<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SeriesLevel;

class SeriesLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $levels = [
            ['level' => 1, 'amount' => 5, 'period_months' => 6],
            ['level' => 2, 'amount' => 10, 'period_months' => 12],
            ['level' => 3, 'amount' => 20, 'period_months' => 24],
            ['level' => 4, 'amount' => 40, 'period_months' => 48],
            ['level' => 5, 'amount' => 80, 'period_months' => 96],
        ];

        foreach ($levels as $data) {
            SeriesLevel::updateOrCreate(
                ['level' => $data['level']],
                ['amount' => $data['amount'], 'period_months' => $data['period_months']]
            );
        }
    }
}
