<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estadisticaBus extends Model
{
    //Nombre de la tabla correspondiente en la base de datos
    protected $table = "estadisticaBus";
    //Atributos del modelo
    protected $fillable = ['id','ExcesoVelocidad','bus_id'];
    //Funciones del modelo
    function bus(){
        return $this->belongsTo('App\bus');
    }
}
