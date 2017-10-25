@extends('hyf.headerDash')

<!-- Titulo del navegador -->
@section('titulo','Carabineros de Chile')
@section('subtitulo', 'Reporte: Exceso de velocidad')
<!-- CSS extra -->
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/REV.css') }}">
@endsection()

<!-- Usuario -->
@section('nombreUsuario', 'Joe Doe')
@section('institucion', 'Carabineros de Chile')



<!-- Ruta de navegación en body -->
@section('headerRuta')
    <div class="col-md-11 row">
        <h4 class="h4"><a href="">Carabineros de Chile</a> -> <a href="#">Reporte: exceso de velocidad</a></h4>
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


@endsection

<!-- Body -->
@section('cuerpa')
    <!-- Container -->
    <div class="container col-md-11">
        <!-- Box -->
        <div class="box">
            <!-- Box header -->
            <div class="box-header">
                <h3 class="box-title">Reporte: Exceso de velocidad </h3>
            </div>
            <!-- /Box header -->
            <!-- Box body --> 
            <div class="box-body">
                {!! Form::open(['url' => '', 'class' => 'form-horizontal']) !!}
                <div class="input-group" id="empresaInput">
                    {!! Form::label('empresa', 'Empresa', ['class' => 'control-label col-sm-3']) !!}
                    <div class="col-sm-5">
                        {!! Form::select('empresa',['E1' => 'Empresa 1', 'E2' => 'Empresa 2', 'E3' => 'Empresa 3', 'E4' => 'Empresa 4'], 'E1', ['class' => 'form-control input-sm inputSelect']) !!}
                    </div>
                </div>
                <hr></hr>
                <div class="input-group" id="diaInput">
                    {!! Form::label('diaInicial', 'Fecha inicio', ['class' => 'control-label col-sm-2'])!!}
                    <div class="col-sm-2">
                        <input type="date" name="diaInicial" id="diaItinerario" class="input-sm form-control">
                    </div>
                    {!! Form::label('diaFinal', 'Fecha final', ['class' => 'control-label col-sm-2'])!!}
                    <div class="col-sm-2">
                        <input type="date" name="diaFinal" id="diaItinerario" class="input-sm form-control">
                    </div>     
                </div>   
                <div class="divBusqueda">
                    <button type="button" class="btn btnBS" id="btnBusqueda">Busqueda</button>
                </div>
                {!! Form::close() !!}
            </div>
            <!--/Box body-->
            <!-- Box footer -->
            <div class="box-footer">
            </div>
            <!-- /Box footer -->
        </div>
        <!-- /Box -->
    </div>
    <!-- /Container -->
@endsection()

<!-- JS Adicional -->
@section('js')
@endsection()
