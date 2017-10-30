@extends('hyf.headerdash')

@section('titulo', 'Empresa de bus')
@section('subtitulo', 'Busqueda de bus')

@section('css')
    <link rel="stylesheet" href="{!! URL::asset('css/EB.css') !!} ">
@endsection()

@section('logoEmpresa')
    <span class="texto-logo">EB</span>
@endsection()

@section('nombreUsuario', 'Joe Doe')
@section('institucion', 'Empresa de bus')

@section('headerRuta')
  <div class="col-md-11 row">
    <h4 class="h4"><a href="">Empresa de bus</a> -> <a href="#">Busqueda bus</a></h4>
    <button type="button" class="btn" id="volverMap">Volver</button>
  </div>
@endsection()
@section('barraDeNavegacion')

    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navegación principal</li>
        <li class="active treeview menu-open">
            <a href="#">
            <span>Busqueda</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li  class="active"><a href="#"><i class="fa fa-circle-o"></i>Bus</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
            <span>Itinerarios</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Bus</a></li>
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
            <li><a href="#"><i class="fa fa-circle-o"></i>Accidentes diarios</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Exceso de velocidad</a></li>
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
            <li><a href="#"><i class="fa fa-circle-o"></i>Listar</a></li>
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

<div class="cointainer col-md-6 contenedorPrincipal">
    <div class="box">
        <div class="box-header">
            <h5 class="box-title">Busqueda de bus</h5>
        </div>
        <div class="box-body">
            {!! Form::open(['url' => '', 'class' => 'form-horizontal']) !!}
            <div class="form-group">
                <div class="col-sm-2">
                    {!! Form::select('formatoBusqueda', ['patente'=>'Patente', 'nviaje'=> 'N° viaje'],'patente', ['class'=>'form-control input-sm', 'id'=>'opbus']) !!}
                </div>
                <div class="col-sm-8">
                    {!! Form::text('datobusqueda', null, ['class' => 'form-control input-sm', 'id' => 'datobusqueda', 'placeholder' => 'Ingrese dato de busqueda']) !!}
                </div>
            </div>
            <div class="form-group btnBusqueda">
                <button type="button" class="btn btn-danger" id="btnB">Buscar</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection()