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
        Schema::table('series_levels', function (Blueprint $table) {
            $table->integer('period_months')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('series_levels', function (Blueprint $table) {
            $table->dropColumn('period_months');
        });
    }
};
