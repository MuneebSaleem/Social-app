<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		

		<!-- Favicon -->
		<link rel="icon" href="assets/images/brand/favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/brand/favicon.ico" />

		<!-- Title -->
		<title>Reinsapp</title>

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

		<!-- Data table css -->
		<link href="{{ asset('assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/plugins/datatable/responsivebootstrap4.min.css') }}" rel="stylesheet" />

		<!--Select2 css -->
		<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />

		<!-- Time picker css-->
		<link href="{{ asset('assets/plugins/time-picker/jquery.timepicker.css') }}" rel="stylesheet" />

		<!-- Date Picker css-->
		<link href="{{ asset('assets/plugins/date-picker/spectrum.css') }}" rel="stylesheet" />

		<!-- File Uploads css-->
        <link href="{{ asset('assets/plugins/fileuploads/css/dropify.css') }}" rel="stylesheet" type="text/css" />

		<!--Mutipleselect css-->
		<link rel="stylesheet" href="{{ asset('assets/plugins/multipleselect/multiple-select.css') }}">

	</head>

	<body class="app sidebar-mini rtl">

		<!--Global-Loader-->
		<div id="global-loader">
			<img src="assets/images/icons/loader.svg" alt="loader">
		</div>

		<div class="page">
			<div class="page-main">

				<!--app-header-->
				<div class="app-header header d-flex">
					<div class="container-fluid">
						<div class="d-flex">
						    <a class="header-brand" href="index.html">
								<img src="assets/images/brand/logo.png" class="header-brand-img main-logo" alt="Hogo logo">
								<img src="assets/images/brand/icon.png" class="header-brand-img icon-logo" alt="Hogo logo">
							</a><!-- logo-->
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
							<a href="#" data-toggle="search" class="nav-link nav-link  navsearch"><i class="fa fa-search"></i></a><!-- search icon -->
							<div class="header-form">
								<form class="form-inline">
									<div class="search-element mr-3">
										<input class="form-control" type="search" placeholder="Search" aria-label="Search">
										<span class="Search-icon"><i class="fa fa-search"></i></span>
									</div>
								</form><!-- search-bar -->
							</div>
							<ul class="nav navbar-nav horizontal-nav header-nav">
								<li class="mega-dropdown nav-item">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
										<i class="fe fe-grid mr-2"></i>UI Kit <i class="fa fa-angle-down ml-1"></i>
									</a>
									<ul class="dropdown-menu mega-dropdown-menu container row p-5">
										<li>
											<div class="row">
												<div class="col-md-4">
													<div class="">
														<div class="card-body p-0 relative">
															<div class="arrow-ribbon">Comming Events</div>
															<img class="" alt="img" src="assets/images/photos/32.jpg">
															<div class="btn-absolute">
																<a class="btn btn-primary btn-pill btn-sm" href="#">More info</a>
																<span id="timer-countercallback1" class="h5 text-white float-right mb-0 mt-1"></span>
															</div>
														</div>
													</div>
												</div>
												<div class="col-2">
													<h4  class="mb-3">Pages</h4>
													<a class="dropdown-item pl-0 pr-0" href="#"><i class="fa fa-angle-double-right text-muted mr-1"></i> Client Support</a>
													<a class="dropdown-item pl-0 pr-0" href="#"><i class="fa fa-angle-double-right text-muted mr-1"></i> About Us</a>
													<a class="dropdown-item pl-0 pr-0" href="#"><i class="fa fa-angle-double-right text-muted mr-1"></i> Calendar</a>
													<a class="dropdown-item pl-0 pr-0" href="#"><i class="fa fa-angle-double-right text-muted mr-1"></i> Add New Pages</a>
													<a class="dropdown-item pl-0 pr-0" href="#"><i class="fa fa-angle-double-right text-muted mr-1"></i> Login Pages</a>
												</div>
												<div class="col-2">
													<h4  class="mb-3">Pages</h4>
													<a class="dropdown-item pl-0 pr-0" href="#"><i class="fa fa-angle-double-right text-muted mr-1"></i> Documentation</a>
													<a class="dropdown-item pl-0 pr-0" href="#"><i class="fa fa-angle-double-right text-muted mr-1"></i> Multi Pages</a>
													<a class="dropdown-item pl-0 pr-0" href="#"><i class="fa fa-angle-double-right text-muted mr-1"></i> Edit Profile</a>
													<a class="dropdown-item pl-0 pr-0" href="#"><i class="fa fa-angle-double-right text-muted mr-1"></i> Mail Settings</a>
													<a class="dropdown-item pl-0 pr-0" href="#"><i class="fa fa-angle-double-right text-muted mr-1"></i> Default Setting</a>
												</div>
												<div class="col-md-4">
													<h4  class="mb-3">Current projects</h4>
													<div class="overflow-hidden">
														<div class="card-body p-0">
															<div class="list-group list-lg-group list-group-flush">
																<a class="list-group-item list-group-item-action overflow-hidden pl-0 pr-0 pb-4" href="#">
																	<div class="d-flex">
																		<img class="avatar-xl br-7 mr-3" src="assets/images/photos/33.jpg" alt="Image description">
																		<div class="media-body">
																			<div class="align-items-center">
																				<h5 class="mb-0">
																					Wordpress project
																				</h5>
																			</div>
																			<div class="mb-2 mt-2">
																				<p class="mb-2">Project Status<span class="float-right text-default">85%</span></p>
																				<div class="progress progress-sm mb-0 h-1">
																					<div class="progress-bar progress-bar-striped progress-bar-animated bg-success w-85"></div>
																				</div>
																			</div>
																		</div>
																	</div>
																</a>
																<a class="list-group-item list-group-item-action overflow-hidden pl-0 pr-0 pt-4" href="#">
																	<div class="d-flex">
																		<img class="avatar-xl br-7 mr-3" src="assets/images/photos/34.jpg" alt="Image description">
																		<div class="media-body">
																			<div class="align-items-center">
																				<h5 class="mb-0">
																					Html project
																				</h5>
																			</div>
																			<div class="mb-2 mt-2">
																				<p class="mb-2">Project Status<span class="float-right text-default">75%</span></p>
																				<div class="progress progress-sm mb-0 h-1">
																					<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary w-75"></div>
																				</div>
																			</div>
																		</div>
																	</div>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
							</ul>
							<ul class="nav header-nav">
								<li class="nav-item dropdown header-option m-2">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
										<i class="fe fe-settings mr-2"></i>Settings
									</a>
									<div class="dropdown-menu dropdown-menu-left">
										<a class="dropdown-item" href="#">Option 1</a>
										<a class="dropdown-item" href="#">Option 2</a>
										<a class="dropdown-item" href="#">Option 3</a>
										<a class="dropdown-item" href="#">Option 4</a>
										<a class="dropdown-item" href="#">Option 5</a>

									</div>
								</li>
							</ul>
							<div class="d-flex order-lg-2 ml-auto header-rightmenu">
								<div class="dropdown">
									<a  class="nav-link icon full-screen-link" id="fullscreen-button">
										<i class="fe fe-maximize-2"></i>
									</a>
								</div><!-- full-screen -->
								<div class="dropdown header-notify">
									<a class="nav-link icon" data-toggle="dropdown" aria-expanded="false">
										<i class="fe fe-bell "></i>
										<span class="pulse bg-success"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
										<a href="#" class="dropdown-item text-center">4 New Notifications</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg bg-green">
												<i class="fe fe-mail"></i>
											</div>
											<div>
												<strong>Message Sent.</strong>
												<div class="small text-muted">12 mins ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg bg-pink">
												<i class="fe fe-shopping-cart"></i>
											</div>
											<div>
												<strong>Order Placed</strong>
												<div class="small text-muted">2  hour ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg bg-blue">
												<i class="fe fe-calendar"></i>
											</div>
											<div>
												<strong> Event Started</strong>
												<div class="small text-muted">1  hour ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg bg-orange">
												<i class="fe fe-monitor"></i>
											</div>
											<div>
												<strong>Your Admin Lanuch</strong>
												<div class="small text-muted">2  days ago</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">View all Notifications</a>
									</div>
								</div><!-- notifications -->
								<div class="dropdown header-user">
									<a class="nav-link leading-none siderbar-link"  data-toggle="sidebar-right" data-target=".sidebar-right">
										<span class="mr-3 d-none d-lg-block ">
											<span class="text-gray-white"><span class="ml-2">Alison</span></span>
										</span>
										<span class="avatar avatar-md brround"><img src="assets/images/users/female/33.png" alt="Profile-img" class="avatar avatar-md brround"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="header-user text-center mt-4 pb-4">
											<span class="avatar avatar-xxl brround"><img src="assets/images/users/female/33.png" alt="Profile-img" class="avatar avatar-xxl brround"></span>
											<a href="#" class="dropdown-item text-center font-weight-semibold user h3 mb-0">Alison</a>
											<small>Web Designer</small>
										</div>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-account-outline "></i> Spruko technologies
										</a>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon  mdi mdi-account-plus"></i> Add another Account
										</a>
										<div class="card-body border-top">
											<div class="row">
												<div class="col-6 text-center">
													<a class="" href=""><i class="dropdown-icon mdi  mdi-message-outline fs-30 m-0 leading-tight"></i></a>
													<div>Inbox</div>
												</div>
												<div class="col-6 text-center">
													<a class="" href=""><i class="dropdown-icon mdi mdi-logout-variant fs-30 m-0 leading-tight"></i></a>
													<div>Sign out</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- profile -->
								<div class="dropdown">
									<a  class="nav-link icon siderbar-link" data-toggle="sidebar-right" data-target=".sidebar-right">
										<i class="fe fe-more-horizontal"></i>
									</a>
								</div><!-- Right-siebar-->
							</div>
						</div>
					</div>
				</div>
				<!--app-header end-->

				<!-- Sidebar menu-->
				<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar toggle-sidebar">
					<div class="app-sidebar__user pb-0">
						<div class="user-body">
							<span class="avatar avatar-xxl brround text-center cover-image" data-image-src="assets/images/users/female/33.png"></span>
						</div>
						<div class="user-info">
							<a href="#" class="ml-2"><span class="text-dark app-sidebar__user-name font-weight-semibold">Jenna Side</span><br>
								<span class="text-muted app-sidebar__user-name text-sm"> Web Designer</span>
							</a>
						</div>
					</div>

					<div class="tab-menu-heading siderbar-tabs border-0  p-0">
						<div class="tabs-menu ">
							<!-- Tabs -->
							<ul class="nav panel-tabs">
								<li class=""><a href="#index1" class="active" data-toggle="tab"><i class="fa fa-home fs-17"></i></a></li>
								<li><a href="#index2" data-toggle="tab"><i class="fa fa-envelope fs-17"></i></a></li>
								<li><a href="#index3" data-toggle="tab"><i class="fa fa-user fs-17"></i></a></li>
								<li><a href="login.html" title="logout"><i class="fa fa-power-off fs-17"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="panel-body tabs-menu-body side-tab-body p-0 border-0 ">
						<div class="tab-content">
							<div class="tab-pane active " id="index1">
								<ul class="side-menu toggle-menu">
									<li class="slide">
										<a class="side-menu__item"  data-toggle="slide" href="#"><i class="side-menu__icon typcn typcn-device-desktop"></i><span class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
											<li><a class="slide-item"  href="index.html"><span>Dashboard 01</span></a></li>
											<li><a class="slide-item" href="index2.html"><span>Dashboard 02</span></a></li>
											<li><a class="slide-item" href="index3.html"><span>Dashboard 03</span></a></li>
											<li><a class="slide-item" href="index4.html"><span>Dashboard 04</span></a></li>
											<li><a class="slide-item" href="index5.html"><span>Dashboard 05</span></a></li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon typcn typcn-th-large-outline"></i><span class="side-menu__label">Apps</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
											<li><a href="cards.html" class="slide-item"> Cards design</a></li>
											<li><a href="cards-image.html" class="slide-item"> Image  Cards design</a></li>
											<li><a href="chat.html" class="slide-item"> Default Chat</a></li>
											<li><a href="notify.html" class="slide-item"> Notifications</a></li>
											<li><a href="sweetalert.html" class="slide-item"> Sweet alerts</a></li>
											<li><a href="rangeslider.html" class="slide-item"> Range slider</a></li>
											<li><a href="scroll.html" class="slide-item"> Content Scroll bar</a></li>
											<li><a href="counters.html" class="slide-item">Counters</a></li>
											<li><a href="loaders.html" class="slide-item"> Loaders</a></li>
											<li><a href="time-line.html" class="slide-item"> Time Line</a></li>
											<li><a href="rating.html" class="slide-item"> Rating</a></li>
										</ul>
									</li>
									<li>
										<a class="side-menu__item" href="widgets.html"><i class="side-menu__icon typcn typcn-arrow-move-outline"></i><span class="side-menu__label">Widgets</span></a>
									</li>
									<li>
										<a class="side-menu__item" href="maps.html"><i class="side-menu__icon typcn typcn-location-outline"></i><span class="side-menu__label">Maps</span></a>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon typcn typcn-chart-pie-outline"></i><span class="side-menu__label">Charts</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
											<li><a href="chart-chartist.html" class="slide-item">Chartist Charts</a></li>
											<li><a href="chart-morris.html" class="slide-item"> Morris Charts</a></li>
											<li><a href="chart-js.html" class="slide-item"> Charts js</a></li>
											<li><a href="chart-peity.html" class="slide-item"> Pie Charts</a></li>
											<li><a href="chart-echart.html" class="slide-item"> Echart Charts</a></li>
											<li><a href="chart-flot.html" class="slide-item"> Flot Charts</a></li>
											<li><a href="chart-high.html" class="slide-item"> High Charts</a></li>
											<li><a href="chart-nvd3.html" class="slide-item"> Nvd3 Charts</a></li>
											<li><a href="chart-dygraph.html" class="slide-item">Dygraph Charts</a></li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon typcn typcn-spanner-outline"></i><span class="side-menu__label">Elements</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
											<li><a href="alerts.html" class="slide-item"> Alerts</a></li>
											<li><a href="buttons.html" class="slide-item"> Buttons</a></li>
											<li><a href="colors.html" class="slide-item"> Colors</a></li>
											<li><a href="avatars.html" class="slide-item"> Avatars</a></li>
											<li><a href="dropdown.html" class="slide-item">Dropdowns</a></li>
											<li><a href="thumbnails.html" class="slide-item"> Thumbnails</a></li>
											<li><a href="mediaobject.html" class="slide-item"> Media Object</a></li>
											<li><a href="list.html" class="slide-item"> List</a></li>
											<li><a href="tags.html" class="slide-item"> Tags</a></li>
											<li><a href="pagination.html" class="slide-item"> Pagination</a></li>
											<li><a href="navigation.html" class="slide-item"> Navigation</a></li>
											<li><a href="typography.html" class="slide-item"> Typography</a></li>
											<li><a href="breadcrumbs.html" class="slide-item"> Breadcrumbs</a></li>
											<li><a href="badge.html" class="slide-item"> Badges</a></li>
											<li><a href="jumbotron.html" class="slide-item"> Jumbotron</a></li>
											<li><a href="panels.html" class="slide-item"> Panels</a></li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon typcn typcn-briefcase"></i><span class="side-menu__label">Advanced UI</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
											<li><a href="modal.html" class="slide-item"> Modal</a></li>
											<li><a href="tooltipandpopover.html" class="slide-item"> Tooltip and popover</a></li>
											<li><a href="progress.html" class="slide-item"> Progress</a></li>
											<li><a href="carousel.html" class="slide-item"> Carousels</a></li>
											<li><a href="accordion.html" class="slide-item"> Accordions</a></li>
											<li><a href="tabs.html" class="slide-item"> Tabs</a></li>
											<li><a href="headers.html" class="slide-item"> Headers</a></li>
											<li><a href="footers.html" class="slide-item">Footers</a></li>
											<li><a href="crypto-currencies.html" class="slide-item"> Crypto-currencies</a></li>
											<li><a href="users-list.html" class="slide-item"> User List</a></li>
											<li><a href="search.html" class="slide-item"> Search page</a></li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon typcn typcn-document"></i><span class="side-menu__label">Forms</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
											<li><a href="form-elements.html" class="slide-item"> Form Elements</a></li>
											<li><a href="form-wizard.html" class="slide-item"> Form Wizard</a></li>
											<li><a href="wysiwyag.html" class="slide-item"> Form Editor</a></li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon  typcn typcn-point-of-interest-outline"></i><span class="side-menu__label">Icons</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
											<li><a href="icons.html" class="slide-item"> Font Awesome</a></li>
											<li><a href="icons2.html" class="slide-item"> Material Design Icons</a></li>
											<li><a href="icons3.html" class="slide-item"> Simple Line Icons</a></li>
											<li><a href="icons4.html" class="slide-item"> Feather Icons</a></li>
											<li><a href="icons5.html" class="slide-item"> Ionic Icons</a></li>
											<li><a href="icons6.html" class="slide-item"> Flag Icons</a></li>
											<li><a href="icons7.html" class="slide-item"> pe7 Icons</a></li>
											<li><a href="icons8.html" class="slide-item"> Themify Icons</a></li>
											<li><a href="icons9.html" class="slide-item">Typicons Icons</a></li>
											<li><a href="icons10.html" class="slide-item">Weather Icons</a></li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon typcn typcn-calendar-outline"></i><span class="side-menu__label">Calendar</span></a>
										<ul class="slide-menu">
											<li><a href="calendar.html" class="slide-item">Default calendar</a></li>
											<li><a href="calendar2.html" class="slide-item">Full calendar</a></li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon typcn typcn-clipboard"></i><span class="side-menu__label">Tables</span></a>
										<ul class="slide-menu">
											<li><a href="tables.html" class="slide-item">Default table</a></li>
											<li><a href="datatable.html" class="slide-item"> Data Tables</a></li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon typcn typcn-cog-outline"></i><span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
											<li><a href="profile.html" class="slide-item"> Profile</a></li>
											<li><a href="editprofile.html" class="slide-item"> Edit Profile</a></li>
											<li><a href="email.html" class="slide-item"> Email</a></li>
											<li><a href="emailservices.html" class="slide-item"> Email Inbox</a></li>
											<li><a href="gallery.html" class="slide-item"> Gallery</a></li>
											<li><a href="about.html" class="slide-item"> About Company</a></li>
											<li><a href="services.html" class="slide-item"> Services</a></li>
											<li><a href="faq.html" class="slide-item"> FAQS</a></li>
											<li><a href="terms.html" class="slide-item"> Terms and Conditions</a></li>
											<li><a href="empty.html" class="slide-item"> Empty Page</a></li>
											<li><a href="construction.html" class="slide-item"> Under Construction</a></li>
											<li><a href="blog.html" class="slide-item"> Blog</a></li>
											<li><a href="invoice.html" class="slide-item"> Invoice</a></li>
											<li><a href="pricing.html" class="slide-item"> Pricing Tables</a></li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon typcn typcn-shopping-cart"></i><span class="side-menu__label">E-Commerce</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
											<li><a href="shop.html" class="slide-item"> Products</a></li>
											<li><a href="shop-des.html" class="slide-item">Product Details</a></li>
											<li><a href="cart.html" class="slide-item"> Shopping Cart</a></li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon typcn typcn-download-outline"></i><span class="side-menu__label">Custom</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
											<li><a href="login.html" class="slide-item"> Login</a></li>
											<li><a href="register.html" class="slide-item"> Register</a></li>
											<li><a href="forgot-password.html" class="slide-item"> Forgot Password</a></li>
											<li><a href="lockscreen.html" class="slide-item"> Lock screen</a></li>
										</ul>
									</li>
									<li class="slide">
										<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon typcn typcn-info-outline"></i><span class="side-menu__label">Error Pages</span><i class="angle fa fa-angle-right"></i></a>
										<ul class="slide-menu">
											<li><a href="400.html" class="slide-item"> 400 Error</a></li>
											<li><a href="401.html" class="slide-item"> 401 Error</a></li>
											<li><a href="403.html" class="slide-item"> 403 Error</a></li>
											<li><a href="404.html" class="slide-item"> 404 Error</a></li>
											<li><a href="500.html" class="slide-item"> 500 Error</a></li>
											<li><a href="503.html" class="slide-item"> 503 Error</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="tab-pane border-top" id="index2">
								<div class="list-group list-group-transparent mb-0 mail-inbox">
									<div class="mt-3 mb-3 ml-3 mr-3 text-center">
										<a href="email.html" class="btn btn-primary btn-block"><i class="typcn typcn-pencil fs-14"></i> <span class="email-text">Compose</span></a>
									</div>
									<a href="emailservices.html" class="list-group-item list-group-item-action d-flex align-items-center active">
										<span class="icon mr-3"><i class="fe fe-inbox"></i></span><span class="email-text">Inbox</span> <span class="ml-auto badge-pill badge badge-success email-text">05</span>
									</a>
									<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
										<span class="icon mr-3"><i class="fe fe-send"></i></span><span class="email-text">Sent Mail</span>
									</a>
									<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
										<span class="icon mr-3"><i class="fe fe-alert-circle"></i></span><span class="email-text">Important</span> <span class="ml-auto badge-pill badge badge-danger email-text">01</span>
									</a>
									<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
										<span class="icon mr-3"><i class="fe fe-star"></i></span><span class="email-text">Starred</span>
									</a>
									<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
										<span class="icon mr-3"><i class="fe fe-file"></i></span><span class="email-text">Drafts</span>
									</a>
									<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
										<span class="icon mr-3"><i class="fe fe-tag"></i></span><span class="email-text">Tags</span>
									</a>
									<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
										<span class="icon mr-3"><i class="fe fe-trash-2"></i></span><span class="email-text"> Trash</span>
									</a>
								</div>
							</div>
							<div class="tab-pane border-top" id="index3">
								<div class="list-group list-group-flush ">
									<form class="form-inline p-4 m-0">
										<div class="search-element">
											<input class="form-control header-search w-100" type="search" placeholder="Search..." aria-label="Search">
											<span class="Search-icon"><i class="fa fa-search"></i></span>
										</div>
									</form>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="assets/images/users/female/12.jpg"><span class="avatar-status bg-green"></span></span>
										</div>
										<div class="user-name">
											<div class="font-weight-semibold">Mozelle Belt</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="assets/images/users/female/21.jpg"></span>
										</div>
										<div class="user-name">
											<div class="font-weight-semibold">Florinda Carasco</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="assets/images/users/female/29.jpg"><span class="avatar-status bg-green"></span></span>
										</div>
										<div class="user-name">
											<div class="font-weight-semibold">Alina Bernier</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="assets/images/users/female/2.jpg"><span class="avatar-status bg-green"></span></span>
										</div>
										<div class="user-name">
											<div class="font-weight-semibold">Zula Mclaughin</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="assets/images/users/male/34.jpg"></span>
										</div>
										<div class="user-name">
											<div class="font-weight-semibold">Isidro Heide</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="assets/images/users/male/12.jpg"><span class="avatar-status bg-green"></span></span>
										</div>
										<div class="user-name">
											<div class="font-weight-semibold">Mozelle Belt</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="assets/images/users/male/21.jpg"></span>
										</div>
										<div class="user-name">
											<div class="font-weight-semibold">Florinda Carasco</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="assets/images/users/male/29.jpg"></span>
										</div>
										<div class="user-name">
											<div class="font-weight-semibold">Alina Bernier</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="assets/images/users/male/2.jpg"></span>
										</div>
										<div class="user-name">
											<div class="font-weight-semibold">Zula Mclaughin</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="assets/images/users/female/14.jpg"><span class="avatar-status bg-green"></span></span>
										</div>
										<div class="user-name">
											<div class="font-weight-semibold">Isidro Heide</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="assets/images/users/male/11.jpg"></span>
										</div>
										<div class="user-name">
											<div class="font-weight-semibold">Florinda Carasco</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="assets/images/users/male/9.jpg"></span>
										</div>
										<div class="user-name">
											<div class="font-weight-semibold">Alina Bernier</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="assets/images/users/male/22.jpg"><span class="avatar-status bg-green"></span></span>
										</div>
										<div class="user-name">
											<div class="font-weight-semibold">Zula Mclaughin</div>
										</div>
									</div>
									<div class="list-group-item d-flex  align-items-center">
										<div class="mr-2">
											<span class="avatar avatar-md brround cover-image" data-image-src="assets/images/users/female/4.jpg"></span>
										</div>
										<div class="user-name">
											<div class="font-weight-semibold">Isidro Heide</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</aside>
				<!--sidemenu end-->

				@yield('content')


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

		<!-- Data tables js-->
		<script src="{{ asset('assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/datatable/datatable.js') }}"></script>
		<script src="{{ asset('assets/plugins/datatable/datatable-2.js') }}"></script>
		<script src="{{ asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>

		<!-- File uploads js -->
		<script src="{{ asset('assets/plugins/fileuploads/js/dropify.js') }}"></script>
		<script src="{{ asset('assets/plugins/fileuploads/js/dropify-demo.js') }}"></script>

		<!--Select2 js -->
		<script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
		<script src="{{ asset('assets/js/select2.js') }}"></script>

		<!--Time Counter js-->
		<script src="{{ asset('assets/plugins/counters/jquery.missofis-countdown.js') }}"></script>
		<script src="{{ asset('assets/plugins/counters/counter.js') }}"></script>

		<!-- Timepicker js -->
		<script src="{{ asset('assets/plugins/time-picker/jquery.timepicker.js') }}"></script>
		<script src="{{ asset('assets/plugins/time-picker/toggles.min.js') }}"></script>

		<!-- Datepicker js -->
		<script src="{{ asset('assets/plugins/date-picker/spectrum.js') }}"></script>
		<script src="{{ asset('assets/plugins/date-picker/jquery-ui.js') }}"></script>
		<script src="{{ asset('assets/plugins/input-mask/jquery.maskedinput.js') }}"></script>

		<!--MutipleSelect js-->
		<script src="{{ asset('assets/plugins/multipleselect/multiple-select.js') }}"></script>
		<script src="{{ asset('assets/plugins/multipleselect/multi-select.js') }}"></script>

		<!-- BoodtrspValidator -->
		<script src="{{ asset('assets/plugins/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
		
		<!-- Custom-charts js-->
		<script src="{{ asset('assets/js/index1.js') }}"></script>

		<!-- Custom js-->
		<script src="{{ asset('assets/js/custom.js') }}"></script>




	</body>
</html>