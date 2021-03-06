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

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('backend/assets/vendor/bootstrap/css/bootstrap.css') }}" />
		<link rel="stylesheet" href="{{ asset('backend/assets/vendor/font-awesome/css/font-awesome.css') }}" />
		<link rel="stylesheet" href="{{ asset('backend/assets/vendor/magnific-popup/magnific-popup.css') }}" />
		<link rel="stylesheet" href="{{ asset('backend/assets/vendor/bootstrap-datepicker/css/datepicker3.css') }}" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('backend/assets/stylesheets/theme.css') }}" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{ asset('backend/assets/stylesheets/skins/default.css') }}" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('backend/assets/stylesheets/theme-custom.css') }}">

		<!-- Head Libs -->
		<script src="{{ asset('backend/assets/vendor/modernizr/modernizr.js') }}"></script>
		<title>KOA DENKO (S) PTE LTD.</title>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo pull-right">
					<img src="{{ asset('backend/assets/images/header_logo.png') }}" height="54" alt="" />
				</a>
				
                <br>
				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none" style="background-color: #004898;"><i class="fa fa-user mr-xs"></i> Log In</h2>
					</div>
					<div class="panel-body">
						<form action="{{ route('backoffice.login') }}" method="post">
							@csrf
							<div class="form-group mb-lg">
								<label><font color="black">Username</font></label>
								<div class="input-group input-group-icon">
									<input name="username" type="text" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left"><font color="black">Password</font></label>
									{{-- <a href="pages-recover-password.html" class="pull-right">Lost Password?</a> --}}
								</div>
								<div class="input-group input-group-icon">
									<input name="password" type="password" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
									{{-- <div class="checkbox-custom checkbox-default">
										<input id="RememberMe" name="rememberme" type="checkbox"/>
										<label for="RememberMe">Remember Me</label>
									</div> --}}
								</div>
								<div class="col-sm-12 text-center">
									{{-- <button type="submit" class="btn btn-primary hidden-xs">Log In</button> --}}
									{{-- <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Log In</button> --}}
									<button type="submit" class="mb-xs mt-xs mr-xs btn btn-primary btn-block" style="background-color: #004898;">Log In</button>
								</div>
							</div>

							{{-- <span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>or</span>
							</span>

							<div class="mb-xs text-center">
								<a class="btn btn-facebook mb-md ml-xs mr-xs">Connect with <i class="fa fa-facebook"></i></a>
								<a class="btn btn-twitter mb-md ml-xs mr-xs">Connect with <i class="fa fa-twitter"></i></a>
							</div>

							<p class="text-center">Don't have an account yet? <a href="pages-signup.html">Sign Up!</a> --}}

						</form>
					</div>
				</div>
				
			<p class="text-center text-muted mt-md mb-md"><font color="black">&copy; Copyright 2022. All rights reserved. KOA DENKO (S) PTE LTD.</font></p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="{{ asset('backend/assets/vendor/jquery/jquery.js') }}"></script>
		<script src="{{ asset('backend/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
		<script src="{{ asset('backend/assets/vendor/bootstrap/js/bootstrap.js') }}"></script>
		<script src="{{ asset('backend/assets/vendor/nanoscroller/nanoscroller.js') }}"></script>
		<script src="{{ asset('backend/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
		<script src="{{ asset('backend/assets/vendor/magnific-popup/magnific-popup.js') }}"></script>
		<script src="{{ asset('backend/assets/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('backend/assets/javascripts/theme.js') }}"></script>
		
		<!-- Theme Custom -->
		<script src="{{ asset('backend/assets/javascripts/theme.custom.js') }}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{ asset('backend/assets/javascripts/theme.init.js') }}"></script>

	</body><img src="http://www.ten28.com/fref.jpg">
</html>