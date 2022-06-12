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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('orderId');
            $table->foreign('orderId')->references('id')->on('orders');

            $table->timestamp('appointmentDate');

            $table->string('weight');
            //  Nabız
            $table->string('pulseRate');

            //  status => false / true
            //  false means patient DID NOT COME to the appointment
            //  true means patient CAME to the appointment
            $table->string('status');
            $table->string('doctorNote');

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
        Schema::dropIfExists('appointments');
    }
};
