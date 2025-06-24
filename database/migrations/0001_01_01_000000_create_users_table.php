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
            $table->string('introducer')->nullable(); 
            $table->unsignedBigInteger('introducer_id')->nullable();
            $table->foreign('introducer_id')->references('id')->on('users')->onDelete('set null');
            $table->string('password');
            $table->string('transaction_password');
            $table->enum('role', ['admin', 'user'])->default('user');
            $table->decimal('balance', 10, 2)->default(0.00);
            $table->string('order_id')->nullable();
            $table->string('otp')->nullable();
            $table->timestamp('otp_expires_at')->nullable();
            $table->enum('status', ['pending', 'active', 'inactive', 'banned'])->default('pending');
            $table->boolean('terms_accepted')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}
