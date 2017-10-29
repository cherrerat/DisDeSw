@extends('hyf.header1')


@section('body')

    <!-- Navbar -->
    <div class="container navbar">
        <nav class="navbar navbar-light bg-faded background-nav">
            <a href="#" class="nav-right navbar-brand nav-link" data-toggle="modal" data-target=".bd-example-modal-sm" id="signin">Iniciar sesión</a>
        </nav>
    </div>
    <!--/Navbar-->
    <!--Modal-->
    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="model-header">
                    <div class="label-title">
                        <h5 class="modal-title text-center">Inicio de sesión</h5>
                    </div>
                </div>
                <div class="modal-body">
                <hr>
                {!! Form::open(['url' => '']) !!}
                    <div class="form-group">
                        <div class="label-input">
                            {!! Form::label('username', 'Username', ['class' => 'form-control-label']) !!}
                        </div>
                        {!! Form::text('username', null, ['class' => 'form-control inputText', 'id' => 'inputUsername', 'placeholder' => 'Ingrese el username']) !!}
                    </div>
                    <div class="form-group">
                        <div class="label-input">
                            {!! Form::label('password', 'Contraseña', ['class' => 'form-control-label']) !!}
                        </div>
                        {!! Form::password('password', ['class' => 'form-control inputText', 'id' => 'inputPassword', 'placeholder' => 'Ingrese su contraseña']) !!}
                    </div>
                    <hr>
                    <div class="label-input">
                        {!! Form::submit('Ingresar', ['class' => 'btn btn-primary', 'id' => 'btnIngresar']) !!}
                    </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <!--/Modal-->
    <!-- Main -->
    <div class="main align-middle">
		<div class="card rounded align-middle contenedorbusqueda">
            <h2 class="title titulo-centrado">Busqueda de bus</h2>
            <hr>
            {!! Form::open(['route' => 'indexTest','class' => 'form-horizontal'])!!}
            <div class="form-group">
                {!! Form::select('formatoBusqueda', ['nviaje' => 'N° de viaje', 'patente' => 'Patente'], 'patente', ['class' => 'custom-select select-box', 'id' => 'select'])!!}
                {!! Form::text('datobusqueda', null, ['class' => 'form-control inputBus', 'id' => 'datobusqueda', 'placeholder' => 'Ingrese los datos de busqueda'])!!}
            </div>
            <hr>
            {!! Form::submit('Buscar', ['class' => 'btn btn-success buscarBus', 'id' => 'buscarBus']) !!}
            {!! Form::close() !!}
		</div>
		
		<div id="map"></div>

	</div>
    <!--/Main-->
@endsection()