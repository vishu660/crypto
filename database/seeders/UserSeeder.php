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
            'email_id' => 'admin@gmail.com',
            'mobile_no' => '9999999999',
            'country_code' => '+91',
            'introducer' => null,
            'password' => Hash::make('admin@123'),
            'transaction_password' => Hash::make('1234'),
            'role' => 'admin',
            'status' => 'active',
            'terms_accepted' => true,
        ]);

     
    }
}
