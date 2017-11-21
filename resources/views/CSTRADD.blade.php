@extends('hyf.headerDash')

<!-- Titulo del navegador -->
@section('titulo','CONASET')
@section('subtitulo', 'Reporte: Accidentes diarios | Detalles')
<!-- CSS extra -->
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.16/b-1.4.2/b-html5-1.4.2/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/EBRADD.css') }}">
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
        <h4 class="h4"><a href="">CONASET</a> -> <a href="#">Reporte: Flujo de accidentes</a> -> <a href="#">Detalle</a></h4>
    </div>
@endsection()

<!-- Navegación -->
@section('barraDeNavegacion')
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">Navegación principal</li>
    <li class="treeview">
        <a href="#"><span>Busqueda</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="/conaset/vistaBus"><i class="fa fa-circle-o"></i>Bus</a></li>
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
    <li class="active treeview menu-open">
        <a href="#">
        <span>Reporte</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
        <li><a href="vistaReporteV"><i class="fa fa-circle-o"></i> Exceso de velocidad </a></li>
        <li class="active"><a href="vistaReporteA"><i class="fa fa-circle-o"></i> Flujo de accidentes </a></li>
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
                <h5 class="box-title">Estadística de accidentes en el día 05-03-2018</h5>
            </div>
            <!--/Box header-->
            <!--Box body-->
            <div class="box-body">
            <h3 class="sub-title">Región Metropolitana</h5>
                <hr>
                    <table class="display" id="accidentesHistorial" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Hora</th>
                                <th>Cantidad de heridos</th>
                                <th>Empresa</th>
                                <th>Patente</th>
                                <th>Cantidad de victimas fatales</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Hora</th>
                                <th>Cantidad de heridos</th>
                                <th>Empresa</th>
                                <th>Patente</th>
                                <th>Cantidad de victimas fatales</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>08:00:05</td>
                                <td>20</td>
                                <td>Empresa 1</td>
                                <td>XX-XX-XX</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>10:02:00</td>
                                <td>2</td>
                                <td>Empresa 1</td>
                                <td>XX-XX-XY</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>13:02:20</td>
                                <td>1</td>
                                <td>Empresa 1</td>
                                <td>XX-XX-YX</td>
                                <td>1</td>
                            </tr>
                        </tbody>
                    </table>
                <hr>
            </div>
            <!--/Box body-->
            <!--Box footer-->
            <div class="box-footer">
            <a href="/conaset/vistaReporteA" id="refBus"><button type="buton" class="btn" id="btnVolver">Volver</button></a>
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
    <script src="{{ URL::asset('js/EBRADD.js') }}"></script>
@endsection()