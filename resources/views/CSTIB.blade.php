@extends('hyf.headerDash')

<!-- Titulo del navegador -->
@section('titulo','CONASET')
@section('subtitulo', 'Itinerario buses')
<!-- CSS extra -->
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/itinerarioBuses.css') }}">
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
        <h4 class="h4"><a href="">CONASET</a> -> <a href="#">Itinerario buses</a></h4>
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
                <h5 class="box-title">Itinerario de buses</h3>
            </div>
            <!--/Box header-->
            <!--Box body-->
            <div class="box-body">
            {!! Form::open(['url' => '', 'class' => 'form-horizontal']) !!}
            <div class="col-md-11 form-group grupo">
                {!! Form::label('empresaBus', 'Empresa', ['class' => 'form-control-label col-sm-1']) !!}
                <div class="col-sm-3">
                    {!! Form::select('empresaBus', ['E1' => 'Empresa 1', 'E2' => 'Empresa 2', 'E3' => 'Empresa 3'], 'E1', ['class' => 'form-control input-sm']) !!}
                </div>
                {!! Form::label('bus', 'Bus', ['class' => 'form-control-label col-sm-1']) !!}
                <div class="col-sm-3">
                    {!! Form::select('bus', ['B1' => 'XX-XX-XX', 'B2' => 'XX-XX-XY', 'B3' => 'XX-XY-XX', 'B4' => 'XX-XY-XY', 'B5' => 'XX-XY-YX', 'B6' => 'XX-XY-YY', 'B7' => 'XX-YX-XX', 'B8' => 'XX-YX-XY', 'B9' => 'XX-YX-YX', 'B10' => 'XX-YX-YY'], 'B1', ['class' => 'form-control input-sm'])!!}
                </div>
            </div>
            <div class="form-group col-md-11 ">
                {!! Form::label('dia', 'Día', ['class' => 'form-control-label col-sm-1'])!!}
                <div class="col-sm-3">
                    <input type="date" name="dia" id="diaItinerario" class="dataPicker">
                </div>
            </div>
            <div class="form-group col-md-11 btnBusqueda">
                <button type="button" class="btn btn-success" id="busquedaItinerario">Busqueda</button>
            </div>
            {!! Form::close() !!}
            </div>
            <!--/Box body-->
            <!--Box footer-->
            <div class="box-footer">
                <button type="button" class="btn" id="btnVolver">Volver</button>
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