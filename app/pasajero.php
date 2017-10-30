<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasajero extends Model
{
    protected $table = "pasajero";
    
    protected $fillable = ['id', 'rut','nombre','apellido','edad','antecedentes'];

    public function buses(){
        return $this->belongsToMany('App\bus');
    }
}
