<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function rellenarDB(){

        $pasajero = ['id'=>1,'rut'=>'11.111.111-1','nombre'=>'Fernando','apellido'=>'Karadima','edad'=>67,'antecedentes'=>'Pedofilia'];
        \App\pasajero::create($pasajero);
        $pasajero = ['id'=>2,'rut'=>'22.222.222-2','nombre'=>'Paul','apellido'=>'Schaefer','edad'=>63,'antecedentes'=>'Pedofilia'];
        \App\pasajero::create($pasajero);
        $pasajero = ['id'=>3,'rut'=>'18.697.836-6','nombre'=>'Victor','apellido'=>'Vasquez','edad'=>21,'antecedentes'=>''];
        \App\pasajero::create($pasajero);
        $pasajero = ['id'=>4,'rut'=>'19.544.660-1 ','nombre'=>'Cristopher','apellido'=>'Herrera','edad'=>20,'antecedentes'=>'Chupar pico a altas horas de la noche'];
        \App\pasajero::create($pasajero);
        $pasajero = ['id'=>5,'rut'=>'19.632.624-3 ','nombre'=>'Ricardo','apellido'=>'Cesped','edad'=>20,'antecedentes'=>'No saber usar JavaScript'];
        \App\pasajero::create($pasajero);

        $tripulacion = ['id'=>1,'rut'=>'33.333.333-3','nombre'=>'Juan','apellido'=>'Hurtado','edad'=>74,'horasTrabajadas'=>3];
        \App\tripulacion::create($tripulacion);
        $tripulacion = ['id'=>2,'rut'=>'44.444.444-4','nombre'=>'Alberto','apellido'=>'Hurtado','edad'=>81,'horasTrabajadas'=>6];
        \App\tripulacion::create($tripulacion);
        $tripulacion = ['id'=>3,'rut'=>'18.457.109-9','nombre'=>'Cristian','apellido'=>'Ordoñes','edad'=>34,'horasTrabajadas'=>5];
        \App\tripulacion::create($tripulacion);
        $tripulacion = ['id'=>4,'rut'=>'19.571.033-3','nombre'=>'Carlos','apellido'=>'Ramirez','edad'=>21,'horasTrabajadas'=>7];
        \App\tripulacion::create($tripulacion);
        $tripulacion = ['id'=>5,'rut'=>'55.555.555-5','nombre'=>'Yoshi','apellido'=>'Rip','edad'=>44,'horasTrabajadas'=>4];
        \App\tripulacion::create($tripulacion);

        $pTerminal = ['id'=>1, 'direccion'=>'San Borja', 'hora'=>'16:00:00', 'anden'=>4];
        \App\pTerminal::create($pTerminal);
        $pTerminal = ['id'=>2, 'direccion'=>'La Cisterna', 'hora'=>'16:30:00', 'anden'=>11];
        \App\pTerminal::create($pTerminal);
        $pTerminal = ['id'=>3, 'direccion'=>'Estacion Central', 'hora'=>'12:00:00', 'anden'=>7];
        \App\pTerminal::create($pTerminal);
        $pTerminal = ['id'=>4, 'direccion'=>'Talca', 'hora'=>'18:00:00', 'anden'=>5];
        \App\pTerminal::create($pTerminal);
        $pTerminal = ['id'=>5, 'direccion'=>'La Serena', 'hora'=>'23:30:00', 'anden'=>8];
        \App\pTerminal::create($pTerminal);
        $pTerminal = ['id'=>6, 'direccion'=>'Los Angeles', 'hora'=>'20:00:00', 'anden'=>6];
        \App\pTerminal::create($pTerminal);

        $ruta = ['id'=>1,'camino'=>''];
        \App\ruta::create($ruta);
        $ruta = ['id'=>2,'camino'=>'por autopista (test)'];
        \App\ruta::create($ruta);

        $viaje = ['id'=>1, 'origen_id'=>1,'destino_id'=>4,'ruta_id'=>1];
        \App\viaje::create($viaje);
        $viaje = ['id'=>2, 'origen_id'=>2,'destino_id'=>5,'ruta_id'=>2];
        \App\viaje::create($viaje);
        $viaje = ['id'=>3, 'origen_id'=>3,'destino_id'=>6,'ruta_id'=>2];
        \App\viaje::create($viaje);

        $bus = ['id'=>1, 'patente'=>'BC-CL-35', 'ubicacion'=>'{lat: -33.586, lng: -70.714}','velocidad'=>90,'viaje_id'=>1,'tripulacion_id'=>3,'pasajero_id'=>1];
        \App\bus::create($bus);
        $bus = ['id'=>2, 'patente'=>'CL-BC-36', 'ubicacion'=>'{lat: -33.442, lng: -70.691}','velocidad'=>87,'viaje_id'=>2,'tripulacion_id'=>4,'pasajero_id'=>2];
        \App\bus::create($bus);
        $bus = ['id'=>3, 'patente'=>'BC-CL-34', 'ubicacion'=>'{lat: -33.214, lng: -70.768}','velocidad'=>66,'viaje_id'=>3,'tripulacion_id'=>2,'pasajero_id'=>3];
        \App\bus::create($bus);

        dd($bus);
    }
}
