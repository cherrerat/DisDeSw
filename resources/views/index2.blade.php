@extends('hyf.header1')


@section('body')

    <!-- Navbar -->
    <div class="container navbar">
        <nav class="navbar navbar-inverse bg-inverse">
            <a href="#" class="nav-right" data-toggle="modal" data-target=".bd-example-modal-sm">Iniciar sesión</a>
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
                        {!! Form::text('username', null, ['class' => 'form-group inputText']) !!}
                    </div>
                    <div class="form-group">
                        <div class="label-input">
                            {!! Form::label('password', 'Contraseña', ['class' => 'form-control-label']) !!}
                        </div>
                        {!! Form::password('password', ['class' => 'form-group inputText', 'id' => 'inputPassword']) !!}
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
    <!--Main-->
    <div class="main">
    <!--MAP-->
        <div class="container  containerMap align-middle">
            <div id="Map"></div>
        </div>
    <!--/MAP-->
    </div>
    <!--/Main-->
@endsection()