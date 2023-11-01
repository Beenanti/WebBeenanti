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
	@include('sweetalert::alert')
	<!-- start: page -->
	<section class="body-sign">
		<div class="center-sign">
			<a href="/" class="logo pull-left">
				<img src="assets/images/logo_beenanti.png" height="100" alt="Porto Admin" />
			</a>
			<div class="panel panel-sign">
				<div class="panel-title-sign mt-xl text-right">
					<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Login</h2>
				</div>

				<div class="panel-body">
					<form action="/login" method="POST">
						@csrf
						@if(session()->has('message'))
						<p class="alert alert-success">{{session('message')}}</p>
						@endif
						<div class="form-group mb-lg">
							<label>Email</label>
							<div class="input-group input-group-icon">
								<input name="email" id="email" type="text" value="{{old ('email')}}" class="form-control input-lg @error('email') is-invalid @enderror" required />
								<span class="input-group-addon">
									<span class="icon icon-lg">
										<i class="fa fa-user"></i>
									</span>
								</span>
							</div>
							@error ('email')
							<div class="invalid-feedback">
								{{$message}}
							</div>
							@enderror
						</div>

						<div class="form-group mb-lg">
							<div class="clearfix">
								<label class="pull-left">Password</label>
							</div>
							<div class="input-group input-group-icon">
								<input name="password" id="password" type="password" class="form-control input-lg" required />
								<span class="input-group-addon">
									<span class="icon icon-lg">
										<i class="fa fa-lock"></i>
									</span>
								</span>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-8">
								<div class="checkbox-custom checkbox-default">
									<input hidden id="RememberMe" name="rememberme" type="checkbox" />
									<label hidden for="RememberMe">Remember Me</label>
								</div>
							</div>
							<div class="col-sm-4 text-right">
								<button type="submit" class="btn btn-dark hidden-xs">Login</button>
								<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Login</button>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 text-center">
								<p>Belum memiliki akun? <a href="/register-userweb">Register</a></p>
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

</body><img src="http://www.ten28.com/fref.jpg">

</html>