@extends('hyf.headerdash')

@section('titulo', 'Carabineros de Chile')
@section('subtitulo', 'Itinerario buses')


@section('logoEmpresa')
  <img src="{!! URL::asset('img/logo/Carabineros.png') !!}" alt="" class="foto-logo" >
@endsection()

@section('nombreUsuario', 'Joe Doe')
@section('institucion', 'Carabineros de Chile')

@section('headerRuta')
  <div class="col-md-11 row">
    <h4 class="h4"><a href="">Carabineros de Chile</a> -> <a href="#">Busqueda pasajero</a></h4>
    <button type="button" class="btn" id="volverMap">Volver</button>
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
                    <li><a href="/carabineros/vistaBus"><i class="fa fa-circle-o"></i>Bus</a></li>
                    <li  class="active"><a href="/carabineros/vistaPasajero"><i class="fa fa-circle-o"></i>Pasajero</a></li>
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

  <div class="col-md-10" id="datosBusq">
    {!! Form::open(['url' => 'carabineros/buscarPasajero']) !!}
      <div class="form-group col-md-8">
        {!! Form::select('formatoBusqueda', ['rpasajero'=>'Run pasajero', 'npasajero'=> 'Nombre pasajero'],'rpasajero', ['class'=>'form-control', 'id'=>'oppasajero']) !!}
        {!! Form::text('datobusqueda', null, ['class' => 'form-control', 'id' => 'datobusqueda', 'placeholder' => $placeholder]) !!}
        {!! Form::submit('Buscar', ['class' => 'btn btn-primary', 'id' => 'btnB']) !!}
      </div>
    {!! Form::close() !!}
  </div>
  <div class="col-md-10" id="infoCompletaChofer">
    <div class="box" {!! $hidden !!}>
      <div class="box-header">
        <h3 class="box-title">Datos pasajero viaje n° {!! $numviaje !!}</h3>
      </div> <!-- box header -->
      <div class="box-body">
        {!! Form::open(['url' => 'carabineros/historialPasajero', 'class' => 'form-horizontal']) !!}
        <div class="input-group text-center">
          <img src="{{ URL::asset('img/user2-160x160.jpg') }}" alt="" class="img-thumbnail" id="imgChofer"></br>
          {!! Form::label('runP', 'RUN Pasajero: ')!!}
          {!! Form::text('runP', $rut, ['id' => 'datosChofer', 'readonly'])!!}
          {!! Form::label('nombreP', 'Nombre Pasajero: ')!!}
          {!! Form::text('nombreP', $nombre, ['id' => 'datosChofer', 'readonly'])!!}</br>
          {!! Form::label('ot', 'Terminal de origen: ')!!}
          {!! Form::text('ot', $origen, ['id' => 'datosViaje', 'readonly'])!!}
          {!! Form::label('ft', 'Terminal de destino: ')!!}
          {!! Form::text('ft', $destino, ['id' => 'datosViaje', 'readonly'])!!}</br>
          {!! Form::label('hllegada', 'Hora de llegada: ')!!}
          {!! Form::text('hllegada', $hora, ['id' => 'andenLlegada', 'readonly'])!!}
          {!! Form::label('allegada', 'Anden de llegada: ')!!}
          {!! Form::text('allegada', $anden, ['id' => 'andenLlegada', 'readonly'])!!}
          {!! Form::label('profugo',null,['id' => 'andenLlegada']) !!}
          {!! Form::checkbox('profugo','value', $profugo, ['readonly', 'onclick' => 'return false;' ]) !!}</br>
          {{ Form::hidden('invisibleP', $pasajero_id, ['id' => 'pasajero_id']) }}
          {{ Form::hidden('invisibleP2', $viaje_id, ['id' => 'viaje_id']) }}
          </br><button type="submit" class="btn btn-danger" id="mostrarHistorial">Historial de viajes</button></br></br>
          {!! Form::close() !!}
          <button type="button" class="btn btn-danger" id="mostrarMapa">Mostrar ubicacion</button></br>  
        </div>
      </div><!-- the body -->
      <div class="box-footer">
        <button type="button" class="btn" id="volverBusqueda">Volver</button>
      </div>
    </div>
  </div>
  
  <div id="map"></div>
  
</div>
@endsection

@section('js')
  <script src="{{ URL::asset('js/CabPas.js')}}"></script>
@endsection 