<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use JavaScript;

class c_CarabineroPasajero extends Controller
{
    public function view(){
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
    public function añadirPasajerosTest(){
        $pasajero = ['id'=>1,'rut'=>'11.111.111-1','nombre'=>'Fernando','apellido'=>'Karadima','edad'=>'67','antecedentes'=>'Pedofilia'];
        \App\pasajero::create($pasajero);
        $pasajero = ['id'=>2,'rut'=>'22.222.222-2','nombre'=>'Paul','apellido'=>'Schaefer','edad'=>'63','antecedentes'=>'Pedofilia'];
        \App\pasajero::create($pasajero);
        $pasajero = ['id'=>3,'rut'=>'18.697.836-6','nombre'=>'Victor','apellido'=>'Vasquez','edad'=>'21','antecedentes'=>''];
        \App\pasajero::create($pasajero);
        $pasajero = ['id'=>4,'rut'=>'19.544.660-1 ','nombre'=>'Cristopher','apellido'=>'Herrera','edad'=>'20','antecedentes'=>'Chupar pico a altas horas de la noche'];
        \App\pasajero::create($pasajero);
        return view('CarabineroPasajero', ['hidden'=>"hidden", 'placeholder'=>'Se añadieron los pibes']);
    }
    public function buscarPasajero(Request $request){
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
