<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class viaje extends Model
{
    //Nombre de la tabla correspondiente en la base de datos
    protected $table = "viaje";
    //Atributos del modelo
    protected $fillable = ['id', 'origen_id','AndenOrigen','HoraDeInicio','destino_id','AndenDestino','HoraDeDestino','bus_id','tripulante_id'];
    //Funciones del modelo
    function terminalO(){
        return $this->belongsToMany('App\viaje','viajeterminal','viaje_id','origen_id');
    }
    function terminalD(){
        return $this->belongsToMany('App\viaje','viajeterminal','viaje_id','destino_id');
    }
    function ruta(){
        return $this->hasMany('App\ruta');
    }
    function pasajeros(){
        return $this->belongsToMany('App\pasajero','viajepasajero','viaje_id','pasajero_id');
    }
    function tripulante(){
        return $this->belongsTo('App\tripulante');
    }
    function alertas(){
        return $this->hasMany('App\alerta');
    }
    function bus(){
        return $this->belongsTo('App\bus');
    }
    function accidentes(){
        return $this->hasMany('App\accidente');
    }
}
