<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function rellenarDB(){

        //pasajero [id, Run, Nombre, Apellido, Telefono, Profugo]
        $pasajero = ['id'=>1,'Run'=>'11.111.111-1','Nombre'=>'Fernando','Apellido'=>'Karadima','Telefono'=>221111111,'Profugo'=>1];
        \App\pasajero::create($pasajero);
        $pasajero = ['id'=>2,'Run'=>'22.222.222-2','Nombre'=>'Paul','Apellido'=>'Schaefer','Telefono'=>222222222,'Profugo'=>1];
        \App\pasajero::create($pasajero);
        $pasajero = ['id'=>3,'Run'=>'18.697.836-6','Nombre'=>'Victor','Apellido'=>'Vasquez','Telefono'=>223333333,'Profugo'=>0];
        \App\pasajero::create($pasajero);
        $pasajero = ['id'=>4,'Run'=>'19.544.660-1 ','Nombre'=>'Cristopher','Apellido'=>'Herrera','Telefono'=>224444444,'Profugo'=>1];
        \App\pasajero::create($pasajero);
        $pasajero = ['id'=>5,'Run'=>'19.632.624-3 ','Nombre'=>'Ricardo','Apellido'=>'Cesped','Telefono'=>225555555,'Profugo'=>0];
        \App\pasajero::create($pasajero);

        //empresaDeBus [id, Rut, Nombre]
        $empresaDeBus = ['id'=>1,'Rut'=>'27.111.111-1','Nombre'=>'Empresa 1'];
        \App\empresaDeBus::create($empresaDeBus);

        //tripulante [Run, Nombre, Apellido, Telefono, CantMultasAño, CantMultasTotal, HorasDeTrabajoDia, HorasDeTrabajoSemana, CargoPrincipal, InicioContrato, FinContrato, empresaDeBus_id]
        $tripulante = ['id'=>1,'Run'=>'33.333.333-3','Nombre'=>'Juan','Apellido'=>'Hurtado','Telefono'=>226666666,'CantMultasAño'=>3,'CantMultasTotal'=>3,'HorasDeTrabajoDia'=>4,'HorasDeTrabajoSemana'=>16,'CargoPrincipal'=>'Chofer','InicioContrato'=>'2017-08-01','FinContrato'=>'2018-12-20','empresaDeBus_id'=>1];
        \App\tripulante::create($tripulante);
        $tripulante = ['id'=>2,'Run'=>'44.444.444-4','Nombre'=>'Alberto','Apellido'=>'Hurtado','Telefono'=>227777777,'CantMultasAño'=>6,'CantMultasTotal'=>6,'HorasDeTrabajoDia'=>5,'HorasDeTrabajoSemana'=>25,'CargoPrincipal'=>'Chofer','InicioContrato'=>'2017-08-01','FinContrato'=>'2018-12-20','empresaDeBus_id'=>1];
        \App\tripulante::create($tripulante);
        $tripulante = ['id'=>3,'Run'=>'18.457.109-9','Nombre'=>'Cristian','Apellido'=>'Ordoñes','Telefono'=>228888888,'CantMultasAño'=>5,'CantMultasTotal'=>5,'HorasDeTrabajoDia'=>4,'HorasDeTrabajoSemana'=>20,'CargoPrincipal'=>'Chofer','InicioContrato'=>'2017-08-01','FinContrato'=>'2018-12-20','empresaDeBus_id'=>1];
        \App\tripulante::create($tripulante);
        $tripulante = ['id'=>4,'Run'=>'19.571.033-3','Nombre'=>'Carlos','Apellido'=>'Ramirez','Telefono'=>229999999,'CantMultasAño'=>7,'CantMultasTotal'=>7,'HorasDeTrabajoDia'=>6,'HorasDeTrabajoSemana'=>18,'CargoPrincipal'=>'Chofer','InicioContrato'=>'2017-08-01','FinContrato'=>'2018-12-20','empresaDeBus_id'=>1];
        \App\tripulante::create($tripulante);
        $tripulante = ['id'=>5,'Run'=>'55.555.555-5','Nombre'=>'Yoshi','Apellido'=>'Rip','Telefono'=>221112223,'CantMultasAño'=>4,'CantMultasTotal'=>4,'HorasDeTrabajoDia'=>8,'HorasDeTrabajoSemana'=>24,'CargoPrincipal'=>'Chofer','InicioContrato'=>'2017-08-01','FinContrato'=>'2018-12-20','empresaDeBus_id'=>1];
        \App\tripulante::create($tripulante);

        //terminal [id, Direccion, Ubicacion, Capacidad]
        $Terminal = ['id'=>1, 'Direccion'=>'San Borja', 'Ubicacion'=>'lat: -33.453, lng: -70.679', 'Capacidad'=>40];
        \App\Terminal::create($Terminal);
        $Terminal = ['id'=>2, 'Direccion'=>'La Cisterna', 'Ubicacion'=>'lat: -33.538, lng: -70.663', 'Capacidad'=>20];
        \App\Terminal::create($Terminal);
        $Terminal = ['id'=>3, 'Direccion'=>'Estacion Central', 'Ubicacion'=>'lat: -33.453, lng: -70.686', 'Capacidad'=>50];
        \App\Terminal::create($Terminal);
        $Terminal = ['id'=>4, 'Direccion'=>'Talca', 'Ubicacion'=>'lat: -35.430, lng: -71.647', 'Capacidad'=>15];
        \App\Terminal::create($Terminal);
        $Terminal = ['id'=>5, 'Direccion'=>'La Serena', 'Ubicacion'=>'lat: -29.911, lng: -71.255', 'Capacidad'=>20];
        \App\Terminal::create($Terminal);
        $Terminal = ['id'=>6, 'Direccion'=>'Los Angeles', 'Ubicacion'=>'lat: -37.452, lng: -72.339', 'Capacidad'=>13];
        \App\Terminal::create($Terminal);

        //usuario [id, User, Password, Perfil]
        $usuario = ['id'=>1,'User'=>'Rolfen','Password'=>'123456','Perfil'=>'Carabinero'];
        \App\usuario::create($usuario);
        $usuario = ['id'=>2,'User'=>'Chudik','Password'=>'123456','Perfil'=>'CST'];
        \App\usuario::create($usuario);

        //bus [id, Patente, CapacidadMax, empresaDeBus_id]
        $bus = ['id'=>1, 'Patente'=>'BC-CL-35', 'CapacidadMax'=>40,'empresaDeBus_id'=>1];
        \App\bus::create($bus);
        $bus = ['id'=>2, 'Patente'=>'BC-CL-34', 'CapacidadMax'=>55,'empresaDeBus_id'=>1];
        \App\bus::create($bus);
        $bus = ['id'=>3, 'Patente'=>'CL-BC-35', 'CapacidadMax'=>40,'empresaDeBus_id'=>1];
        \App\bus::create($bus);

        //estadisticaBus [id, ExcesoVelocidad, bus_id]
        $estadisticaBus = ['id'=>1, 'ExcesoVelocidad'=>98, 'bus_id'=>1];
        \App\estadisticaBus::create($estadisticaBus);
        $estadisticaBus = ['id'=>2, 'ExcesoVelocidad'=>112, 'bus_id'=>1];
        \App\estadisticaBus::create($estadisticaBus);
        $estadisticaBus = ['id'=>3, 'ExcesoVelocidad'=>99, 'bus_id'=>2];
        \App\estadisticaBus::create($estadisticaBus);
        $estadisticaBus = ['id'=>4, 'ExcesoVelocidad'=>120, 'bus_id'=>3];
        \App\estadisticaBus::create($estadisticaBus);

        //viaje ['id','origen_id','AndenOrigen','HoraDeInicio','destino_id','AndenDestino','HoraDeDestino','ruta_id','bus_id','tripulante_id']
        $viaje = ['id'=>1, 'origen_id'=>1,'AndenOrigen'=>4,'HoraDeInicio'=>'16:00:00','destino_id'=>4,'AndenDestino'=>10,'HoraDeDestino'=>'00:00:00','bus_id'=>1,'tripulante_id'=>3];
        \App\viaje::create($viaje);
        $viaje = ['id'=>2, 'origen_id'=>2,'AndenOrigen'=>1,'HoraDeInicio'=>'16:00:00','destino_id'=>5,'AndenDestino'=>11,'HoraDeDestino'=>'00:00:00','bus_id'=>2,'tripulante_id'=>4];
        \App\viaje::create($viaje);
        $viaje = ['id'=>3, 'origen_id'=>3,'AndenOrigen'=>7,'HoraDeInicio'=>'16:00:00','destino_id'=>6,'AndenDestino'=>13,'HoraDeDestino'=>'00:00:00','bus_id'=>3,'tripulante_id'=>2];
        \App\viaje::create($viaje);
        
        //ruta [id, Camino]
        $ruta = ['id'=>1,'Camino'=>'{lat: -33.586, lng: -70.714}','viaje_id'=>1];
        \App\ruta::create($ruta);
        $ruta = ['id'=>2,'Camino'=>'{lat: -33.442, lng: -70.691}','viaje_id'=>2];
        \App\ruta::create($ruta);
        $ruta = ['id'=>3,'Camino'=>'{lat: -33.214, lng: -70.768}','viaje_id'=>3];
        \App\ruta::create($ruta);

        //alerta ['id'=>,'Tipo'=>'','pasajero_id'=>,'viaje_id'=>,'tripulante_id'=>,]

        //viajepasajero ['viaje_id'=>,'pasajero_id'=>]
        DB::table('viajepasajero')->insert([
            ['viaje_id'=>1,'pasajero_id'=>1],
            ['viaje_id'=>1,'pasajero_id'=>2],
            ['viaje_id'=>2,'pasajero_id'=>3],
            ['viaje_id'=>2,'pasajero_id'=>4],
            ['viaje_id'=>3,'pasajero_id'=>5]
        ]);

        //accidente ['id'=>,'viaje_id'=>,'bus_id'=>,'CantHeridos'=>,'CantMuertos'=>,'Ubicacion'=>'','Observacion'=>'']

        //viajeterminal ['viaje_id'=>,'origen_id'=>,'destino_id'=>]
        DB::table('viajeterminal')->insert([
            ['viaje_id'=>1,'origen_id'=>1,'destino_id'=>4],
            ['viaje_id'=>2,'origen_id'=>2,'destino_id'=>5],
            ['viaje_id'=>3,'origen_id'=>3,'destino_id'=>6]
        ]);

        dd($bus);
    }
}
