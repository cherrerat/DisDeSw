<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\viaje;
use App\pasajero;

class C_CONASET extends Controller
{
    public function C_verBus(){
        return view('CST');
    }
    public function C_verItinerario(){
        return view('CSTIB');
    }
    public function C_buscarItinerario(){
        return view('CSTIBH');
    }
    public function C_verReporteV(){
        return view('CSTREV');
    }
    public function C_verReporteA(){
        return view('CSTRAD');
    }
    public function C_verReporteAD(){
        return view('CSTRADD');
    }
    public function C_listarDetalles(Request $request){
        $aux = $request->datobusqueda;
        $viaje=new viaje;
        $aux1 = $viaje->llenarDetalles($aux);
        //['nombreChofer'=>$nombresito,'rutChofer'=>$tripulante->Run,'horaI'=>$viaje->HoraDeInicio,'horaF'=>$viaje->HoraDeDestino,'anden'=>$viaje->AndenDestino]
        if($aux1!=null){
            return view('CSTBD', [
                'nombreChofer'=>array_get($aux1,'nombreChofer'),
                'rutChofer'=>array_get($aux1,'rutChofer'),
                'horaI'=>array_get($aux1,'horaI'),
                'horaF'=>array_get($aux1,'horaF'),
                'anden'=>array_get($aux1,'anden'),
                'viaje'=>array_get($aux1,'viaje_id')
            ]);
        }else{
            return view('CST');
        }
    }
    public function C_Ver_Detalles_Bus(Request $request){
        $aux=$request->invisible;
        $viaje=new viaje;
        $aux1=$viaje->Ver_Detalles_Bus($aux);
        return view('CSTBMap',[
            'latlng'=>$aux1
        ]);
    }
}
