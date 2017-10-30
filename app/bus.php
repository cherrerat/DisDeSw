<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bus extends Model
{
    protected $table = "bus";

    protected $fillable = ['id', 'patente', 'ubicacion','velocidad','viaje_id','tripulacion_id','pasajero_id'];

    public function pasajeros(){
        return $this->belongsToMany('App\pasajero');
    }
    public function tripulantes(){
        return $this->belongsToMany('App\tripulacion');
    }
    public function viajes(){
        return $this->belongsToMany('App\viaje');
    }
}
