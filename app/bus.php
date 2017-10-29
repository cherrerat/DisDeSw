<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bus extends Model
{
    protected $table = "bus";

    protected $fillable = ['id', 'patente', 'ubicacion','velocidad','id_viaje','id_tripulacion','id_pasajero'];

}
