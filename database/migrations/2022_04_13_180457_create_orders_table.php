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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            //  USER
            $table->unsignedBigInteger('userId');
            $table->foreign('userId')->references('id')->on('users');

            //  DIETITIAN
            $table->unsignedBigInteger('dietitianId');
            $table->foreign('dietitianId')->references('id')->on('users');

            $table->string('ip_address', 45)->nullable();
            $table->string('note');
            $table->string('status',6);
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
        Schema::dropIfExists('orders');
    }
};
