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
            $table->renameColumn('enableBreackDown', 'enableBreakDown');
        });
    }
    
    public function down()
    {
        Schema::table('packages', function (Blueprint $table) {
            $table->renameColumn('enableBreakDown', 'enableBreackDown');
        });
    }
    
};
