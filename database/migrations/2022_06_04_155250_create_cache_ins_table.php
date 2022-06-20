<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cache_ins', function (Blueprint $table) {
            $table->id();
            $table->string('amount');
            $table->string('transaction_id');
            $table->foreignId('user_id');
            $table->enum('type',['bkash','card','bank'])->default('bkash');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cache_ins');
    }
};
