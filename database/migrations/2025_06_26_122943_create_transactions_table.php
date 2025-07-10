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

            // ✅ Updated type with new enum values
            $table->enum('type', [
                'debit',
                'credit',
                'package_buy',
                'buy_request',
                'other_types_here'
            ]);

            $table->enum('purpose_of_payment', [
                'buy_plan_one',
                'withdrawal',
                'direct_referral',
                'showing_referral',
                'turnover_salary_slab_1',
                'turnover_salary_slab_2',
                'turnover_salary_slab_3',
                'turnover_salary_slab_4',
                'turnover_salary_slab_5',
                'something_else'
            ]); 

            $table->enum('status', ['pending', 'success', 'failed']);

            // ✅ Updated gateway enum to include 'epin'
            $table->enum('gateway', ['razorpay', 'stripe', 'paypal', 'paytm', 'admin', 'epin', 'nowpayments'])->nullable();


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
