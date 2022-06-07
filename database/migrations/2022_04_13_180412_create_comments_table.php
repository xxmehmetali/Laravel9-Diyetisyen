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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
            $table->string('comment');
            $table->string('rate');
            $table->unsignedBigInteger('treatmentId');
            $table->foreign('treatmentId')->references('id')->on('treatments');

            $table->unsignedBigInteger('userId');
            $table->foreign('userId')->references('id')->on('users');

            $table->string('ip',15);
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
        Schema::dropIfExists('comments');
    }
};
