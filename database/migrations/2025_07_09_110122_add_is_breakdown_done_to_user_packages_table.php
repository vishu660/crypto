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
    Schema::table('user_packages', function (Blueprint $table) {
        $table->boolean('is_breakdown_done')->default(false)->after('total_roi_given');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_packages', function (Blueprint $table) {
            //
        });
    }
};
