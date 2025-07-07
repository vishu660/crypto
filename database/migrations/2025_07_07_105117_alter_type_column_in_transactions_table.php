<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    DB::statement("ALTER TABLE transactions MODIFY COLUMN type ENUM('debit', 'credit', 'package_buy', 'buy_request', 'other_types_here')");
}

public function down()
{
    // पुराने enum को restore करें
    DB::statement("ALTER TABLE transactions MODIFY COLUMN type ENUM('debit', 'credit')");
}

};
