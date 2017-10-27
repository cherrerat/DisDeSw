@extends('hyf.headerdash')

@section('titulo', 'Empresa de buses')
@section('subtitulo', 'Busqueda de bus | Datos de tripulación y viaje | Mapa')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/EBBMap.css')}}">
@endsection()

@section('nombreUsuario', 'Joe Doe')
@section('institucion', 'Empresa de buses')

@section('headerRuta')
  <div class="col-md-11 row">
    <h4 class="h4"><a href="">Carabineros de Chile</a> -> <a href="#">Busqueda bus</a> -> <a href="#">Datos de tripulación y viaje</a> -> <a href="">Mapa</a></h4>
    <button type="button" class="btn" id="volverMap">Volver</button>
  </div>
@endsection()

@section('barraDeNavegacion')
    <ul class="sidebar-menu" data-widget="tree">
    <li class="header">Navegación principal</li>
    <li class="active treeview menu-open">
        <a href="#">
        <i class="fa fa-dashboard"></i> <span>Busqueda</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li  class="active"><a href="#"><i class="fa fa-circle-o"></i>Bus</a></li>
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
    <li class="treeview">
        <a href="#">
        <i class="fa fa-pie-chart"></i>
        <span>Reporte</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Accidentes diarios</a></li>
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
@endsection
  
@section('cuerpa')
    <div class="container col-md-11">
        <div class="box">
            <div class="box-header">
                <h5 class="box-title">Ubicación en tiempo real</h5>
            </div>
            <div class="box-body">
            <div class="cointainer col-md-11" id="contenedorMapa">
                <div id="map"></div>
            </div>
            </div>
            <div class="box-footer">
                <button class="btn" id="btnVolver">Volver</button>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection()