<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo') | Documento de busqueda</title>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href=" {{ URL::asset('css/adminlte/bootstrap/dist/css/bootstrap.min.css') }} ">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ URL::asset('css/adminlte/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ URL::asset('css/adminlte/Ionicons/css/ionicons.min.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ URL::asset('css/adminlte/jvectormap/jquery-jvectormap.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('css/adminlte/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ URL::asset('css/adminlte/skins/_all-skins.min.css') }}">
  <!--CSS DEL MAPA -->
  <link rel="stylesheet" href="{{ URL::asset('css/map.css') }}">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="{{ URL::asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic') }}">
  @section('css')
  @show

    <div class="wrapper">
        
          <header class="main-header">
        
            <!-- Logo -->
            <a href="index2.html" class="logo">
              <!-- mini logo for sidebar mini 50x50 pixels -->
              <img src="{{ URL::asset('img/user2-160x160.jpg') }}" alt="@yield('imagenDashboard')" class="logo-mini" id="dashboardLogo")>
              <!-- logo for regular state and mobile devices -->
              <!--<span class="logo-lg"><b>SCIT</b></span>-->
              <img src="{{ URL::asset('img/user2-160x160.jpg') }}" alt="@yield('imagenDashboard')" class="logo-lg" id="dashboardLogo")>
            </a>
        
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
              <!-- Sidebar toggle button-->
              <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
              </a>
              <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <!-- Notifications: style can be found in dropdown.less -->
                  <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-bell-o"></i>
                      <span class="label label-warning">5</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="header">Alertas por exceso de velocidad</li>
                      <li>
                        <!-- Dropdown items menú-->
                        <ul class="menu">
                          <li>
                            <a href="#">
                              <i class="fa fa-users text-aqua"></i> Exceso de velocidad 
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="footer"><a href="#">View all</a></li>
                    </ul>
                  </li>
                  <!-- Sidebar derecho perfil-->
                  <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <img src=" {{ URL::asset('img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                      <span class="hidden-xs">Usuario random</span>
                    </a>
                    <ul class="dropdown-menu">
                      <!-- User image -->
                      <li class="user-header">
                      <img src=" {{ URL::asset('img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
        
                        <p>
                          Ricardo Cesped - Chupapico
                          <small>Chupador de pico profesional desde 1997</small>
                        </p>
                      </li>
                      <!-- Menu Body -->
                      <li class="user-body">
                        <div class="row">
                          <div class="col-xs-4 text-center">
                            <a href="#">Followers</a>
                          </div>
                          <div class="col-xs-4 text-center">
                            <a href="#">Sales</a>
                          </div>
                          <div class="col-xs-4 text-center">
                            <a href="#">Friends</a>
                          </div>
                        </div>
                        <!-- /.row -->
                      </li>
                      <!-- Menu Footer-->
                      <li class="user-footer">
                        <div class="pull-left">
                          <a href="#" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="pull-right">
                          <a href="#" class="btn btn-default btn-flat">Sign out</a>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <!-- Control Sidebar Toggle Button -->
                  <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                  </li>
                </ul>
              </div>
        
            </nav>rueba -->
  <link rel="stylesheet" href="{{ URL::asset('css/prueba.css') }}">
</head>
<body>
    

          </header>
          <!-- Left side column. contains the logo and sidebar -->
          <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
              <!-- sidebar menu: : style can be found in sidebar.less -->
                @section('barraDeNavegacion')
                @show
            </section>
            <!-- /.sidebar -->
          </aside>
        
          <!-- Menu de navegación en body -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              @section('headerRuta')
              @show()
            </section>
            <section class="content">
              @section('cuerpa')
              @show
            </section>        

          </div>
          <!-- /.content-wrapper -->
        
        
          <!-- Control Sidebar -->
          <aside class="control-sidebar control-sidebar-dark">
            <!-- Tab panes -->
            <div class="tab-content">
              <!-- Home tab content -->
              <div class="tab-pane" id="control-sidebar-home-tab"></div>
            </div>
          </aside>
         <!-- Add the sidebar's background. This div must be placed
               immediately after the control sidebar -->
          <div class="control-sidebar-bg"></div>
        </div>





<!-- jQuery 3 -->
<script src="{{ URL::asset('js/adminlte/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ URL::asset('js/adminlte/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ URL::asset('js/adminlte/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('js/adminlte/adminlte.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ URL::asset('js/adminlte/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap  -->
<script src="{{ URL::asset('js/adminlte/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ URL::asset('js/adminlte/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ URL::asset('js/adminlte/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ URL::asset('js/adminlte/Chart.js/Chart.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ URL::asset('js/adminlte/dashboard2.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('js/adminlte/demo.js') }}"></script>
<!-- MAP -->
<script src="{{ URL::asset('js/map.js') }}"></script>
<!-- PRUEBA -->
<script src="{{ URL::asset('js/prueba.js') }}"></script>
@section('js')
@show
</body>
</html>