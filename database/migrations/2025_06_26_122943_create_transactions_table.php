<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
            $table->decimal('amount', 12, 2); 
            $table->string('currency', 10)->default('INR');
            $table->enum('type', ['debit', 'credit']); 
            $table->enum('purpose_of_payment', ['buy_plan_one', 'withdrawal']); 
            $table->enum('status', ['pending', 'success', 'failed']);
            $table->enum('gateway', ['razorpay', 'stripe', 'paypal', 'paytm', 'admin'])->nullable();
            $table->text('message')->nullable();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
