@extends('hyf.headerDash')

<!-- Titulo del navegador -->
@section('titulo','Carabineros de Chile')
@section('subtitulo', 'Itinerario buses')
<!-- CSS extra -->
@section('css')
@endsection()

<!-- Usuario -->
@section('nombreUsuario', 'Joe Doe')
@section('institucion', 'Carabineros de Chile')

<!-- Ruta de navegación en body -->
@section('headerRuta')
    <div class="col-md-11 row">
        <h4 class="h4"><a href="">Carabineros de Chile</a> -> <a href="#">Busqueda bus</a></h4>
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
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Exceso de velocidad</a></li>
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
    </ul>
@endsection()



<!-- Body -->
@section('cuerpa')
@endsection()

<!-- JS Adicional -->
@section('js')
@endsection()