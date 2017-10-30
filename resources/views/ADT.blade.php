@extends('hyf.headerDash')

<!-- Titulo del navegador -->
@section('titulo','Administración de terminal')
@section('subtitulo', 'Itinerario buses')
<!-- CSS extra -->
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/ADT.css') }}">
@endsection()

@section('logoEmpresa')
    <span class="texto-logo">ADT</span>
@endsection()

<!-- Usuario -->
@section('nombreUsuario', 'Joe Doe')
@section('institucion', 'Administración de terminal')

<!-- Ruta de navegación en body -->
@section('headerRuta')
    <div class="col-md-11 row">
        <h4 class="h4"><a href="">Administración de terminal</a> -> <a href="#">Itinerario bus</a></h4>
    </div>
@endsection()

<!-- Navegación -->
@section('barraDeNavegacion')
<ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navegación principal</li>
        <li class=" active treeview menu-open">
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
            <li><a href="#"><i class="fa fa-circle-o"></i> Afluencia terminal</a></li>
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
            <li><a href="#"><i class="fa fa-circle-o"></i>Terminal</a></li>
            </ul>
        </li>
    </ul>
@endsection()



<!-- Body -->
@section('cuerpa')
    <!--Container-->
    <div class="container col-md-6">
        <!--Box-->
        <div class="box">
            <!--Box header-->
            <div class="box-header">
                <h5 class="box-title">Itinerario de buses en terminal.</h5>
            </div>
            <!--/Box header-->
            <!--Box body-->
            <div class="box-body">
                {!! Form::open(['url' => '', 'class' => 'form-horizontal'])!!}
                <div class="form-group col-md-11">
                    {!! Form::label('dia', 'Día', ['class' => 'form-control-label col-sm-2']) !!}
                    <div class="col-sm-3">
                        <input type="date" name="diaInicial" id="diaItinerario" class="input-sm form-control">
                    </div>
                    {!! Form::label('empresa', 'Empresa', ['class' => 'form-control-label col-sm-2']) !!}
                    <div class="col-sm-2">
                        {!! Form::select('empresa', ['E1' => 'Empresa 1', 'E2' => 'Empresa 2', 'E3' => 'Empresa 3'], 'E1', ['class' => 'input-sm form-control']) !!}
                    </div>
                </div>
                <div class="form-group col-md-11 btnBuscar">
                    <button class="btn btn-success" id="btnIt">Buscar</button>
                </div>
                {!! Form::close() !!}
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