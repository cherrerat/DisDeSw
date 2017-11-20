<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use JavaScript;

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
            'profugo'=>false]);
    }
    public function C_verBus(){
        return view('Carabinero');
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
        if($request->formatoBusqueda == 'rpasajero'){
            $pasajero = DB::table('pasajero')->where('rut',$request->datobusqueda)->first();
            if($pasajero->antecedentes == ""){
                return view('CarabineroPasajero',[
                    'hidden'=>"",
                    'placeholder'=>$pasajero->rut,
                    'rut'=>$pasajero->rut,
                    'nombre'=>"".$pasajero->nombre.' '.$pasajero->apellido,
                    'origen'=>null,
                    'destino'=>null,
                    'hora'=>null,
                    'anden'=>null,
                    'profugo'=>false
                    ]);
            }else{
                return view('CarabineroPasajero',[
                    'hidden'=>"",
                    'placeholder'=>$pasajero->rut,
                    'rut'=>$pasajero->rut,
                    'nombre'=>"".$pasajero->nombre.' '.$pasajero->apellido,
                    'origen'=>null,
                    'destino'=>null,
                    'hora'=>null,
                    'anden'=>null,
                    'profugo'=>true
                    ]);
            }
        }
    }
}
