<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class viaje extends Model
{
    protected $table = "viaje";
    
    protected $fillable = ['id', 'origen_id','destino_id','ruta_id'];

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
