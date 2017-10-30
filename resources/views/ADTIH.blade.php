@extends('hyf.headerDash')

<!-- Titulo del navegador -->
@section('titulo','Administración de terminal')
@section('subtitulo', 'Itinerario buses | Detalle')
<!-- CSS extra -->
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.16/b-1.4.2/b-html5-1.4.2/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://nightly.datatables.net/buttons/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/ADT.css') }}">
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
        <h4 class="h4"><a href="">Administración de terminal</a> -> <a href="#">Itinerario bus</a> -> <a href="">Detalle</a></h4>
    </div>
@endsection()

<!-- Navegación -->
@section('barraDeNavegacion')
<ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navegación principal</li>
        <li class="active treeview menu-open">
            <a href="#">
            <span>Itinerario</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Buses </a></li>
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
        <li class="treeview">
            <a href="#">
            <span>Carga</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Terminal</a></li>
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
                <h5 class="box-title">Itinerario - Día: 05-03-2018</h5>
            </div>
            <!--/Box header-->
            <!--Box body-->
            <div class="box-body">
                <table class="display" id="itTerminal" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Hora solicitada</th>
                            <th>Patente bus</th>
                            <th>Empresa de bus</th>
                            <th>Ciudad de destino</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Hora solicitada</th>
                            <th>Patente bus</th>
                            <th>Empresa de bus</th>
                            <th>Ciudad de destino</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>08:00:00</td>
                            <td>XX-XX-XX</td>
                            <td>Empresa 1</td>
                            <td>Concepción</td>
                        </tr>
                        <tr>
                            <td>10:00:00</td>
                            <td>XX-XX-XY</td>
                            <td>Empresa 2</td>
                            <td>Valdivia</td>
                        </tr>
                        <tr>
                            <td>10:00:00</td>
                            <td>XX-XX-XX</td>
                            <td>Empresa 3</td>
                            <td>Santiago</td>
                        </tr>
                    </tbody>
                </table>
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
    <script src="{{ URL::asset('https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('https://cdn.datatables.net/buttons/1.4.2/js/buttons.flash.min.js') }}"></script>
    <script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('https://cdn.datatables.net/buttons/1.4.2/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('js/ADITH.js') }}"></script>
@endsection()