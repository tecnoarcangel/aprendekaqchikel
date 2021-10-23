<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePalabra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('palabra', function (Blueprint $table) {
   
            $table->bigIncrements('id');
            $table->unsignedBigInteger('categoria_id');
            $table->string('imagen');
            $table->string('palabraes');
            $table->string('palabramaya');
            $table->string('audio'); 
            $table->timestamps();
            $table->foreign('categoria_id')->references('idcategoria')->on('palabracategoria');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('palabra');
    }
}
