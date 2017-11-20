@extends('hyf.header1')


@section('body')
    @include('footer')
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
                    <button type="button" class='btn btn-primary' id="btnIngresar">Ingresar</button>
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
            {!! Form::open(['url' => '','class' => 'form-horizontal'])!!}
            <div class="form-group">
                {!! Form::select('formatoBusqueda', ['nviaje' => 'N° de viaje', 'patente' => 'Patente'], 'patente', ['class' => 'custom-select select-box', 'id' => 'select'])!!}
                {!! Form::text('datobusqueda', null, ['class' => 'form-control inputBus', 'id' => 'datobusqueda', 'placeholder' => 'Ingrese los datos de busqueda'])!!}
            </div>
            <hr>
            <button type="button" class="btn btn-success buscarBus" id="buscarBus">Buscar</button>
            {!! Form::close() !!}
        </div>
        <button class="btn btn-primary" id="Detalle">Mostrar datos viaje</button>
        <div class="col-md-8 detalle" id="box-datos">
            <h5 class="title titulo-centrado">Detalle del viaje</h2>
            <hr>
            {!! Form::open(['url' => '']) !!}
            <div class="form-group col-md-7 grupo-input">
                {!! Form::label('nombreChofer', 'Nombre chofer ', ['class' => 'form-control-label col-sm-3 ']) !!}
                <div class="col-sm-5">
                    {!! Form::text('nombreChofer','', ['class' => 'form-control input-sm', 'id' => 'nombreChofer', 'readonly']) !!}
                </div>
            </div>
            <div class="form-group col-md-7 grupo-input">
                {!! Form::label('runChofer', 'Run chofer ', ['class' => 'form-control-label col-sm-3 ']) !!}
                <div class="col-sm-5">
                    {!! Form::text('runChofer',null, ['class' => 'form-control input-sm', 'id' => 'runChof', 'readonly']) !!}
                </div>
            </div>
            <div class="form-group col-md-7 grupo-input">
                {!! Form::label('hi', 'Hora inicio viaje', ['class' => 'form-control-label col-sm-3'] ) !!}
                <div class="col-sm-5">
                    {!! Form::text('hi', null, ['class' => 'input-sm form-control', 'id' => 'horarioInicio', 'readonly'])!!}
                </div>
            </div>
            <div class="form-group col-md-7 grupo-input">
                {!! Form::label('hf', 'Hora final viaje', ['class' => 'form-control-label col-sm-3'])!!}
                <div class="col-sm-5">
                    {!! Form::text('hf', null, ['class' => 'datosViaje form-control', 'id' => 'horarioFinal', 'readonly'])!!}
                </div>
            </div>
            <div class="col-md-7 grupo-input">
                {!! Form::label('allegada', 'Anden de llegada', ['class' => 'form-control-label col-sm-3'])!!}
                <div class="col-sm-5">
                    {!! Form::text('allegada', null, ['class' => 'andenLlegada form-control', 'id' => 'andenDestino', 'readonly'])!!}
                </div>
            </div>
            <div class="col-md-7 grupo-input">
                <button type="button" class="btn btn-danger" id="btnVolver">Buscar de nuevo</button>
            </div>
            {!! Form::close() !!}
        </div>
		<div id="map"></div>

	</div>
    <!--/Main-->
@endsection()