<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use JavaScript;
use App\viaje;
use App\pasajero;

class c_Carabinero extends Controller
{
    public function C_VerPasajero(){
        return view('CarabineroPasajero', [
            'hidden'=>"hidden",
            'placeholder'=>'Ingrese dato de busqueda',
            'rut'=>null,
            'nombre'=>null,
            'origen'=>null,
            'destino'=>null,
            'hora'=>null,
            'anden'=>null,
            'profugo'=>false,
            'pasajero_id'=>null,
            'viaje_id'=>null,
            'numviaje'=>null]);
    }
    public function C_verBus(){
        return view('Carabinero',[
            'placeholder'=>'Ingrese datos de busqueda',
            'value'=>''
        ]);
    }
    public function C_verItinerario(){
        return view('CarabineroITB');
    }
    public function C_verReporte(){
        return view('CarabineroREV');
    }
    public function C_verTripulacion(){
        return view('CarabineroTripulacion');
    }
    public function C_BuscarPasajero(Request $request){
        $pasajero=new pasajero;
        return view('CarabineroPasajero',$pasajero->buscarPasajero($request));
    }
    public function C_listarDetalles(Request $request){
        $aux = $request->datobusqueda;
        $viaje=new viaje;
        $aux1 = $viaje->llenarDetalles($aux);
        //['nombreChofer'=>$nombresito,'rutChofer'=>$tripulante->Run,'horaI'=>$viaje->HoraDeInicio,'horaF'=>$viaje->HoraDeDestino,'anden'=>$viaje->AndenDestino]
        if($aux1!=null){
            return view('CarabineroBD', [
                'nombreChofer'=>array_get($aux1,'nombreChofer'),
                'rutChofer'=>array_get($aux1,'rutChofer'),
                'horaI'=>array_get($aux1,'horaI'),
                'horaF'=>array_get($aux1,'horaF'),
                'anden'=>array_get($aux1,'anden'),
                'viaje'=>array_get($aux1,'viaje_id')
            ]);
        }else{
            return view('Carabinero',[
                'placeholder'=>'No encontrado',
                'value'=>null
            ]);
        }
    }
    public function C_Ver_Detalles_Bus(Request $request){
        $aux=$request->invisible;
        $viaje=new viaje;
        $aux1=$viaje->Ver_Detalles_Bus($aux);
        return view('CarabineroBMap',[
            'latlng'=>$aux1
        ]);
    }
    public function C_listarViajes(Request $request){
        $aux=$request->invisibleP;
        $pasajero=new pasajero;
        $aux1=$pasajero->listarViajes($aux);
        return view('CarabineroHPasajero',$aux1);
    }
    public function C_Ver_Detalles_Itinerario(Request $request){
        return view('CarabineroITBH');
    }
    public function C_listarReporte(Request $request){
        return view('CarabineroREVH');
    }
}
