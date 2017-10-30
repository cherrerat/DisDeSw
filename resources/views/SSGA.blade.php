@extends('hyf.headerDash')

<!-- Titulo del navegador -->
@section('titulo','Superusuario ')
@section('subtitulo', 'Agregar cuenta')
<!-- CSS extra -->
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/SSGA.css') }}">
@endsection()

@section('logoEmpresa')
    <span class="texto-logo">SU</span>
@endsection()

<!-- Usuario -->
@section('nombreUsuario', 'Joe Doe')
@section('institucion', 'Super usuario')

<!-- Ruta de navegación en body -->
@section('headerRuta')
    <div class="col-md-11 row">
        <h4 class="h4"><a href="">Superusuario</a> -> <a href="#">Listar cuentas</a> -> <a href="">Agregar Cuenta</a></h4>
    </div>
@endsection()

<!-- Navegación -->
@section('barraDeNavegacion')
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navegación principal</li>
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
                <h5 class="box-title">Agregar cuenta de usuario</h5>
            </div>
            <!--/Box header-->
            <!--Box body-->
            <div class="box-body">
                {!! Form::open(['url' => '', 'class' => 'form-horizontal']) !!}
                    <div class="form-group col-md-11">
                        {!! Form::label('username','Usuario',['class' => 'form-control-label col-sm-1']) !!}
                        <div class="col-sm-2 input-intermedio">
                            {!! Form::text('username',null, ['class' => 'form-control input-sm inputIntermedio', 'id' => 'username', 'placeholder' => 'Ingrese el username']) !!}
                        </div>
                        {!! Form::label('name','Nombre', ['class' => 'form-control-label col-sm-1']) !!}
                        <div class="col-sm-2">
                            {!! Form::text('name', null, ['class' => 'form-control input-sm', 'id' => 'name', 'placeholder' => 'Ingrese el nombre']) !!}
                        </div>
                    </div>
                    <div class="form-group col-md-11">
                        {!! Form::label('password','Contraseña',['class' => 'form-control-label col-sm-1']) !!}
                        <div class="col-sm-2 input-intermedio">
                            {!! Form::password('password', ['class' => 'form-control input-sm inputIntermedio', 'id' => 'password', 'placeholder' => 'Ingrese la contraseña']) !!}
                        </div>
                        {!! Form::label('institucion','Institución', ['class' => 'form-control-label col-sm-1']) !!}
                        <div class="col-sm-3">
                            {!! Form::select('institucion', ['I1' => 'Carabineros de Chile', 'I2' => 'CONASET', 'I3' => 'Empresa de buses', 'I4' => 'Admin terminal', 'I5' => 'Superusuario'], 'I1', ['class' => 'form-control col-sm-12']) !!}
                        </div>
                    </div>
                    <div class="form-group col-md-11 group-input">
                        {!! Form::label('file','Imagen',['class' => 'form-control-label col-sm-1']) !!}
                        <div class="col-sm-5 input-intermedio">
                            {!! Form::file('image') !!}
                        </div>
                        {!! Form::label('file','Tamaño máximo 4 mb',['class' => 'form-control-label col-sm-3']) !!}
                    </div>
                    <hr>
                    <div class="btn-guardar col-md-11">
                        <button class="btn btn-danger" id="btnGuardar">Guardar</button>
                    </div>
                {!! Form::close() !!}
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
@endsection()