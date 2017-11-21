@extends('hyf.headerDash')

<!-- Titulo del navegador -->
@section('titulo','CONASET')
@section('subtitulo', 'Reporte: Accidente diarios')
<!-- CSS extra -->
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/EBRAD.css') }}">
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
        <h4 class="h4"><a href="">CONASET</a> -> <a href="#">Reporte: Accidentes diarios</a></h4>
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
        <li><a href="/conaset/vistaBus"><i class="fa fa-circle-o"></i>Bus</a></li>
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
        <li><a href="/conaset/vistaItinerario"><i class="fa fa-circle-o"></i> Buses </a></li>
        </ul>
    </li>
    <li class="active treeview menu-open">
        <a href="#">
        <span>Reporte</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="vistaReporteV"><i class="fa fa-circle-o"></i> Exceso de velocidad </a></li>
        <li class="active"><a href="vistaReporteA"><i class="fa fa-circle-o"></i> Flujo de accidentes </a></li>
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
                <h5 class="box-title">Reporte: Flujo de accidentes</h5>
            </div>
            <!--/Box header-->
            <!--Box body-->
            <div class="box-body">
                <!--{{ Form::hidden('repCST', null, ['id' => 'flxac']) }}-->
                <canvas id="FlujoDeAccidentes"></canvas>
                <div class="form-group">
                <a href="/conaset/vistaReporteAD" id="btnDetalle"><button type="buton" class="btn" id="btnVolver">Ver Detalles</button></a>
                </div>
            </div>
            <!--/Box body-->
            <!--Box footer-->
            <div class="box-footer">
            <a href="/conaset/vistaBus" id="refBus"><button type="buton" class="btn" id="btnVolver">Volver</button></a>
            </div>
            <!--/Box footer-->
        </div>
        <!--/Box-->
    </div>
    <!--/Container-->
@endsection()

<!-- JS Adicional -->
@section('js')
    <script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js') }}"></script>   
    <script src="{{ URL::asset('js/CSTRAD.js') }}"></script>
@endsection()