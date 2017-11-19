<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accidente extends Model
{
    //Nombre de la tabla correspondiente en la base de datos
    protected $table = "accidente";
    //Atributos del modelo
    protected $fillable = ['id','viaje_id','bus_id','CantHeridos','CantMuertos','Ubicacion','Observacion'];
    //Funciones del modelo
    function viaje(){
        return $this->belongsTo('App\viaje');
    }
    function bus(){
        return $this->belongsTo('App\bus');
    }
}
