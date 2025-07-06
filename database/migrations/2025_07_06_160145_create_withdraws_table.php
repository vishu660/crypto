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
            $table->decimal('processing_charge', 10, 2)->nullable();
            $table->decimal('payable_amount', 10, 2)->nullable();
            $table->string('wallet_type')->nullable(); // e.g., Earning Wallet
            $table->string('payment_method')->nullable(); // e.g., bank, upi
            $table->text('payment_address')->nullable(); // full details like account no, IFSC, etc.
            $table->text('remark')->nullable();
            $table->string('status')->default('pending'); // pending, approved, rejected
            $table->text('admin_remark')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamps();

            // Foreign Key Constraint (optional)
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('withdraws');
    }
};
