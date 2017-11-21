@extends('hyf.headerDash')

<!-- Titulo del navegador -->
@section('titulo','CONASET')
@section('subtitulo', 'Buscar bus | Detalles')
<!-- CSS extra -->
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/CarabineroBD.css') }}">
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
        <h4 class="h4"><a href="">CONASET</a> -> <a href="#">Busqueda bus</a> -> <a href="#">Detalles</a> </h4>
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
        <li class="active"><a href="/conaset/vistaBus"><i class="fa fa-circle-o"></i>Bus</a></li>
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
    <li class="treeview">
        <a href="#">
        <span>Reporte</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="vistaReporteV"><i class="fa fa-circle-o"></i> Exceso de velocidad </a></li>
        <li><a href="vistaReporteA"><i class="fa fa-circle-o"></i> Flujo de accidentes </a></li>
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
                <h3 class="box-title">Datos tripulación viaje n°{!! $viaje !!}</h3>
            </div>
            <!--/Box header-->
            <!--Box body-->
            <div class="box-body">
            {!! Form::open(['url' => 'conaset/posicionBus', 'class' => 'form-horizontal']) !!}
            <div class="col-md-11 thumb-chofer">
            <img src="{{ URL::asset('img/user2-160x160.jpg') }}" alt="" class="img-thumbnail" id="imgChofer">
            </div>
            <div class="form-group col-md-11 grupo-de-input">
                {!! Form::label('nombreChofer', 'Nombre Chofer', ['class' => 'form-control-label col-sm-2'])!!}
                <div class="col-sm-2">
                    {!! Form::text('nombreChofer', $nombreChofer, ['class' => 'form-control input-sm', 'id' => 'nameChofer', 'readonly'])!!}
                </div>
                {!! Form::label('runC', 'Run del chofer', ['class' => 'form-control-label col-sm-2'])!!}
                <div class="col-sm-2">
                    {!! Form::text('runC', $rutChofer, ['class' => 'form-control input-sm', 'id' => 'runChofer', 'readonly'])!!}
                </div>
            </div>
            <div class="form-group col-md-11 grupo-de-input">
                {!! Form::label('hi', 'Hora inicio viaje', ['class' => 'form-control-label col-sm-2'] ) !!}
                <div class="col-sm-2">
                    {!! Form::text('hi', $horaI, ['class' => 'input-sm form-control', 'id' => 'horarioInicio', 'readonly'])!!}
                </div>
                {!! Form::label('hf', 'Hora final viaje', ['class' => 'form-control-label col-sm-2'])!!}
                <div class="col-sm-2">
                    {!! Form::text('hf', $horaF, ['class' => 'datosViaje form-control', 'id' => 'horarioFinal', 'readonly'])!!}
                </div>
            </div>
            <div class="form-group col-md-11 grupo-de-input">
                {!! Form::label('allegada', 'Anden de llegada', ['class' => 'form-control-label col-sm-2'])!!}
                <div class="col-sm-2">
                    {!! Form::text('allegada', $anden, ['class' => 'andenLlegada form-control', 'id' => 'andenDestino', 'readonly'])!!}
                    {{ Form::hidden('invisible', $latlng, ['id' => 'viaje']) }}
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-danger" id="mostrarMapa">Mostrar posición real</button>
                </div>
            </div>
            {!! Form::close() !!}
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
@endsection()