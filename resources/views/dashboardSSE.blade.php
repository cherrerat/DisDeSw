@extends('hyf.headerDash')

<!-- Titulo del navegador -->
@section('titulo','Super Usuario')
@section('subtitulo', 'Gestion de errores')

<!-- CSS extra -->
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.16/b-1.4.2/b-html5-1.4.2/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://nightly.datatables.net/buttons/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/SSE.css') }}">
@endsection()

<!-- Usuario -->
@section('nombreUsuario', 'Joe Doe')
@section('institucion', 'Super usuario')

<!-- Ruta de navegación en body -->
@section('headerRuta')
    <div class="col-md-11 row">
        <h4 class="h4"><a href="">Superusuario</a> -> <a href="#">Errores resportados</a></h4>
    </div>
@endsection()

<!-- Navegación -->
@section('barraDeNavegacion')
<ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navegación principal</li>
        <li class="active treeview menu-open">
            <a href="#">
            <span>Errores</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Historial de errores</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="">
                <span>Gestor de cuentas</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href=""><i class="fa fa-circle-o"></i>Listar cuentas</a></li>
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
                <h1 class="box-title">Errores reportados</h1>
            </div>
            <!--/Box header-->
            <!--Box body-->
            <div class="box-body">
                <!--Table-->
                <table class="display" id="errorReportado" cellspacing="0" width="100%">
                    <!--Head y footer del table-->
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Reportante</th>
                            <th>Institución</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            <th>Fecha Resp</th>
                            <th>Motivo</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Fecha</th>
                            <th>Reportante</th>
                            <th>Institución</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            <th>Fecha Resp</th>
                            <th>Motivo</th>
                        </tr>
                    </tfoot>
                    <!--/Head y footer del table-->
                    <!--Body del table-->
                    <tbody>
                        <tr>
                            <td>05-01-2017</td>
                            <td>Joe Doe</td>
                            <td>CONASET</td>
                            <td>Sistema no generá reportes</td>
                            <td>Pendiente</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                    <!--/Body del table-->
                </table>
                <!--/Table-->
            </div>
            <!--/Box body-->
            <!--Box footer-->
            <div class="box-footer">
                <button type="button"class="btn" id="btnVolver">Volver</button>
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
    <script src="{{ URL::asset('js/SSE.js')}}"></script>
@endsection()