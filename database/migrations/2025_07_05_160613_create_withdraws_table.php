<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('withdraws', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');

            $table->decimal('amount', 10, 2);               // Requested amount
            $table->decimal('processing_charge', 10, 2)->default(0); // Optional
            $table->decimal('payable_amount', 10, 2);       // amount - charge

            $table->string('wallet_type')->default('Earning Wallet'); // From which wallet
            $table->string('payment_method');               // 'bank' or 'usdt'
            $table->text('payment_address');                // Bank details OR USDT address

            $table->string('status')->default('pending');   // pending, approved, rejected
            $table->string('admin_remark')->nullable();     // optional rejection remark
            $table->timestamp('approved_at')->nullable();   // on approve

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('withdraws');
    }
};
