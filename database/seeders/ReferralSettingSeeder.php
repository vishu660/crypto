<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ReferralSetting;

class ReferralSettingSeeder extends Seeder
{
    public function run(): void
    {
        ReferralSetting::create([
            'required_referrals' => 2
        ]);
    }
}
