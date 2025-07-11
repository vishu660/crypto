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
        Schema::create('user_packages', function (Blueprint $table) {
            $table->id();

            // 🔗 Foreign Keys
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('package_id');

            // 💰 Package amount
            $table->decimal('amount', 10, 2)->nullable();

            // 📅 ROI related fields
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->json('roi_dates')->nullable();
            $table->integer('total_roi_given')->default(0);
            $table->boolean('is_active')->default(true);

            // 🏷️ Source & Status
            $table->enum('source', ['user', 'admin', 'epin'])->default('user');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');

            // 🕒 Timestamps
            $table->timestamps();

            // 🔐 Constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_packages');
    }
};
