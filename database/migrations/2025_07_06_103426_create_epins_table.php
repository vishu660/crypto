<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpinsTable extends Migration
{
    public function up()
    {
        Schema::create('epins', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();      // Full E-pin code (e.g., ABXXXXXXXXXX)
            $table->string('plan');                // Plan name
            $table->decimal('amount', 10, 2)->default(0);  // Amount (default 0)
            $table->date('expiry_date');           // Expiry
            $table->string('status')->default('active'); // 'active' or 'used'
            $table->unsignedBigInteger('user_id')->nullable(); // optional user allocation
            $table->timestamp('used_at')->nullable(); 
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('epins');
    }
}
