<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTripulante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tripulante', function(Blueprint $table){
            $table->increments('id');
            $table->string('Run');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->integer('Telefono');
            $table->integer('CantMultasAño');
            $table->integer('CantMultasTotal');
            $table->integer('HorasDeTrabajoDia');
            $table->integer('HorasDeTrabajoSemana');
            $table->string('CargoPrincipal');
            $table->string('InicioContrato');
            $table->string('FinContrato');
            $table->integer('empresaDeBus_id')->unsigned();

            $table->foreign('empresaDeBus_id')->references('id')->on('empresaDeBus');

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
        Schema::drop('tripulante');
    }
}
