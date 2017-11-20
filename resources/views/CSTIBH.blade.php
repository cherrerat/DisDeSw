@extends('hyf.headerDash')

<!-- Titulo del navegador -->
@section('titulo','CONASET')
@section('subtitulo', 'Itinerario buses | Detalle')
<!-- CSS extra -->
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.16/b-1.4.2/b-html5-1.4.2/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/itinerarioHBuses.css') }}">
@endsection()

@section('logoEmpresa')
  <img src="{!! URL::asset('img/logo/conaset.png') !!}" alt="" class="foto-logo" >
@endsection()


<!-- Usuario -->
@section('nombreUsuario', 'Joe Doe')
@section('institucion', 'CONASET')

<!-- Ruta de navegación en body -->
@section('headerRuta')
    <div class="col-md-11 row">
        <h4 class="h4"><a href="">CONASET</a> -> <a href="#">Itinerario buses</a> -> <a href="#">Detalle</a></h4>
    </div>
@endsection()

<!-- Navegación -->
@section('barraDeNavegacion')
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navegación principal</li>
        <li class="treeview">
            <a href="#"><span>Busqueda</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Bus</a></li>
            </ul>
        </li>
        <li class="active treeview menu-open">
            <a href="#">
            <span>Itinerario</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Buses </a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
            <span>Reporte</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Exceso de velocidad </a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Flujo de accidentes </a></li>
            </ul>
        </li>
    </ul>
@endsection()



<!-- Body -->
@section('cuerpa')
    <!--Container-->
    <div class="container col-md-11">
        <!--Box-->
        <div class="box">
            <!--Box header-->
            <div class="box-header">
                <h5 class="box-title">Historial de buses</h5>
            </div>
            <!--/Box header-->
            <!--Box body-->
            <div class="box-body">
                <!-- Tabla -->
                <table class="display" id="tablaHistorial" width="100%" cellspacing="0" data-order='[[ 1, "asc" ]]'>
                    <!-- Header de tabla -->
                    <thead>
                        <tr>
                            <th>Terminal inicio</th>
                            <th>Hora inicio</th>
                            <th>Terminal destino</th>
                            <th>Hora destino</th>
                        </tr>
                    </thead>
                    <!-- /Header de tabla-->
                    <!-- Footer de tabla -->
                    <tfoot>
                        <tr>
                            <th>Terminal inicio</th>
                            <th>Hora inicio</th>
                            <th>Terminal destino</th>
                            <th>Hora destino</th>
                        </tr>
                    </tfoot>
                    <!-- /Footer de tabla -->
                    <!-- Body de tabla -->
                    <tbody>
                        <tr>
                            <td>San Borja</td>
                            <td>08:00:00</td>
                            <td>Rancagua</td>
                            <td>10:00:00</td>
                        </tr>
                        <tr>
                            <td>Rancagua</td>
                            <td>10:00:00</td>
                            <td>Talca</td>
                            <td>13:00:00</td>
                        </tr>
                        <tr>
                            <td>Talca</td>
                            <td>13:00:00</td>
                            <td>Concepción</td>
                            <td>16:00:00</td>
                        </tr>
                    </tbody>
                    <!-- /Body de tabla -->
                </table>
                <!-- /Tabla -->
            </div>
            <!--/Box body-->
            <!--Box footer-->
            <div class="box-footer">
            <a href="//vistaItinerario" id="refBus"><button type="buton" class="btn" id="btnVolver">Volver</button></a>
            </div>
            <!--/Box footer-->
        </div>
        <!--/Box-->
    </div>
    <!--/Container-->
@endsection()

<!-- JS Adicional -->
@section('js')
    <script src="{{ URL::asset('https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('js/itinerarioHBuses.js') }}"></script>
@endsection()