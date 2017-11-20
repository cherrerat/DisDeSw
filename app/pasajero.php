<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pasajero extends Model
{
    //Nombre de la tabla correspondiente en la base de datos
    protected $table = "pasajero";
    //Atributos del modelo
    protected $fillable = ['id', 'Run','Nombre','Apellido','Telefono','Profugo'];
    //Funciones del modelo
    public function alertas(){
        return $this->hasMany('App\alerta','pasajero_id');
    }
    public function viajes(){
        return $this->belongsToMany('App\viaje','viajepasajero','pasajero_id','viaje_id');
    }
    public function buscarPasajero($request){
        if($request->formatoBusqueda == 'rpasajero'){
            $pasajero = DB::table('pasajero')->where('Run',$request->datobusqueda)->first();
            //dd($pasajero);
            if($pasajero!=null){
                $viajepasajero = DB::table('viajepasajero')->where('pasajero_id',$pasajero->id)->value('viaje_id');
                $viaje = DB::table('viaje')->where('id',$viajepasajero)->first();
                $origen = DB::table('terminal')->where('id',$viaje->origen_id)->value('Direccion');
                $destino = DB::table('terminal')->where('id',$viaje->destino_id)->value('Direccion');
                if($pasajero->Profugo == 0){
                    return [
                        'hidden'=>"",
                        'placeholder'=>$pasajero->Run,
                        'rut'=>$pasajero->Run,
                        'nombre'=>"".$pasajero->Nombre.' '.$pasajero->Apellido,
                        'origen'=>$origen,
                        'destino'=>$destino,
                        'hora'=>$viaje->HoraDeDestino,
                        'anden'=>$viaje->AndenDestino,
                        'profugo'=>false
                        ];
                }else{
                    return [
                        'hidden'=>"",
                        'placeholder'=>$pasajero->Run,
                        'rut'=>$pasajero->Run,
                        'nombre'=>"".$pasajero->Nombre.' '.$pasajero->Apellido,
                        'origen'=>$origen,
                        'destino'=>$destino,
                        'hora'=>$viaje->HoraDeDestino,
                        'anden'=>$viaje->AndenDestino,
                        'profugo'=>true
                        ];
                }
            }else{
                return [
                    'hidden'=>"hidden",
                    'placeholder'=>'Ingrese dato de busqueda',
                    'rut'=>null,
                    'nombre'=>null,
                    'origen'=>null,
                    'destino'=>null,
                    'hora'=>null,
                    'anden'=>null,
                    'profugo'=>false];
            }
        }
    }
}
