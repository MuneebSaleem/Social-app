<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="Reinsapp" name="description">
		<meta content="Muneeb" name="author">


		<!-- Favicon -->
		<link rel="icon" href="{{ asset('assets/images/brand/favicon.ico') }}" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/brand/favicon.ico') }}" />

		<!-- Title -->
		<title>@yield('title') | Reinsapp</title>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">

		<!-- Dashboard css -->
		<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="{{ asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />

		<!-- Sidemenu css -->
		<link href="{{ asset('assets/plugins/toggle-sidebar/full-sidemenu-dark.css') }}" rel="stylesheet" />

		<!--Daterangepicker css-->
		<link href="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet" />

		<!-- Rightsidebar css -->
		<link href="{{ asset('assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

		<!-- Sidebar Accordions css -->
		<link href="{{ asset('assets/plugins/accordion1/css/easy-responsive-tabs-dark.css') }}" rel="stylesheet">

		<!-- Owl Theme css-->
		<link href="{{ asset('assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet">

		<!-- Morris  Charts css-->
		<link href="{{ asset('assets/plugins/morris/morris.css') }}" rel="stylesheet" />

		<!---Font icons css-->
		<link href="{{ asset('assets/plugins/iconfonts/plugin.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/plugins/iconfonts/icons.css') }}" rel="stylesheet" />
		<link  href="{{ asset('assets/fonts/fonts/font-awesome.min.css') }}" rel="stylesheet">


		<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/plugins/time-picker/jquery.timepicker.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/plugins/date-picker/spectrum.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/plugins/fileuploads/css/dropify.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/plugins/multipleselect/multiple-select.css') }}" rel="stylesheet" />




		@yield('style_files')

	</head>

	<body class="app sidebar-mini rtl">

		<!--Global-Loader-->
		<div id="global-loader">
			<img src="{{ asset('assets/images/icons/loader.svg') }}" alt="loader">

		</div>

		<div class="page">
			<div class="page-main">


				@include('admin.layouts.header')
				@include('admin.layouts.sidemenu')

                <!-- app-content-->
				<div class="app-content  my-3 my-md-5 toggle-content">
					@yield('content')

					@include('admin.layouts.footer')

				</div>
				<!-- End app-content-->
			</div>
		</div>
		<!-- End Page -->

		<!-- Back to top -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

		<!-- Jquery js-->
		<script src="{{ asset('assets/js/vendors/jquery-3.2.1.min.js') }}"></script>

		<!--Bootstrap.min js-->
		<script src="{{ asset('assets/plugins/bootstrap/popper.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

		<!--Jquery Sparkline js-->
		<script src="{{ asset('assets/js/vendors/jquery.sparkline.min.js') }}"></script>

		<!-- Chart Circle js-->
		<script src="{{ asset('assets/js/vendors/circle-progress.min.js') }}"></script>

		<!-- Star Rating js-->
		<script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>

		<!--Moment js-->
		<script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>

		<!-- Daterangepicker js-->
		<script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

		<!--Side-menu js-->
		<script src="{{ asset('assets/plugins/toggle-sidebar/sidemenu.js') }}"></script>

		<!-- Sidebar Accordions js -->
		<script src="{{ asset('assets/plugins/accordion1/js/easyResponsiveTabs.js') }}"></script>

		<!--Time Counter js-->
		<script src="{{ asset('assets/plugins/counters/jquery.missofis-countdown.js') }}"></script>
		<script src="{{ asset('assets/plugins/counters/counter.js') }}"></script>

		<!-- Custom scroll bar js-->
		<script src="{{ asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js') }}"></script>

		<!--Owl Carousel js -->
		<script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.js') }}"></script>
		<script src="{{ asset('assets/plugins/owl-carousel/owl-main.js') }}"></script>

		<!-- Rightsidebar js -->
		<script src="{{ asset('assets/plugins/sidebar/sidebar.js') }}"></script>

		<!-- Charts js-->
		<script src="{{ asset('assets/plugins/chart/chart.bundle.js') }}"></script>
		<script src="{{ asset('assets/plugins/chart/utils.js') }}"></script>

		<!--Time Counter js-->
		<script src="{{ asset('assets/plugins/counters/jquery.missofis-countdown.js') }}"></script>
		<script src="{{ asset('assets/plugins/counters/counter.js') }}"></script>

		<!--Morris  Charts js-->
		<script src="{{ asset('assets/plugins/morris/raphael-min.js') }}"></script>
		<script src="{{ asset('assets/plugins/morris/morris.js') }}"></script>


		<script src="{{ asset('assets/plugins/fileuploads/js/dropify.js') }}"></script>
		<script src="{{ asset('assets/plugins/fileuploads/js/dropify-demo.js') }}"></script>
		<script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
		<script src="{{ asset('assets/js/select2.js') }}"></script>
		<script src="{{ asset('assets/plugins/counters/jquery.missofis-countdown.js') }}"></script>
		<script src="{{ asset('assets/plugins/counters/counter.js') }}"></script>
		<script src="{{ asset('assets/plugins/time-picker/jquery.timepicker.js') }}"></script>
		<script src="{{ asset('assets/plugins/time-picker/toggles.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/date-picker/spectrum.js') }}"></script>
		<script src="{{ asset('assets/plugins/date-picker/jquery-ui.js') }}"></script>
		<script src="{{ asset('assets/plugins/input-mask/jquery.maskedinput.js') }}"></script>
		<script src="{{ asset('assets/plugins/multipleselect/multiple-select.js') }}"></script>
		<script src="{{ asset('assets/plugins/multipleselect/multi-select.js') }}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"></script>
		<script src="{{ asset('assets/js/index1.js') }}"></script>
		<script src="{{ asset('assets/js/custom.js') }}"></script>
	
		@yield('script_files')
	</body>
</html>