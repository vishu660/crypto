<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('mobile_no')->unique();
            $table->string('country_code')->default('+91');
            $table->string('referral_id')->nullable(); 
            $table->unsignedBigInteger('referral_by')->nullable();
            $table->foreign('referral_by')->references('id')->on('users')->onDelete('set null');
            $table->string('password');
            $table->string('transaction_password');
            $table->string('company_name')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('profile_image')->nullable();
            $table->enum('role', ['admin', 'user'])->default('user');
            $table->decimal('balance', 10, 2)->default(0.00);
            $table->string('order_id')->nullable();
            $table->string('otp')->nullable();
            $table->timestamp('otp_expires_at')->nullable();
            $table->enum('status', ['pending', 'active', 'inactive', 'banned'])->default('pending');
            $table->boolean('terms_accepted')->default(false);
            $table->string('aadhaar_front')->nullable();
            $table->string('aadhaar_back')->nullable();
            $table->string('pan_card')->nullable();
            $table->string('driving_front')->nullable();
            $table->string('driving_back')->nullable();
            $table->json('kyc_data')->nullable();
            $table->string('kyc_status')->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}
