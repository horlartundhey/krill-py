<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">


		<!-- Title -->
		<title> Panel for Admin dashboard....Log in </title>

		
		<!-- Icons css -->
		<link href="{{url('public/panel/assets/css/icons.css')}}" rel="stylesheet">

		<!-- Bootstrap css -->
		<link href="{{url('public/panel/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

		<!--  Right-sidemenu css -->
		<link href="{{url('public/panel/assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

		<!-- P-scroll bar css-->
		<link href="{{url('public/panel/assets/plugins/perfect-scrollbar/p-scrollbar.css')}}" rel="stylesheet" />

		<!-- Sidemenu css -->
		<link rel="stylesheet" href="{{url('public/panel/assets/css/sidemenu.css')}}">

		<!--- Style css --->
		<link href="{{url('public/panel/assets/css/style.css')}}" rel="stylesheet">
		<link href="{{url('public/panel/assets/css/boxed.css')}}" rel="stylesheet">
		<link href="{{url('public/panel/assets/css/dark-boxed.css')}}" rel="stylesheet">

		<!--- Dark-mode css --->
		<link href="{{url('public/panel/assets/css/style-dark.css')}}" rel="stylesheet">

		<!---Skinmodes css-->
		<link href="{{url('public/panel/assets/css/skin-modes.css')}}" rel="stylesheet" />

		<!--- Animations css-->
		<link href="{{url('public/panel/assets/css/animate.css')}}" rel="stylesheet">

	</head>
	<body class="error-page1 main-body bg-light text-dark">		

		<!-- Page -->
		<div class="page">

			<div class="container-fluid">
				<div class="row no-gutter">
					<!-- The image half -->
					<div class="col-md-6 col-lg-6 col-xl-7 d-none d-md-flex bg-primary-transparent">
						<div class="row wd-100p mx-auto text-center">
							<div class="col-md-12 col-lg-12 col-xl-12 my-auto mx-auto wd-100p">
								<img src="{{url('public/panel/assets/img/logi.png')}}" class="my-auto ht-xl-80p wd-md-100p wd-xl-80p mx-auto" alt="logo">
							</div>
						</div>
					</div>
					<!-- The content half -->
					<div class="col-md-6 col-lg-6 col-xl-5 bg-white">
						<div class="login d-flex align-items-center py-2">
							<!-- Demo content-->
							<div class="container p-0">
								<div class="row">
									<div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
										<div class="card-sigin">
											@include('message')
											<div class="mb-5 d-flex">
												<a href="index.html"><img src="{{url('public/panel/assets/img/krillpay-logo.png')}}" class="sign-favicon-a ht-40" alt="logo">												
												</a>												
											</div>
											<div class="card-sigin">
												<div class="main-signup-header">													
													<h5 class="fw-semibold mb-4">log in to continue.</h5>
													<form action="{{url('panel_admin')}}" method="post">
														{{ csrf_field() }}
														<div class="form-group">
															<label>Email</label> 
															<input class="form-control" placeholder="Enter your email" name="email" value="{{old('email')}}" type="text">
															<span style="color: red">{{$errors->first('password')}}</span>
														</div>
														<div class="form-group">
															<label>Password</label> 
															<input class="form-control" placeholder="Enter your password" name="password" type="password">
															<span style="color: red;">{{$errors->first('password')}}</span>
														</div>
														<button class="btn btn-main-primary btn-block" type="submit">Sign In</button>														
													</form>													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- End -->
						</div>
					</div><!-- End -->
				</div>
			</div>

		</div>
		<!-- End Page -->

		<!-- JQuery min js -->
		<script src="{{url('public/panel/assets/plugins/jquery/jquery.min.js')}}"></script>

		<!-- Bootstrap Bundle js -->
		<script src="{{url('public/panel/assets/plugins/bootstrap/js/popper.min.js')}}"></script>
		<script src="{{url('public/panel/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

		<!-- Ionicons js -->
		<script src="{{url('public/panel/assets/plugins/ionicons/ionicons.js')}}"></script>

		<!-- Moment js -->
		<script src="{{url('public/panel/assets/plugins/moment/moment.js')}}"></script>

		<!-- P-scroll js -->
		<script src="{{url('public/panel/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>

		<!-- eva-icons js -->
		<script src="{{url('public/panel/assets/js/eva-icons.min.js')}}"></script>

		<!-- Rating js-->
		<script src="{{url('public/panel/assets/plugins/rating/jquery.rating-stars.js')}}"></script>
		<script src="{{url('public/panel/assets/plugins/rating/jquery.barrating.js')}}"></script>

		<!-- custom js -->
		<script src="{{url('public/panel/assets/js/custom.js')}}"></script>

	</body>
</html>