@extends('hyf.headerDash')

@section('titulo', 'Carabineros de Chile')
@section('subtitulo', 'Historial de viajes')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/historialPasajero.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.16/b-1.4.2/b-html5-1.4.2/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://nightly.datatables.net/buttons/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
@endsection

@section('nombreUsuario', 'Joe Doe')
@section('institucion', 'Carabineros de Chile')

@section('logoEmpresa')
  <img src="{!! URL::asset('img/logo/Carabineros.png') !!}" alt="" class="foto-logo" >
@endsection()

@section('headerRuta')
    <div class="col-md-11 row">
        <h4 class="h4"><a href="">Carabineros de Chile</a> -> <a href="#">Historial pasajero</a></h4>
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
    <div class="container col-md-11">
        <div class="box" id="boxPrincipal">
            <!-- Box header -->
            <div class="box-header">
                <h3 class="box-title">Datos pasajero: </h3> 
            </div><!-- /Box header -->
            <!-- Box body -->
            <div class="box-body">
                <div class="col-md-9" id="contenedorDatos">
                    {!! Form::label('namePasajero', 'Nombre de pasajero: ', ['class' => 'labelInput']) !!}
                    {!! Form::text('namePasajero', $nombre, ['class' => 'inputText form-control', 'id' => 'nombrePasajero', 'readonly']) !!}
                    {!! Form::label('viajes', 'Viajes: ', ['class' => 'labelInputR']) !!}
                    {!! Form::text('viajes', $viajes, ['class' => 'numberInput form-control', 'id' => 'viajesPasajero', 'readonly']) !!}</br>
                    {!! Form::label('apellidoPasajero', 'Apellido pasajero: ', ['class' => 'labelInput']) !!}
                    {!! Form::text('apellidoPasajero', $apellido, ['class' => 'inputText form-control', 'id' => 'apellidoPasajero', 'readonly']) !!}
                    {!! Form::label('profugo',null,['class' => 'labelInputR', 'id' => 'profugo']) !!}
                    {!! Form::checkbox('profugo','value', $profugo, ['class' => 'checkboxInput', 'onclick' => 'return false;' ]) !!}</br>
                </div>
            </div><!-- /Box body -->
        </div><!-- /Box -->
    </div><!-- /container -->
    <div class="container col-md-11">
        <div class="box" id="boxPrincipal   ">
            <div class="box-header with-border" id="headerDelBox">
                <h3 class="box-title">HISTORIAL DE VIAJES RUN {!! $Run !!}</h3>
                <!--Busqueda en box-->
            </div><!-- Box header-->
            <div class="box-body" >
                <!-- Data tables -->
                    <table class="display" id="tablaHistorial">
                        <thead>
                            <th>RUN</th>
                            <th>NOMBRE</th>
                            <th>FECHA</th>
                            <th>ORIGEN</th>
                            <th>DESTINO</th>
                        </thead>
                        <tbody>
                            <tr><!-- Cuerpo de la tabla-->
                                <td>{!! $Run !!}</td>
                                <td>{!! $nombre.' '.$apellido !!}</td>
                                <td>01-03-2018</td>
                                <td>Santiago</td>
                                <td>Concepción</td>
                            </tr> <!-- /Cuerpo de la tabla -->
                            <tr>
                                <td>{!! $Run !!}</td>
                                <td>{!! $nombre.' '.$apellido !!}</td>
                                <td>01-03-2018</td>
                                <td>Concepción</td>
                                <td>Santiago</td>
                            </tr>
                        </tbody>
                    </table>
                <!-- /Data tables-->
            </div><!--Box body -->
            <div class="box-footer">
            <a href="/carabineros/vistaPasajero" id="refBus"><button type="buton" class="btn" id="btnVolver">Volver</button></a>
            </div><!-- /Box footer-->
        </div><!-- /Box -->
    </div><!-- /Container principal -->
@endsection()

@section('js')
    <script src="{{ URL::asset('https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('https://cdn.datatables.net/buttons/1.4.2/js/buttons.flash.min.js') }}"></script>
    <script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('https://cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('js/historialPasajeros.js') }}"></script>
@endsection()