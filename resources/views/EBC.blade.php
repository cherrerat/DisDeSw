@extends('hyf.headerDash')

<!-- Titulo del navegador -->
@section('titulo','Empresa de buses')
@section('subtitulo', 'Carga')
<!-- CSS extra -->
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/EBC.css') }}">
@endsection()

@section('logoEmpresa')
    <span class="texto-logo">EB</span>
@endsection()

<!-- Usuario -->
@section('nombreUsuario', 'Joe Doe')
@section('institucion', 'Empresa de buses')

<!-- Ruta de navegación en body -->
@section('headerRuta')
    <div class="col-md-11 row">
        <h4 class="h4"><a href="">Empresa de buses </a> -> <a href="#">Carga</a></h4>
    </div>
@endsection()

<!-- Navegación -->
@section('barraDeNavegacion')
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navegación principal</li>
        <li class="treeview">
            <a href="#">
            <span>Busqueda</span>
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
            <span>Reporte</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Accidentes diarios</a></li>
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Exceso de velocidad</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
            <span>Tripulación</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Listar tripulacion</a></li>
            </ul>
        </li>
        <li class="active treeview menu-open">
            <a href="#">
            <span>Carga</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Planificación</a></li>
            </ul>
        </li>
    </ul>
@endsection()

<!-- Body -->
@section('cuerpa')
    <!--Container-->
    <div class="container col-md-8">
        <div class="box">
            <div class="box-header">
                <h5 class="box-title">Archivos de planifación de buses</h5>
            </div>
            <div class="box-body">
                {!! Form::open(['url' => '', 'class' => 'form-horizontal'])!!}
                <div class="form-group col-md-11">
                    <div class="col-sm-3">
                        {!! Form::select('tipoArchivo',['FB' => 'Flota de buses', 'T' => 'Tripulación', 'R' => 'Rutas', 'H' => 'Horario', 'C' => 'Conductores'], 'F', ['class' => 'form-control input-sm']) !!}
                    </div>
                    {!! Form::label('tipoArchivo', 'Ubicación archivo', ['class' => 'col-sm-2 form-control-label'])!!}
                    <div class="col-sm-5">
                        {!! Form::file('.xls') !!}
                    </div>
                </div>
                <div class="col-md-2 texto-info">
                    <p class="form-control-label info">Tamaño máximo 5 mb<br>Formato de archivo: <b>xls<b><br><a href="" class="cant-archivo">Ha subido 0/5 archivos necesarios</a></p>
                </div>
                {!! Form::close() !!}
            </div>
            <div class="box-footer">
                <button class="btn" id="btnVolver">Volver</button>
            </div>
        </div>
        
    </div>
<!--/Container-->
@endsection()

<!-- JS Adicional -->
@section('js')
    <script src="{{ URL::asset('js/EBC.js') }}"></script>
@endsection()
