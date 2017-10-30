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
    public function buscarInformacion(Request $request){
        $aux = $request->bus;
        $bus = DB::table('bus')->where('patente',$aux)->value('ubicacion');
        return $bus;
    }
}
