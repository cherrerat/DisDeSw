@extends('hyf.headerDash')

<!-- Titulo del navegador -->
@section('titulo','Administración de terminal')
@section('subtitulo', 'Carga de archivos')
<!-- CSS extra -->
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/ADTC.css') }}">
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
        <h4 class="h4"><a href="">Administración de terminal</a> -> <a href="#">Carga</a></h4>
    </div>
@endsection()

<!-- Navegación -->
@section('barraDeNavegacion')
<ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navegación principal</li>
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
            <li><a href="#"><i class="fa fa-circle-o"></i> Afluencia terminal</a></li>
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
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Terminal</a></li>
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
                <h5 class="box-title">Archivo de planificación de terminal</h5>
            </div>
            <!--/Box header-->
            <!--Box body-->
            <div class="box-body">
                <div class="col-sm-11 sub-title">
                    <h4>Planificación de terminal - Día 1 de octubre</h4>
                </div>
                {!! Form::open(['url' => '', 'class' => 'form-horizontal']) !!}
                <div class="custom_file_upload">
                    <input type="text" class="file" name="file_info">
                    <div class="file_upload">
                        <input type="file" id="file_upload" name="file_upload">
                    </div>
                </div>
                <div class="col-md-11 info">
                    <p>Tamaño máximo: 5mb<br>Formato de archivo: .xls</p>
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