<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddViajeTerminal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viajeterminal', function(Blueprint $table){
            $table->integer('viaje_id')->unsigned();
            $table->integer('origen_id')->unsigned();
            $table->integer('destino_id')->unsigned();

            $table->primary(['viaje_id','origen_id','destino_id']);
            $table->foreign('viaje_id')->references('id')->on('viaje');
            $table->foreign('origen_id')->references('id')->on('terminal');
            $table->foreign('destino_id')->references('id')->on('terminal');

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
        Schema::drop('viajeterminal');
    }
}
