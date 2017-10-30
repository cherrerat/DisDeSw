<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddViaje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viaje', function(Blueprint $table){
            $table->increments('id');
            $table->integer('origen_id')->unsigned();
            $table->integer('destino_id')->unsigned();
            $table->integer('ruta_id')->unsigned();

            $table->foreign('origen_id')->references('id')->on('pTerminal');
            $table->foreign('destino_id')->references('id')->on('pTerminal');
            $table->foreign('ruta_id')->references('id')->on('ruta');

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
        Schema::drop('viaje');
    }
}
