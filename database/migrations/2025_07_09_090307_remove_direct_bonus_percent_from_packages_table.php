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
        Schema::table('packages', function (Blueprint $table) {
            $table->dropColumn('direct_bonus_percent');
        });
    }
    
    public function down()
    {
        Schema::table('packages', function (Blueprint $table) {
            $table->decimal('direct_bonus_percent', 8, 2)->nullable();
        });
    }
    
};
