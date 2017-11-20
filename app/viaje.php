<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class viaje extends Model
{
    //Nombre de la tabla correspondiente en la base de datos
    protected $table = "viaje";
    //Atributos del modelo
    protected $fillable = ['id', 'origen_id','AndenOrigen','HoraDeInicio','destino_id','AndenDestino','HoraDeDestino','bus_id','tripulante_id'];
    //Funciones del modelo
    public function terminalO(){
        return $this->belongsToMany('App\viaje','viajeterminal','viaje_id','origen_id');
    }
    public function terminalD(){
        return $this->belongsToMany('App\viaje','viajeterminal','viaje_id','destino_id');
    }
    public function ruta(){
        return $this->hasMany('App\ruta');
    }
    public function pasajeros(){
        return $this->belongsToMany('App\pasajero','viajepasajero','viaje_id','pasajero_id');
    }
    public function tripulante(){
        return $this->belongsTo('App\tripulante');
    }
    public function alertas(){
        return $this->hasMany('App\alerta');
    }
    public function bus(){
        return $this->belongsTo('App\bus');
    }
    public function accidentes(){
        return $this->hasMany('App\accidente');
    }
    public function buscarInformacion($aux){
        $bus = DB::table('bus')->where('Patente',$aux)->value('id');
        if($bus != null && $bus != '' && $bus != ' '){
            $viaje = DB::table('viaje')->where('bus_id',$bus)->value('id');
            $ruta = DB::table('ruta')->where('viaje_id',$viaje)->value('camino');
            return $ruta;
        }else{
            return null;
        }
    }
    public function llenarDetalles($aux){
        $bus = DB::table('bus')->where('Patente',$aux)->value('id');
        if($bus != null && $bus != '' && $bus != ' '){
            //['id'=>1, 'Patente'=>'BC-CL-35', 'CapacidadMax'=>40,'empresaDeBus_id'=>1]
            $viaje = DB::table('viaje')->where('bus_id',$bus)->first();
            //['id'=>1, 'origen_id'=>1,'AndenOrigen'=>4,'HoraDeInicio'=>'16:00:00','destino_id'=>4,'AndenDestino'=>10,'HoraDeDestino'=>'00:00:00','bus_id'=>1,'tripulante_id'=>3]
            $tripulante = DB::table('tripulante')->where('id',$viaje->tripulante_id)->first();
            //['id'=>3,'Run'=>'18.457.109-9','Nombre'=>'Cristian','Apellido'=>'Ordoñes','Telefono'=>228888888,'CantMultasAño'=>5,'CantMultasTotal'=>5,'HorasDeTrabajoDia'=>4,'HorasDeTrabajoSemana'=>20,'CargoPrincipal'=>'Chofer','InicioContrato'=>'2017-08-01','FinContrato'=>'2018-12-20','empresaDeBus_id'=>1]

            $nombresito=$tripulante->Nombre . ' ' . $tripulante->Apellido; //concadenacion de nombre + apellido
            $aux1= ['nombreChofer'=>$nombresito,'rutChofer'=>$tripulante->Run,'horaI'=>$viaje->HoraDeInicio,'horaF'=>$viaje->HoraDeDestino,'anden'=>$viaje->AndenDestino,'viaje_id'=>$viaje->id]; //Array con datos solicitados
            return $aux1;
        }else{
            return null;
        }
    }
    public function Ver_Detalles_Bus($aux){
        $ruta=DB::table('ruta')->where('viaje_id',$aux)->value('Camino');
        return $ruta;
    }
}
