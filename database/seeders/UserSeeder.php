<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin Referral Code Generate
        $adminReferralCode = strtoupper(Str::random(11));

        // Create Admin User
        $admin = User::create([
            'full_name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'mobile_no' => '9999999999',
            'country_code' => '+91',
            'introducer' => $adminReferralCode,
            'introducer_id' => null, 
            'password' => Hash::make('admin@123'),
            'transaction_password' => Hash::make('1234'),
            'role' => 'admin',
            'status' => 'active',
            'terms_accepted' => true,
        ]);

        // Create Test User referred by Admin
        User::create([
            'full_name' => 'Test User',
            'email' => 'user@gmail.com',
            'mobile_no' => '8888888888',
            'country_code' => '+91',
            'introducer' => strtoupper(Str::random(11)),
            'introducer_id' => $admin->id, 
            'password' => Hash::make('user@123'),
            'transaction_password' => Hash::make('5678'),
            'role' => 'user',
            'status' => 'active',
            'terms_accepted' => true,
        ]);
    }
}
