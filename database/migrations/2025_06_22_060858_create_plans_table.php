<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('investment_amount', 10, 2);
            $table->enum('type_of_investment_days', ['daily', 'weekly', 'monthly']);
            $table->decimal('roi_percent', 5, 2)->nullable();
            $table->integer('validity_days');
            $table->decimal('consultation_income_debit', 10, 2)->default(0);
            $table->decimal('consultation_test_user_debit', 10, 2)->default(0);
            $table->decimal('direct_bonus_percent', 5, 2)->default(0);
            $table->decimal('ibot_investment', 10, 2)->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};