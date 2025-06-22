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
            $table->decimal('amount', 10, 2);
            $table->decimal('roi_percent', 5, 2); 
            $table->decimal('consultation_test_user_debit', 10, 2)->nullable(); 
            $table->decimal('consultation_income_debit', 10, 2)->nullable();
            $table->decimal('direct_bonus_percent', 5, 2); 
            $table->integer('validity_days')->default(30);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
