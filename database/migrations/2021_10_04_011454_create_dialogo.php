<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDialogo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dialogo', function (Blueprint $table) {
            $table->id('iddialogo');
            $table->string('nombredialogo');
            $table->string('dialogoenespañol');
            $table->string('dialogoenkaqchikel');
            $table->string('Audio');
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
        Schema::dropIfExists('dialogo');
    }
}
