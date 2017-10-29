@extends('hyf.headerDash')

<!-- Titulo del navegador -->
@section('titulo','Empresa de buses')
@section('subtitulo', 'Reporte: Exceso de velocidad')
<!-- CSS extra -->
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.16/b-1.4.2/b-html5-1.4.2/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://nightly.datatables.net/buttons/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/EBREV.css') }}">
@endsection()

<!-- Usuario -->
@section('nombreUsuario', 'Joe Doe')
@section('institucion', 'Empresa de buses')

<!-- Ruta de navegación en body -->
@section('headerRuta')
    <div class="col-md-11 row">
        <h4 class="h4"><a href="">Empresa de buses </a> -> <a href="#">Reporte:Exceso de velocidad</a></h4>
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
        <li class="active treeview menu-open">
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
@endsection()

<!-- Body -->
@section('cuerpa')
    <!--Container-->
    <div class="container col-md-11">
    <!--Box-->
    <div class="box">
        <!--Box Header-->
        <div class="box-header">
            <h3 class="box-title">Reporte: Exceso de velocidad</h3>
        </div>
        <!--/Box Header-->
        <!--Box Body-->
        <div class="box-body">
            <h5 class="box-title box-sub-title">Empresa 1 - Día: 05-03-2018</h5>
            <hr></hr>
            <!--DataTable-->
            <table class="display" id="historialEV" cellspacing="0" width="100%">
                <!--Header y Footer de Table-->
                <thead>
                    <tr>
                        <th>Patente</th>
                        <th>Chofer</th>
                        <th>Terminal de inicio</th>
                        <th>Terminal de destino</th>
                        <th>Hora</th>
                        <th>Día</th>
                        <th>Velocidad</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Patente</th>
                        <th>Chofer</th>
                        <th>Terminal de inicio</th>
                        <th>Terminal de destino</th>
                        <th>Hora</th>
                        <th>Día</th>
                        <th>Velocidad</th>
                    </tr>
                </tfoot>
                <!--/Header y Footer de Table-->
                <!--Body de Table-->
                    <tr>
                        <td>XX-XX-XX</td>
                        <td>Juan Carlos</td>
                        <td>San Borja</td>
                        <td>Rancagua</td>
                        <td>10:15:25</td>
                        <td>05-03-2018</td>
                        <td>140 KM/H</td>
                    </tr>
                    <tr>
                        <td>XX-XX-XY</td>
                        <td>Carlos Contreras</td>
                        <td>Rancagua</td>
                        <td>Talca</td>
                        <td>13:00:00</td>
                        <td>05-03-2018</td>
                        <td>105 KM/H</td>
                    </tr>
                    <tr>
                        <td>XX-XY-XX</td>
                        <td>Roberto Carlos</td>
                        <td>Talca</td>
                        <td>Concepción</td>
                        <td>16:04:20</td>
                        <td>06-03-2018</td>
                        <td>120 KM/H</td>
                    </tr>
                <!--/Body de Table-->
            </table>
            <!--/DataTable-->
            <hr>
        </div>
        <!--/Box Body-->
        <!--Box Footer-->
        <div class="box-footer">
            <button class="btn" id="btnVolver">Volver</button>
        </div>
        <!--/Box Footer-->
    </div>
    <!--/Box-->
</div>
<!--/Container-->
@endsection()

<!-- JS Adicional -->
@section('js')
    <script src="{{ URL::asset('https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('js/EBREV.js') }}"></script>
@endsection()
