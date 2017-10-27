@extends('hyf.headerDash')

<!-- Titulo del navegador -->
@section('titulo','Empresa de buses')
@section('subtitulo', 'Tripulación')
<!-- CSS extra -->
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.16/b-1.4.2/b-html5-1.4.2/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://nightly.datatables.net/buttons/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/EBRT.css') }}">
@endsection()

<!-- Usuario -->
@section('nombreUsuario', 'Joe Doe')
@section('institucion', 'Empresa de buses')

<!-- Ruta de navegación en body -->
@section('headerRuta')
    <div class="col-md-11 row">
        <h4 class="h4"><a href="">Empresa de buses </a> -> <a href="#">Tripulación</a></h4>
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
        <li class="active treeview menu-open">
            <a href="#">
            <span>Tripulación</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Listar tripulacion</a></li>
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
        <!--Box header-->
        <div class="box-header">
            <h3 class="box-title">Tripulación</h3>
        </div>
        <!--/Box header-->
        <!--Box body-->
        <div class="box-body">
            {!! Form::open(['url' => '', 'class' => 'form-horizontal']) !!}
                <h3 class="sub-title">Empresa 1</h3>
                <hr>

                    <!--Table-->
                    <table class="display" id="listTrip" cellspacing="0" width="100%">
                        <!--Header y Footer de Table-->
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Puesto</th>
                                <th>RUN</th>
                                <th>Tiempo en empresa (Años)</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nombre</th>
                                <th>Puesto</th>
                                <th>RUN</th>
                                <th>Tiempo en empresa (Años)</th>
                            </tr>
                        </tfoot>
                        <!--Header y Footer de Table-->
                        <!--Body Table-->
                        <tbody>
                            <tr>
                                <td>Juan Carlos</td>
                                <td>Chofer</td>
                                <td>9.999.999-9</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Carlos Contreras</td>
                                <td>Chofer</td>
                                <td>9.997.997-8</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>Roberto Carlos</td>
                                <td>Auxiliar</td>
                                <td>9.996.669-8</td>
                                <td>4</td>
                            </tr>
                        </tbody>
                        <!--/Body Table-->
                    </table>
                    <!--/Table-->
            {!! Form::close() !!}
        </div>
        <hr></hr>
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
    <<script src="{{ URL::asset('https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('js/EBRT.js') }}"></script>
@endsection()
