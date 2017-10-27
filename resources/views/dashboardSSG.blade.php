@extends('hyf.headerDash')

<!-- Titulo del navegador -->
@section('titulo','Super Usuario')
@section('subtitulo', 'Gestor de cuentas')
<!-- CSS extra -->
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.16/b-1.4.2/b-html5-1.4.2/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://nightly.datatables.net/buttons/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/SSG.css') }}">
@endsection()

<!-- Usuario -->
@section('nombreUsuario', 'Joe Doe')
@section('institucion', 'Super usuario')

<!-- Ruta de navegación en body -->
@section('headerRuta')
    <div class="col-md-11 row">
        <h4 class="h4"><a href="">Superusuario</a> -> <a href="#">Listar cuentas</a></h4>
    </div>
@endsection()

<!-- Navegación -->
@section('barraDeNavegacion')
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navegación principal</li>
        <li class="treeview">
            <a href="#">
            <span>Errores</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Historial de errores</a></li>
            </ul>
        </li>
        <li class="active treeview menu-open">
            <a href="">
                <span>Gestor de cuentas</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="active"><a href=""><i class="fa fa-circle-o"></i>Listar cuentas</a></li>
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
                <h5 class="box-title">Cuentas</h5>
            </div>
            <!--/Box header-->
            <!--Box body-->
            <div class="box-body">
                <table class="display" id="cuentasH" cellspacing="0" width="100%">
                    <!-- Head y Footer del table -->
                    <thead>
                        <tr>
                            <th>Institución</th>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Institución</th>
                            <th>Nombre</th>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th>Estado</th>
                        </tr>
                    </tfoot>
                    <!-- /Head y Footer del table-->
                    <!-- Body del table -->
                    <tbody>
                        <tr>
                            <td>CONASET</td>
                            <td>Joe Doe</td>
                            <td>jdoe09</td>
                            <td>jd3ert</td>
                            <td>Activo</td>
                        </tr>
                        <tr>
                            <td>Carabineros de Chile</td>
                            <td>Jane Doe</td>
                            <td>jdoe08</td>
                            <td>jd3r5t</td>
                            <td>Activo</td>
                        </tr>
                        <tr>
                            <td>Carabineros de Chile</td>
                            <td>Juan Perez</td>
                            <td>jperez1</td>
                            <td>jperez12</td>
                            <td>Activo</td>
                        </tr>
                        <tr>
                            <td>CONASET</td>
                            <td>Juan Carlos</td>
                            <td>jcar918</td>
                            <td>jcar131</td>
                            <td>Bloqueado</td>
                        </tr>
                    </tbody>
                    <!-- /Body del table -->
                </table>
                <hr>
                <div class="btn-group">
                    <button class="btn btn-crud" id="btnAgregar">Agregar</button>
                    <button class="btn btn-crud" id="btnEliminar">Eliminar</button>
                    <button class="btn btn-crud" id="btnModificar">Modificar</button>
                </div>
            </div>
            <!--/Box body-->
            <!--Box footer-->
            <div class="box-footer">
                <button type="button" class="btn" id="btnVolver">Volver</button>
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
    <script src="{{ URL::asset('js/SSG.js')}}"></script>
@endsection()