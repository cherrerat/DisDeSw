<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bus extends Model
{
    //Nombre de la tabla correspondiente en la base de datos
    protected $table = "bus";
    //Atributos del modelo
    protected $fillable = ['id', 'Patente', 'CapacidadMax','empresaDeBus_id'];
    //Funciones del modelo
    function empresaDeBus(){
        return $this->belongsTo('App\empresaDeBus');
    }
    function viajes(){
        return $this->hasMany('App\viaje');
    }
    function estadisticasBus(){
        return $this->hasMany('App\estadisticaBus');
    }

}
