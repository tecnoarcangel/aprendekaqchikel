<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConjugacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conjugacion', function (Blueprint $table) {
            $table->id('idconjugacion');
            $table->string('Nombreconjugancionespañol');
            $table->string('Nombreconjugancionkaqchikel');
            $table->string('presente');
            $table->string('presentekaqchikel');
            $table->string('pasado');
            $table->string('pasadokaqchikel');
            $table->string('futuro');
            $table->string('futurokaqchikel');
            $table->string('audioconjugancionkaqchikel');
            $table->string('audiopresente');
            $table->string('audiopasado');
            $table->string('audiofuturo');
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
        Schema::dropIfExists('conjugacion');
    }
}
