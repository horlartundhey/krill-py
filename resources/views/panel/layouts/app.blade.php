<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="X-UA-Compatible" content="IE=9" />
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content=""/>

		<!-- Title -->
		<title></title>

		<!-- Favicon -->
		<link rel="icon" href="{{url('public/panel/assets//img/brand/favicon.png')}}" type="image/x-icon"/>

		<!-- Icons css -->
		<link href="{{url('public/panel/assets//css/icons.css')}}" rel="stylesheet">

		<!-- Bootstrap css -->
		<link href="{{url('public/panel/assets//plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

		<!--  Owl-carousel css-->
		<link href="{{url('public/panel/assets//plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />

		<!-- P-scroll bar css-->
		<link href="{{url('public/panel/assets//plugins/perfect-scrollbar/p-scrollbar.css')}}" rel="stylesheet" />

		<!--  Right-sidemenu css -->
		<link href="{{url('public/panel/assets//plugins/sidebar/sidebar.css')}}" rel="stylesheet">

		<!-- Sidemenu css -->
		<link rel="stylesheet" href="{{url('public/panel/assets//css/sidemenu.css')}}">

		<!-- Maps css -->
		<link href="{{url('public/panel/assets//plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">

		<!-- style css -->
		<link href="{{url('public/panel/assets//css/style.css')}}" rel="stylesheet">
		<link href="{{url('public/panel/assets//css/style-dark.css')}}" rel="stylesheet">
		<link href="{{url('public/panel/assets//css/boxed.css')}}" rel="stylesheet">
		<link href="{{url('public/panel/assets//css/dark-boxed.css')}}" rel="stylesheet">

		<!---Skinmodes css-->
		<link href="{{url('public/panel/assets//css/skin-modes.css')}}" rel="stylesheet" />

	</head>

	<body class="main-body app sidebar-mini">

        @include('panel.layouts.sidebar')
        @yield('content')
        
		</div>
		<!-- End Page -->

		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

		<!-- JQuery min js -->
		<script src="{{url('public/panel/assets//plugins/jquery/jquery.min.js')}}"></script>

		<!-- Bootstrap Bundle js -->
		<script src="{{url('public/panel/assets//plugins/bootstrap/js/popper.min.js')}}"></script>
		<script src="{{url('public/panel/assets//plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

		<!--Internal  Chart.bundle js -->
		<script src="{{url('public/panel/assets//plugins/chart.js/Chart.bundle.min.js')}}"></script>

		<!-- Ionicons js -->
		<script src="{{url('public/panel/assets//plugins/ionicons/ionicons.js')}}"></script>

		<!-- Moment js -->
		<script src="{{url('public/panel/assets//plugins/moment/moment.js')}}"></script>

		<!--Internal Sparkline js -->
		<script src="{{url('public/panel/assets//plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

		<!-- Moment js -->
		<script src="{{url('public/panel/assets//plugins/raphael/raphael.min.js')}}"></script>

		<!--Internal Apexchart js-->
		<script src="{{url('public/panel/assets//js/apexcharts.js')}}"></script>

		<!-- Rating js-->
		<script src="{{url('public/panel/assets//plugins/rating/jquery.rating-stars.js')}}"></script>
		<script src="{{url('public/panel/assets//plugins/rating/jquery.barrating.js')}}"></script>

		<!--Internal  Perfect-scrollbar js -->
		<script src="{{url('public/panel/assets//plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
		<script src="{{url('public/panel/assets//plugins/perfect-scrollbar/p-scroll.js')}}"></script>

		<!-- Eva-icons js -->
		<script src="{{url('public/panel/assets//js/eva-icons.min.js')}}"></script>

		<!-- right-sidebar js -->
		<script src="{{url('public/panel/assets//plugins/sidebar/sidebar.js')}}"></script>
		<script src="{{url('public/panel/assets//plugins/sidebar/sidebar-custom.js')}}"></script>

		<!-- Sticky js -->
		<script src="{{url('public/panel/assets//js/sticky.js')}}"></script>
		<script src="{{url('public/panel/assets//js/modal-popup.js')}}"></script>

		<!-- Left-menu js-->
		<script src="{{url('public/panel/assets//plugins/side-menu/sidemenu.js')}}"></script>

		<!-- Internal Map -->
		<script src="{{url('public/panel/assets//plugins/jqvmap/jquery.vmap.min.js')}}"></script>
		<script src="{{url('public/panel/assets//plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

		<!--Internal  index js -->
		<script src="{{url('public/panel/assets//js/index.js')}}"></script>

		<!-- Apexchart js-->
		<script src="{{url('public/panel/assets//js/apexcharts.js')}}"></script>
		<script src="{{url('public/panel/assets//js/jquery.vmap.sampledata.js')}}"></script>

		<!-- custom js -->
		<script src="{{url('public/panel/assets//js/custom.js')}}"></script>
		
		@yield('script')

	</body>
</html>