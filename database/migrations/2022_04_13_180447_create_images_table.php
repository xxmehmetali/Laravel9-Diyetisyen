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
        Schema::create('images', function (Blueprint $table) {
            $table->id();

            //  ON CASCADE UYGULANMADI BU TABLOYU DÜŞÜRÜP BİR DAHA MIGRATE ET
            $table->unsignedBigInteger('treatmentId');
            $table->foreign('treatmentId')->references('id')->on('treatments')>onDelete('cascade');

            $table->string('title');
            $table->string('image');
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
        Schema::dropIfExists('images');
    }
};
