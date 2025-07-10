<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();  // ID
            $table->string('name');  // Name
            $table->string('address_key'); // BEP20, ERC20, TRC20
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('addresses');
    }
};
