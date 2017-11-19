<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAlerta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alerta', function(Blueprint $table){
            $table->increments('id');
            $table->string('Tipo');
            $table->integer('pasajero_id')->unsigned();
            $table->integer('viaje_id')->unsigned();
            $table->integer('tripulante_id')->unsigned();

            $table->foreign('pasajero_id')->references('id')->on('pasajero');
            $table->foreign('viaje_id')->references('id')->on('viaje');
            $table->foreign('tripulante_id')->references('id')->on('tripulante');

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
        Schema::drop('alerta');
    }
}
