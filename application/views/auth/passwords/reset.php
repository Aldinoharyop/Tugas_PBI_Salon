
<html>
<head>
<title>About</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Salon Muslimah</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon-->
    <img src="<?php echo base_url() ?>/asset/images/favicon.ico" />


    <!-- WebUI PopOver Plugin -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/webuipopover/jquery.webui-popover.css" />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/css/normalize.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/font/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/libs/materialize/css/materialize.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/css/bootstrap.css" />

    <link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/css/animate.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/libs/sweetalert/sweet-alert.css" />

    <link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/libs/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/libs/owl-carousel/owl.transitions.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/libs/owl-carousel/owl.theme.css" />

    <link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/css/main.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/css/responsive.css" />

    <!-- Choose your default colors -->
    <!-- colors/colorX.css replace X with 1-8 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>asset/materialx/css/colors/color1.css" />

    <script src="<?php echo base_url() ?>asset/materialx/js/html5shiv.js" /></script>
</head>
<body>
    <header id="navigation" class="root-sec white nav">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="nav-inner">
                            <nav class="primary-nav">
                                <div class="clearfix nav-wrapper">
                                    <a href="<?php echo base_url() ?>" class="left brand-logo menu-smooth-scroll" data-section="#home">
                                        <img src="<?php echo base_url() ?>asset/images/logo.jpg" alt="" />
                                    </a>
                                    <a href="#" data-activates="mobile-demo" class="button-collapse">
                                        <i class="mdi-navigation-menu"></i>
                                    </a>
                                    <ul class="right static-menu">

                                        <li>
                                            <a href="<?php echo base_url()?>index.php/About" data-section="#about" class="menu-smooth-scroll">
                                                <i class="fa fa-user fa-fw"></i>Tentang Kami</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url()?>index.php/Service" data-section="#services" class="menu-smooth-scroll">
                                                <i class="fa fa-list fa-fw"></i>Layanan</a>
                                        </li>
                                        <li>
                                            <a href="#" data-section="#bundles" class="menu-smooth-scroll">
                                                <i class="fa fa-list fa-fw"></i>Paket</a>
                                        </li>
                                        <li>
                                            <a href="#" data-section="#testimonial" class="menu-smooth-scroll">
                                                <i class="fa fa-comments fa-fw"></i>Testimonial</a>
                                        </li>
                                        <li>
                                            <a href="#" data-section="#contact" class="menu-smooth-scroll">
                                                <i class="fa fa-phone-square fa-fw"></i>Contact</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('reservation') }}">
                                                <i class="fa fa-handshake-o fa-fw"></i>Reservasi</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-button blog-submenu-init" href="#!" data-activates="dropdown1">
                                                <i class="mdi-navigation-more-vert right"></i>
                                            </a>
                                        </li>
                                    </ul>

                                    <ul class="inline-menu side-nav" id="mobile-demo">

                                        <!-- Mini Profile // only visible in Tab and Mobile -->
                                        <li class="mobile-profile">
                                            <div class="profile-inner">
                                                <div class="pp-container">
                                                    <img src="<?php echo base_url() ?>asset/favicon.ico" alt="" />
                                                </div>
                                                <h3>Az Zahra</h3>
                                                <h5>Muslimah Salon and Spa</h5>
                                            </div>
                                        </li>
                                        <!-- mini profile end-->
                    </ul>
        </header>

        @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>