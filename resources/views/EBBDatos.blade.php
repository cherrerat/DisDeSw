@extends('hyf.headerdash')

@section('titulo', 'Empresa de bus')
@section('subtitulo', 'Busqueda de bus')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/EBBDatos.css')}}">
@endsection()

@section('logoEmpresa')
    <span class="texto-logo">EB</span>
@endsection()

@section('nombreUsuario', 'Joe Doe')
@section('institucion', 'Empresa de bus')

@section('headerRuta')
  <div class="col-md-11 row">
    <h4 class="h4"><a href="">Empresa de bus</a> -> <a href="#">Busqueda bus</a> -> <a href="">Datos tripulación y viaje</a></h4>
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

<div class="cointainer col-md-11" id="contenedorMapa">
  <div class="col-md-6" id="infoCompletaChofer">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Datos tripulación viaje n°123</h3>
      </div> <!-- box header -->
      <div class="box-body">
        {!! Form::open(['url' => '', 'class' => 'form-horizontal']) !!}
        <div class="col-md-11">
        <img src="{{ URL::asset('img/user2-160x160.jpg') }}" alt="" class="img-thumbnail" id="imgChofer">
        </div>
        <div class="form-group col-md-11 grupo-de-input">
            {!! Form::label('nombreChofer', 'Nombre Chofer', ['class' => 'form-control-label col-sm-2'])!!}
            <div class="col-sm-2">
                {!! Form::text('nombreChofer', null, ['class' => 'form-control input-sm', 'id' => 'nameChofer', 'readonly'])!!}
            </div>
            {!! Form::label('runC', 'Run del chofer', ['class' => 'form-control-label col-sm-2'])!!}
            <div class="col-sm-2">
                {!! Form::text('runC', null, ['class' => 'form-control input-sm', 'id' => 'runChofer', 'readonly'])!!}
            </div>
        </div>
        <div class="form-group col-md-11 grupo-de-input">
            {!! Form::label('hi', 'Hora inicio viaje', ['class' => 'form-control-label col-sm-2'] ) !!}
            <div class="col-sm-2">
                {!! Form::text('hi', null, ['class' => 'input-sm form-control', 'id' => 'horarioInicio', 'readonly'])!!}
            </div>
            {!! Form::label('hf', 'Hora final viaje', ['class' => 'form-control-label col-sm-2'])!!}
            <div class="col-sm-2">
                {!! Form::text('hf', null, ['class' => 'datosViaje form-control', 'id' => 'horarioFinal', 'readonly'])!!}
            </div>
        </div>
        <div class="form-group col-md-11 grupo-de-input">
            {!! Form::label('allegada', 'Anden de llegada', ['class' => 'form-control-label col-sm-2'])!!}
            <div class="col-sm-2">
                {!! Form::text('allegada', null, ['class' => 'andenLlegada form-control', 'id' => 'andenDestino', 'readonly'])!!}
            </div>
            <div class="col-sm-2">
                <button type="button" class="btn btn-danger" id="mostrarMapa">Mostrar posición real</button>
            </div>
        </div>
        {!! Form::close() !!}
      </div><!-- the body -->
      <div class="box-footer">
            <button type="button" class="btn" id="volverBusqueda">Volver</button>
        </div>
    </div>
  </div>
</div>
@endsection

@section('js')
@endsection()