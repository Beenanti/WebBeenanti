<!doctype html>
<html class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <link href="{{asset('asset/img/gallery/logo.png.png')}}" rel="icon">
    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/magnific-popup/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-datepicker/css/datepicker3.css')}}" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('assets/stylesheets/theme.css')}}" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('assets/stylesheets/skins/default.css')}}" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/stylesheets/theme-custom.css')}}">

    <!-- Head Libs -->
    <script src="{{asset('assets/vendor/modernizr/modernizr.js')}}"></script>

</head>


<body>

    @if(session()->has('message'))

    @endif
    <!-- start: page -->
    <section class="body-sign">
        <div class="center-sign">
            <a href="/" class="logo pull-left">
                <img src="assets/images/logo_beenanti.png" height="100" alt="Porto Admin" />
            </a>
            <div class="panel panel-sign">
                <div class="panel-title-sign mt-xl text-right">
                    <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Register</h2>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal form-bordered" action="/registerUser" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="nama">Nama</label>
                            <div class="col-md-6">
                                <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama Lengkap" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="email">E-Mail</label>
                            <div class="col-md-6">
                                <section class="form-group-vertical">
                                    <input required class="form-control" type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                                </section>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="password">Password</label>
                            <div class="col-md-6">
                                <section class="form-group-vertical">
                                    <input required class="form-control last" type="password" name="password" id="password" placeholder="Password">
                                </section>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="conf_password">Konfirmasi Password</label>
                            <div class="col-md-6">
                                <section class="form-group-vertical">
                                    <input required class="form-control last" type="password" name="conf_password" id="conf_password" placeholder="Konfirmasi Password">
                                </section>
                            </div>
                        </div>
                        @if(session()->has('failed'))
                        <p class="alert alert-danger">{{session('failed')}}</p>
                        @endif

                        <div class="row">
                            <div class="col-sm-9 col-sm-offset-7">
                                <button type="submit" class="btn btn-dark hidden-xs">Submit</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <p class="text-center text-muted mt-md mb-md">&copy; Copyright Beenanti.id 2023. All rights reserved.</p>
        </div>
    </section>
    <!-- end: page -->

    <!-- Vendor -->
    <script src="{{asset('assets/vendor/jquery/jquery.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/vendor/nanoscroller/nanoscroller.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('assets/vendor/magnific-popup/magnific-popup.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{asset('assets/javascripts/theme.js')}}"></script>

    <!-- Theme Custom -->
    <script src="{{asset('assets/javascripts/theme.custom.js')}}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{asset('assets/javascripts/theme.init.js')}}"></script>
    @include('sweetalert::alert')

</body><img src="http://www.ten28.com/fref.jpg">

</html>