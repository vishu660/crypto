<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('withdraws', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->decimal('amount', 10, 2);
            $table->decimal('processing_charge', 10, 2)->default(0);
            $table->decimal('payable_amount', 10, 2);
            $table->string('wallet_type'); // e.g. 'Earning Wallet'
            $table->string('payment_method'); // e.g. 'bank', 'upi', etc.
            $table->text('payment_address')->nullable(); // e.g. bank details or UPI ID
            $table->text('remark')->nullable(); // user remark
            $table->string('status')->default('pending'); // pending, approved, rejected
            $table->text('admin_remark')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamps();

            // Optional: Foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('withdraws');
    }
};
