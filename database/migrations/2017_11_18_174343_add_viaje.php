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
            $table->integer('AndenOrigen');
            $table->string('HoraDeInicio');
            $table->integer('destino_id')->unsigned();
            $table->integer('AndenDestino');
            $table->string('HoraDeDestino');
            $table->integer('bus_id')->unsigned();
            $table->integer('tripulante_id')->unsigned();

            $table->foreign('origen_id')->references('id')->on('terminal');
            $table->foreign('destino_id')->references('id')->on('terminal');
            $table->foreign('bus_id')->references('id')->on('bus');
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
        Schema::drop('viaje');
    }
}
