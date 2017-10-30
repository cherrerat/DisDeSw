<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bus;
use Illuminate\Support\Facades\DB;
use JavaScript;
use Illuminate\Routing\UrlGenerator;

class c_index extends Controller
{
    public function view(){
        return view('index');
    }

    public function store(Request $request){

        //dd($request->all());
        if($request->formatoBusqueda == 'patente'){
            $bus = DB::table('bus')->where('patente',$request->datobusqueda)->value('ubicacion');
            $json = json_encode($bus);
            $asd = 'hola';
            if($bus != null){
                return view('welcome');
            }else{
                dd('No se encontro patente ingresada.'); //Cambiar por pantalla de error
            }
        }else{
            dd('Error formato de busqueda.');
        }
    }

    public function testing(Request $request){
        if($request->formatoBusqueda == 'patente'){
            $bus = DB::table('bus')->where('patente',$request->datobusqueda)->value('ubicacion');
            //$json = json_encode($bus);
            if($bus != null){
                return response($bus);
                //return JavaScript::put(['bus' => $bus]);
            }else{
                dd('No se encontro patente ingresada.'); //Cambiar por pantalla de error
            }
        }else{
            dd('Error formato de busqueda.');
        }
    }
    //$request seria como el diccionario que manda el Ajax ({bus:bus}) -> se mostraria como ({parametro:data}) y para asignarlo $algo=$request->parametro;
    //$algo queda como: 'data'
    public function buscarInformacion(Request $request){
        $aux = $request->bus;
        $bus = DB::table('bus')->where('patente',$aux)->value('ubicacion');
        return $bus;
    }
    public function llenarDetalles(Request $request){
        $aux = $request->bus;
        $bus = DB::table('bus')->where('patente',$aux)->first();
        //['id'=>1, 'patente'=>'BC-CL-35', 'ubicacion'=>'{lat: -33.586, lng: -70.714}','velocidad'=>90,'viaje_id'=>1,'tripulacion_id'=>3,'pasajero_id'=>1]
        $viaje = DB::table('viaje')->where('origen_id',$bus->viaje_id)->first();
        //['id'=>1, 'origen_id'=>1,'destino_id'=>4,'ruta_id'=>1]
        $origen = DB::table('pTerminal')->where('id',$viaje->origen_id)->first();
        //['id'=>1, 'direccion'=>'San Borja', 'hora'=>'16:00:00', 'anden'=>4]
        $destino = DB::table('pTerminal')->where('id',$viaje->destino_id)->first();
        //['id'=>4, 'direccion'=>'Talca', 'hora'=>'18:00:00', 'anden'=>5]
        $tripulacion = DB::table('tripulacion')->where('id',$bus->tripulacion_id)->first();
        //['id'=>3,'rut'=>'18.457.109-9','nombre'=>'Cristian','apellido'=>'Ordoñes','edad'=>34,'horasTrabajadas'=>5]
        $nombresito=$tripulacion->nombre . ' ' . $tripulacion->apellido;
        $aux1= ['nombreChofer'=>$nombresito,'rutChofer'=>$tripulacion->rut,'horaI'=>$origen->hora,'horaF'=>$destino->hora,'anden'=>$destino->anden];
        return $aux1;
    }
}
