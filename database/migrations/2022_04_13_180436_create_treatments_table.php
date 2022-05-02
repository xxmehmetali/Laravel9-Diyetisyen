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
        Schema::create('treatments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('keywords');
            $table->string('description');
            $table->string('image')->nullable(); // image tablosundan alacak

            $table->unsignedBigInteger('categoryId');
            $table->foreign('categoryId')->references('id')->on('categories');

            $table->string('detail');
            $table->string('price');

            //  Kaç haftada bir görüşülecek
            $table->string('frequency');
            //  Planın süresi
            $table->string('duration');

            //  Doktorun id 'si
            $table->unsignedBigInteger('userId');
            $table->foreign('userId')->references('id')->on('users');


            //ekstra kolonlar ekle

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
        Schema::dropIfExists('treatments');
    }
};
