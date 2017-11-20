@extends('hyf.headerDash')

<!-- Titulo del navegador -->
@section('titulo','Carabineros de Chile')
@section('subtitulo', 'Itinerario buses')
<!-- CSS extra -->
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.16/b-1.4.2/b-html5-1.4.2/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/itinerarioHBuses.css') }}">
    
@endsection()

@section('logoEmpresa')
  <img src="{!! URL::asset('img/logo/Carabineros.png') !!}" alt="" class="foto-logo" >
@endsection()

<!-- Usuario -->
@section('nombreUsuario', 'Joe Doe')
@section('institucion', 'Carabineros de Chile')

<!-- Ruta de navegación en body -->
@section('headerRuta')
    <div class="col-md-11 row">
        <h4 class="h4"><a href="">Carabineros de Chile</a> -> <a href="#">Itinerario de buses</a> -> <a href="#">Detalle</a></h4>
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
                    <li  class="active"><a href="/carabineros/vistaBus"><i class="fa fa-circle-o"></i>Bus</a></li>
                    <li><a href="/carabineros/vistaPasajero"><i class="fa fa-circle-o"></i>Pasajero</a></li>
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
                    <li  class="active"><a href="/carabineros/vistaItinerario"><i class="fa fa-circle-o"></i> Buses </a></li>
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

<!-- Body -->
@section('cuerpa')
    <!-- Container -->
    <div class="container col-md-11">
        <!-- Box DataTable -->
        <div class="box">
            <!-- Box header -->
            <div class="box-header">
                <h3 class="box-title">Historial de buses</h3>
            </div>
            <!-- /Box header-->
            <!-- Box body -->
            <div class="box-body">
                <!-- Tabla -->
                <table class="display" id="tablaHistorial" width="100%" cellspacing="0" data-order='[[ 1, "asc" ]]'>
                    <!-- Header de tabla -->
                    <thead>
                        <tr>
                            <th>Terminal inicio</th>
                            <th>Hora inicio</th>
                            <th>Terminal destino</th>
                            <th>Hora destino</th>
                        </tr>
                    </thead>
                    <!-- /Header de tabla-->
                    <!-- Footer de tabla -->
                    <tfoot>
                        <tr>
                            <th>Terminal inicio</th>
                            <th>Hora inicio</th>
                            <th>Terminal destino</th>
                            <th>Hora destino</th>
                        </tr>
                    </tfoot>
                    <!-- /Footer de tabla -->
                    <!-- Body de tabla -->
                    <tbody>
                        <tr>
                            <td>San Borja</td>
                            <td>08:00:00</td>
                            <td>Rancagua</td>
                            <td>10:00:00</td>
                        </tr>
                        <tr>
                            <td>Rancagua</td>
                            <td>10:00:00</td>
                            <td>Talca</td>
                            <td>13:00:00</td>
                        </tr>
                        <tr>
                            <td>Talca</td>
                            <td>13:00:00</td>
                            <td>Concepción</td>
                            <td>16:00:00</td>
                        </tr>
                    </tbody>
                    <!-- /Body de tabla -->
                </table>
                <!-- /Tabla -->
            </div>
            <!-- /Box body -->
            <!-- Box footer -->
            <div class="box-footer">
            <a href="/carabineros/vistaItinerario" id="refBus"><button type="buton" class="btn" id="btnVolver">Volver</button></a>
            </div>
            <!-- /Box footer -->
        </div>
    </div><!-- /Container -->
@endsection()

<!-- JS Adicional -->
@section('js')
    <script src="{{ URL::asset('https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('js/itinerarioHBuses.js') }}"></script>
@endsection()
