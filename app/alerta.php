<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alerta extends Model
{
    //Nombre de la tabla correspondiente en la base de datos
    protected $table = "alerta";
    //Atributos del modelo
    protected $fillable = ['id','Tipo','pasajero_id','viaje_id','tripulante_id'];
    //Funciones del modelo
    function pasajero(){
        return $this->belongsTo('App\pasajero');
    }
    function viaje(){
        return $this->belongsTo('App\viaje');
    }
    function tripulante(){
        return $this->belongsTo('App\tripulante');
    }
    
}
