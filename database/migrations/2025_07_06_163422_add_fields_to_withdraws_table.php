<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToWithdrawsTable extends Migration
{
    public function up()
    {
        Schema::table('withdraws', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id')->nullable();
            $table->decimal('amount', 10, 2)->nullable();
            $table->decimal('processing_charge', 10, 2)->nullable();
            $table->decimal('payable_amount', 10, 2)->nullable();
            $table->string('wallet_type')->nullable();
            $table->string('payment_method')->nullable();
            $table->text('payment_address')->nullable();
            $table->string('remark')->nullable();
            $table->string('status')->default('pending');
            $table->string('admin_remark')->nullable();
            $table->timestamp('approved_at')->nullable();
        });
    }

    public function down()
    {
        Schema::table('withdraws', function (Blueprint $table) {
            $table->dropColumn([
                'user_id',
                'amount',
                'processing_charge',
                'payable_amount',
                'wallet_type',
                'payment_method',
                'payment_address',
                'remark',
                'status',
                'admin_remark',
                'approved_at',
            ]);
        });
    }
}
