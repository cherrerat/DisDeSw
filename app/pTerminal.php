<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pTerminal extends Model
{
    protected $table = "pTerminal";
    
    protected $fillable = ['id', 'direccion','hora','anden'];

    protected function viajeO(){
        return $this->hasMany('App\viaje','origen_id');
    }
    protected function viajeD(){
        return $this->hasMany('App\viaje','destino_id');
    }
}