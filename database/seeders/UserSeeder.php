<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Admin
        User::create([
            'full_name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'mobile_no' => '9999999999',
            'country_code' => '+91',
            'introducer' => null,
            'password' => Hash::make('admin@123'),
            'transaction_password' => Hash::make('1234'),
            'role' => 'admin',
            'status' => 'active',
            'terms_accepted' => true,
        ]);

        // Create Normal User
        User::create([
            'full_name' => 'Test User',
            'email' => 'user@gmail.com',
            'mobile_no' => '8888888888',
            'country_code' => '+91',
            'introducer' => 'admin@gmail.com',
            'password' => Hash::make('user@123'),
            'transaction_password' => Hash::make('5678'),
            'role' => 'user', 
            'status' => 'active',
            'terms_accepted' => true,
        ]);
    }
}
