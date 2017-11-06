<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class viaje extends Model
{
    //Nombre de la tabla correspondiente en la base de datos
    protected $table = "viaje";
    //Atributos del modelo
    protected $fillable = ['id', 'origen_id','destino_id','ruta_id'];
    //Funciones del modelo
    public function buses(){
        return $this->belongsToMany('App\bus');
    }
    public function origen(){
        return $this->belongsTo('App\pTerminal','origen_id');
    }
    public function destino(){
        return $this->belongsTo('App\pTerminal','destino_id');
    }
}
