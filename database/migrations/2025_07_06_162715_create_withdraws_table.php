<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('withdraws', function (Blueprint $table) {
            $table->id();

            // ✅ User relation with foreign key
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // ✅ Amount related fields
            $table->decimal('amount', 10, 2);
            $table->decimal('processing_charge', 10, 2)->default(0);
            $table->decimal('payable_amount', 10, 2);

            // ✅ Payment details
            $table->string('wallet_type');              // E.g. 'Earning Wallet'
            $table->string('payment_method');           // E.g. 'bank', 'upi'
            $table->text('payment_address')->nullable(); // Bank/UPI/Crypto address

            // ✅ Remarks
            $table->text('remark')->nullable();         // User's own comment
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->text('admin_remark')->nullable();   // Admin's feedback

            // ✅ Approval timestamp
            $table->timestamp('approved_at')->nullable();

            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('withdraws');
    }
};
