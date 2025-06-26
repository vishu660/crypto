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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('investment_amount', 10, 2);
            $table->decimal('roi_percent', 5, 2);
            $table->integer('validity_days');
            $table->decimal('direct_bonus_percent', 5, 2);
            $table->decimal('referral_income', 5, 2);
            $table->boolean('is_active')->default(0);
            $table->string('type_of_investment_days');
            $table->json('daily_days')->nullable();
            $table->string('weekly_day')->nullable();
            $table->integer('monthly_date')->nullable();
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
