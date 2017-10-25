@extends('hyf.headerDash')

<!-- Titulo del navegador -->
@section('titulo','Carabineros de Chile')
@section('subtitulo', 'Itinerario buses')
<!-- CSS extra -->
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/itinerarioBuses.css') }}">
@endsection()

<!-- Usuario -->
@section('nombreUsuario', 'Joe Doe')
@section('institucion', 'Carabineros de Chile')

<!-- Ruta de navegación en body -->
@section('headerRuta')
    <div class="col-md-11 row">
        <h4 class="h4"><a href="">Carabineros de Chile</a> -> <a href="#">Itinerario de buses</a></h4>
    </div>
@endsection()

<!-- Navegación -->
@section('barraDeNavegacion')
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navegación principal</li>
        <li class=" treeview ">
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
        <li class="active treeview menu-open">
            <a href="#">
            <i class="fa fa-files-o"></i>
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
            <i class="fa fa-pie-chart"></i>
            <span>Reporte</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
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
    </ul>
@endsection()

<!-- Body -->
@section('cuerpa')
    <!-- Container -->
    <div class="container col-md-11">
        <!-- Box principal -->
        <div class="box" id="boxPrincipal">
            <!-- Box header -->
            <div class="box-header">
                <h3 class="box-title">Itinerario de buses</h3>
            </div><!-- /Box header -->
            <!-- Box body -->
            <div class="box-body">
                {!! Form::open(['url' => '']) !!}
                <div class="input-group col-md-11" id="bodySuperior">
                    <div class="form-group">
                        {!! Form::label('empresaBus', 'Empresa', ['class' => 'labelInput control-label', 'id' => 'separador']) !!}
                        <div class="selectCustom col-sm-5" id="separador">           
                            {!! Form::select('empresaBus', ['E1' => 'Empresa 1', 'E2' => 'Empresa 2', 'E3' => 'Empresa 3'], 'E1', ['class' => 'inputSelect']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::label('bus', 'Bus', ['class' => 'labelInput control-label', 'id' => 'separador']) !!}
                        <div class="selectCustom col-sm-5" id="separador">
                            {!! Form::select('bus', ['B1' => 'XX-XX-XX', 'B2' => 'XX-XX-XY', 'B3' => 'XX-XY-XX', 'B4' => 'XX-XY-XY', 'B5' => 'XX-XY-YX', 'B6' => 'XX-XY-YY', 'B7' => 'XX-YX-XX', 'B8' => 'XX-YX-XY', 'B9' => 'XX-YX-YX', 'B10' => 'XX-YX-YY'], 'B1', ['class' => 'inputSelect'])!!}
                        </div>
                    </div>
                </div>
                <div id="bodyInferior">
                    {!! Form::label('dia', 'Día', ['class' => 'labelInput'])!!}
                    <input type="date" name="dia" id="diaItinerario" class="dataPicker">
                </div>
                <div id="bodyButton">
                    <button type="button" class="btn" id="busquedaItinerario">Busqueda</button>
                </div>
                
                {!! Form::close() !!}
            </div><!-- /Box body-->
            <!-- Box footer -->
            <div class="box-footer">
                <div class="divVolver">
                    <button type="button" class="btn" id="btnVolver">Volver</button>
                </div>
            </div><!-- /Box footer-->
        </div><!-- /Box principal -->
    </div><!-- /Container -->
@endsection()

<!-- JS Adicional -->
@section('js')
@endsection()
