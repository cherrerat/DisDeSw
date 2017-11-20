@extends('hyf.headerdash')

@section('titulo', 'Carabineros de Chile')
@section('subtitulo', 'Busqueda de bus')

@section('css')
  <link rel="stylesheet" href="{{ URL::asset('css/CarabineroBD.css') }}">
@endsection()

@section('logoEmpresa')
  <img src="{!! URL::asset('img/logo/Carabineros.png') !!}" alt="" class="foto-logo" >
@endsection()

@section('nombreUsuario', 'Joe Doe')
@section('institucion', 'Carabineros de Chile')

@section('headerRuta')
  <div class="col-md-11 row">
    <h4 class="h4"><a href="">Carabineros de Chile</a> -> <a href="#">Busqueda bus</a> -> <a href="">Datos de tripulación y viaje</a></h4>
  </div>
@endsection()

@section('barraDeNavegacion')

              <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Navegación principal</li>
                <li class="active treeview menu-open">
                  <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Busqueda</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li  class="active"><a href="/carabineros/vistaBus"><i class="fa fa-circle-o"></i>Bus</a></li>
                    <li><a href="/carabineros/vistaPasajero"><i class="fa fa-circle-o"></i>Pasajero</a></li>
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
                    <li><a href="/carabineros/vistaItinerario"><i class="fa fa-circle-o"></i> Buses </a></li>
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
                    <li><a href="/carabineros/vistaReporte"><i class="fa fa-circle-o"></i> Exceso de velocidad</a></li>
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
                    <li><a href="/carabineros/vistaTripulacion"><i class="fa fa-circle-o"></i>Listar tripulacion</a></li>
                  </ul>
                </li>
              </ul>


@endsection
  
@section('cuerpa')
<div class="cointainer col-md-11" id="contenedorMapa">
  <div class="col-md-10" id="infoCompletaChofer">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Datos tripulación viaje n°123</h3>
      </div> <!-- box header -->
      <div class="box-body">
      {!! Form::open(['url' => 'carabineros/posicionBus', 'class' => 'form-horizontal']) !!}
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
              {{ Form::hidden('invisible', $viaje, ['id' => 'viaje']) }}
          </div>
          <div class="col-sm-2">
              <button type="submit" class="btn btn-danger" id="mostrarMapa">Mostrar posición real</button>
          </div>
      </div>
      {!! Form::close() !!}
    </div><!-- the body -->
    <div class="box-footer">
    <a href="/carabineros/vistaBus" id="refBus"><button type="buton" class="btn" id="btnVolver">Volver</button></a>
    </div>
    </div>
  </div>
  
  <div id="map"></div>
  
</div>
@endsection

@section('js')
@endsection()