@extends('hyf.headerDash')

<!-- Titulo del navegador -->
@section('titulo','Empresa de buses')
@section('subtitulo', 'Reporte: ACCIDENTES DIARIOS | Detalle')
<!-- CSS extra -->
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.16/b-1.4.2/b-html5-1.4.2/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/EBRADD.css') }}">
@endsection()

<!-- Usuario -->
@section('nombreUsuario', 'Joe Doe')
@section('institucion', 'Empresa de buses')

<!-- Ruta de navegación en body -->
@section('headerRuta')
    <div class="col-md-11 row">
        <h4 class="h4"><a href="">Empresa de buses </a> -> <a href="#">Reporte:Accidentes Diarios</a> -> <a href="">Detalle</a></h4>
    </div>
@endsection()

<!-- Navegación -->
@section('barraDeNavegacion')
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navegación principal</li>
        <li class="treeview">
            <a href="#">
            <i class="fa fa-dashboard"></i> <span>Busqueda</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Bus</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Pasajero</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Itinerario</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Buses </a></li>
            </ul>
        </li>
        <li class="active treeview menu-open">
            <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Reporte</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Accidentes diarios</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Exceso de velocidad</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Tripulación</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Listar tripulacion</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
            <span>Carga</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Planificación</a></li>
            </ul>
        </li>
    </ul>
@endsection()

<!-- Body -->
@section('cuerpa')
    <!-- Container -->
    <div class="container col-md-11">
        <div class="box">
            <div class="box-header">
                <h5 class="box-title">Estadística de accidentes en el día 05-03-2018</h5>
            </div>
            <div class="box-body">
                <h3 class="sub-title">Región Metropolitana</h5>
                <hr>
                    <table class="display" id="accidentesHistorial" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Hora</th>
                                <th>Cantidad de heridos</th>
                                <th>Empresa</th>
                                <th>Patente</th>
                                <th>Cantidad de victimas fatales</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Hora</th>
                                <th>Cantidad de heridos</th>
                                <th>Empresa</th>
                                <th>Patente</th>
                                <th>Cantidad de victimas fatales</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>08:00:05</td>
                                <td>20</td>
                                <td>Empresa 1</td>
                                <td>XX-XX-XX</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>10:02:00</td>
                                <td>2</td>
                                <td>Empresa 1</td>
                                <td>XX-XX-XY</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>13:02:20</td>
                                <td>1</td>
                                <td>Empresa 1</td>
                                <td>XX-XX-YX</td>
                                <td>1</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
            </div>
            <div class="box-footer">
                <button class="btn" id="btnVolver">Volver</button>
            </div>
        </div>
    </div><!-- /Container -->
@endsection()

<!-- JS Adicional -->
@section('js')
    <script src="{{ URL::asset('https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('js/EBRADD.js') }}"></script>
@endsection()
