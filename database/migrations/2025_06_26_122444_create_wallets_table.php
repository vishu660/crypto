<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->decimal('amount', 12, 2);
            $table->decimal('balance_after', 12, 2)->nullable(); // ✅ Optional
            $table->enum('currency', ['INR', 'USDT']);
            $table->enum('type', ['debit', 'credit']);
            $table->enum('source', ['roi', 'referral', 'deposit', 'withdrawal', 'admin', 'bonus'])->default('roi');
            $table->text('message')->nullable();
            $table->timestamps();

            $table->index('user_id'); // ✅ Performance
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('wallets');
    }
};
