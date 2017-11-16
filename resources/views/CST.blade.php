@extends('hyf.headerDash')

<!-- Titulo del navegador -->
@section('titulo','CONASET')
@section('subtitulo', 'Buscar bus')
<!-- CSS extra -->
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/Carabinero.css') }}">
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
        <h4 class="h4"><a href="">CONASET</a> -> <a href="#">Busqueda bus</a></h4>
    </div>
@endsection()

<!-- Navegación -->
@section('barraDeNavegacion')
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navegación principal</li>
        <li class="active treeview menu-open">
            <a href="#"><span>Busqueda</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Bus</a></li>
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
            <li><a href="#"><i class="fa fa-circle-o"></i> Exceso de velocidad </a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Flujo de accidentes </a></li>
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
                <h5 class="box-title">Busqueda de bus</h5>
            </div>
            <!--/Box header-->
            <!--Box body-->
            <div class="box-body">
            {!! Form::open(['url' => '', 'class' => 'form-horizontal']) !!}
                <div class="form-group">
                    <div class="col-sm-2">
                        {!! Form::select('formatoBusqueda', ['patente'=>'Patente', 'nviaje'=> 'N° viaje'],'patente', ['class'=>'form-control input-sm', 'id'=>'opbus']) !!}
                    </div>
                    <div class="col-sm-8">
                        {!! Form::text('datobusqueda', null, ['class' => 'form-control input-sm', 'id' => 'datobusqueda', 'placeholder' => 'Ingrese dato de busqueda']) !!}
                    </div>
                </div>
                <div class="form-group btnBusqueda">
                    <button type="button" class="btn btn-danger" id="btnB">Buscar</button>
                </div>
            {!! Form::close() !!}
            </div>
            <!--/Box body-->
            <!--Box footer-->
            <div class="box-footer">
            
            </div>
            <!--/Box footer-->
        </div>
        <!--/Box-->
    </div>
    <!--/Container-->
@endsection()

<!-- JS Adicional -->
@section('js')
@endsection()