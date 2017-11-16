@extends('hyf.headerDash')

<!-- Titulo del navegador -->
@section('titulo','CONASET')
@section('subtitulo', 'Buscar bus | Detalles | Mapa')
<!-- CSS extra -->
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/CarabineroBMap.css') }}">
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
        <h4 class="h4"><a href="">CONASET</a> -> <a href="#">Busqueda bus</a> -> <a href="#">Mapa</a></h4>
    </div>
@endsection()

<!-- Navegación -->
@section('barraDeNavegacion')
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navegación principal</li>
        <li class="active treeview menu-open">
            <a href="#"><span>Busqueda</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Bus</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
            <span>Itinerario</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Buses </a></li>
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
                <h5 class="box-title">Ubicación en tiempo real</h5>
            </div>
            <!--/Box header-->
            <!--Box body-->
            <div class="box-body">
                <div class="cointainer col-md-11" id="contenedorMapa">
                    <div id="map"></div>
                </div>
            </div>
            <!--/Box body-->
            <!--Box footer-->
            <div class="box-footer">
                <button class="btn" id="btnVolver">Volver</button>
            </div>
            <!--/Box footer-->
        </div>
        <!--/Box-->
    </div>
    <!--/Container-->
@endsection()

<!-- JS Adicional -->
@section('js')
@endsection()