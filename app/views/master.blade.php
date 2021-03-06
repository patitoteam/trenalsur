<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Show me the money</title>

  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,700,600,800,300' rel='stylesheet' type='text/css'>
  <style>
    body {
      font-family: 'Open Sans';
    }
  </style>
  @yield('styles', '')
</head>
<body>
  <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">
        <strong> Show me the money</strong>
        </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <!-- Search input -->
      <!--<form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::check())
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo Auth::user()->email; ?><b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo e(URL::to('proyecto/create')); ?>">Crear proyecto</a></li>
              <li class="divider"></li>
              <li><a href="<?php echo e(URL::to('user/logout')); ?>">Cerrar Sesion</a></li>
          </ul>
        </li>
        @else
        <li><a href="<?php echo e(URL::to('user/login')); ?>">
          <i class="fa fa-sign-in"></i> Ingresar</a></li>
        <li><a href="<?php echo e(URL::to('user/register')); ?>">
          <i class="fa fa-user"></i> Registrar</a></li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
@if(Session::has('message'))
<div class="alert alert-warning alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Success!</strong> {{Session::get('message')}}.
</div>
@endif
@if(Session::has('error'))
<div class="alert alert-error alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Error!</strong> {{Session::get('error')}}.
</div>
@endif
<div style="margin: 16px">
@yield('content')
</div>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
@yield('scripts', '')
</body>
</html>
