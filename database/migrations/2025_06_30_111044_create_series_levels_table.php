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
        Schema::create('series_levels', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('level')->unique();     // e.g. 1, 2, 3, 4, 5
            $table->decimal('amount', 12, 2);                   // ← This will be the TURNOVER requirement
            $table->decimal('salary_amount', 10, 2);            // ← This is the salary admin gives
            $table->unsignedInteger('period_months');           // ← Salary cycle (e.g. 6, 12 months)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('series_levels');
    }
};
