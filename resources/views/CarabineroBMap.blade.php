@extends('hyf.headerdash')

@section('titulo', 'Carabineros de Chile')
@section('subtitulo', 'Busqueda de bus')

@section('css')
  <link rel="stylesheet" href="{{ URL::asset('css/CarabineroBMap.css') }}">
@endsection()

@section('nombreUsuario', 'Joe Doe')
@section('institucion', 'Carabineros de Chile')

@section('logoEmpresa')
  <img src="{!! URL::asset('img/logo/Carabineros.png') !!}" alt="" class="foto-logo" >
@endsection()

@section('headerRuta')
  <div class="col-md-11 row">
    <h4 class="h4"><a href="">Carabineros de Chile</a> -> <a href="#">Busqueda bus</a> -> <a href="">Datos tripulación y viaje </a> -> <a href="">Ubicación en tiempo real</a></h4>
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
                    <li  class="active"><a href="/carabineros/vistaBus"><i class="fa fa-circle-o"></i>Bus</a></li>
                    <li><a href="/carabineros/vistaPasajero"><i class="fa fa-circle-o"></i>Pasajero</a></li>
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
                    <li><a href="/carabineros/vistaItinerario"><i class="fa fa-circle-o"></i> Buses </a></li>
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
                    <li><a href="/carabineros/vistaReporte"><i class="fa fa-circle-o"></i> Exceso de velocidad</a></li>
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
                    <li><a href="/carabineros/vistaTripulacion"><i class="fa fa-circle-o"></i>Listar tripulacion</a></li>
                  </ul>
                </li>
              </ul>


@endsection
  
@section('cuerpa')
  <div class="container col-md-11">
  {{ Form::hidden('mapita', $latlng, ['id' => 'ubicacion']) }}
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
<script src="{{ URL::asset('js/CarabineroBMap.js') }}"></script>
@endsection()