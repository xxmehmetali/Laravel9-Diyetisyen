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
            $table->unsignedBigInteger('patientId');
            $table->foreign('patientId')->references('id')->on('users');

            //  DIETITIAN
            $table->unsignedBigInteger('dietitianId');
            $table->foreign('dietitianId')->references('id')->on('users');

            //  TREATMENT
            $table->unsignedBigInteger('treatmentId');
            $table->foreign('treatmentId')->references('id')->on('treatments');

            $table->timestamp('orderDate');
            $table->integer('price');

            //  kredi kartı/havale/banka kartı ...
            $table->string('paymentType');

            $table->string('ip_address', 45)->nullable();
            $table->string('doctorNote');

//              status => false / true
//              false means order IS NOT APPROVED
//              true means order IS APPROVED
            $table->string('status');
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
