<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar toggle-sidebar">
	<div class="app-sidebar__user pb-0">
		<div class="user-body">
			<span class="avatar avatar-xxl brround text-center cover-image" data-image-src="{{ asset('assets/images/users/female/33.png') }}"></span>
		</div>
		<div class="user-info">
			<a href="#" class="ml-2"><span class="text-dark app-sidebar__user-name font-weight-semibold">Tidaa</span><br>
				<span class="text-muted app-sidebar__user-name text-sm"> Super Admin</span>
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
					<li>
						<a class="side-menu__item" href="#"><i class="side-menu__icon typcn typcn-device-desktop"></i><span class="side-menu__label">Dashboard</span></a>
					</li>
					
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon typcn typcn-th-large-outline"></i><span class="side-menu__label">User Managment</span><i class="angle fa fa-angle-right"></i></a>
						<ul class="slide-menu">
							<li><a href="{{ url('user_profiles/') }}" class="slide-item"> User Account</a></li>
							<!--<li><a href="#" class="slide-item"> Manage User</a></li>-->
						</ul>
					</li>
					<!-- <li>
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
					</li> -->
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
							<span class="avatar avatar-md brround cover-image" data-image-src="../assets/images/users/female/12.jpg"><span class="avatar-status bg-green"></span></span>
						</div>
						<div class="user-name">
							<div class="font-weight-semibold">Mozelle Belt</div>
						</div>
					</div>
					<div class="list-group-item d-flex  align-items-center">
						<div class="mr-2">
							<span class="avatar avatar-md brround cover-image" data-image-src="../assets/images/users/female/21.jpg"></span>
						</div>
						<div class="user-name">
							<div class="font-weight-semibold">Florinda Carasco</div>
						</div>
					</div>
					<div class="list-group-item d-flex  align-items-center">
						<div class="mr-2">
							<span class="avatar avatar-md brround cover-image" data-image-src="../assets/images/users/female/29.jpg"><span class="avatar-status bg-green"></span></span>
						</div>
						<div class="user-name">
							<div class="font-weight-semibold">Alina Bernier</div>
						</div>
					</div>
					<div class="list-group-item d-flex  align-items-center">
						<div class="mr-2">
							<span class="avatar avatar-md brround cover-image" data-image-src="../assets/images/users/female/2.jpg"><span class="avatar-status bg-green"></span></span>
						</div>
						<div class="user-name">
							<div class="font-weight-semibold">Zula Mclaughin</div>
						</div>
					</div>
					<div class="list-group-item d-flex  align-items-center">
						<div class="mr-2">
							<span class="avatar avatar-md brround cover-image" data-image-src="../assets/images/users/male/34.jpg"></span>
						</div>
						<div class="user-name">
							<div class="font-weight-semibold">Isidro Heide</div>
						</div>
					</div>
					<div class="list-group-item d-flex  align-items-center">
						<div class="mr-2">
							<span class="avatar avatar-md brround cover-image" data-image-src="../assets/images/users/male/12.jpg"><span class="avatar-status bg-green"></span></span>
						</div>
						<div class="user-name">
							<div class="font-weight-semibold">Mozelle Belt</div>
						</div>
					</div>
					<div class="list-group-item d-flex  align-items-center">
						<div class="mr-2">
							<span class="avatar avatar-md brround cover-image" data-image-src="../assets/images/users/male/21.jpg"></span>
						</div>
						<div class="user-name">
							<div class="font-weight-semibold">Florinda Carasco</div>
						</div>
					</div>
					<div class="list-group-item d-flex  align-items-center">
						<div class="mr-2">
							<span class="avatar avatar-md brround cover-image" data-image-src="../assets/images/users/male/29.jpg"></span>
						</div>
						<div class="user-name">
							<div class="font-weight-semibold">Alina Bernier</div>
						</div>
					</div>
					<div class="list-group-item d-flex  align-items-center">
						<div class="mr-2">
							<span class="avatar avatar-md brround cover-image" data-image-src="../assets/images/users/male/2.jpg"></span>
						</div>
						<div class="user-name">
							<div class="font-weight-semibold">Zula Mclaughin</div>
						</div>
					</div>
					<div class="list-group-item d-flex  align-items-center">
						<div class="mr-2">
							<span class="avatar avatar-md brround cover-image" data-image-src="../assets/images/users/female/14.jpg"><span class="avatar-status bg-green"></span></span>
						</div>
						<div class="user-name">
							<div class="font-weight-semibold">Isidro Heide</div>
						</div>
					</div>
					<div class="list-group-item d-flex  align-items-center">
						<div class="mr-2">
							<span class="avatar avatar-md brround cover-image" data-image-src="../assets/images/users/male/11.jpg"></span>
						</div>
						<div class="user-name">
							<div class="font-weight-semibold">Florinda Carasco</div>
						</div>
					</div>
					<div class="list-group-item d-flex  align-items-center">
						<div class="mr-2">
							<span class="avatar avatar-md brround cover-image" data-image-src="../assets/images/users/male/9.jpg"></span>
						</div>
						<div class="user-name">
							<div class="font-weight-semibold">Alina Bernier</div>
						</div>
					</div>
					<div class="list-group-item d-flex  align-items-center">
						<div class="mr-2">
							<span class="avatar avatar-md brround cover-image" data-image-src="../assets/images/users/male/22.jpg"><span class="avatar-status bg-green"></span></span>
						</div>
						<div class="user-name">
							<div class="font-weight-semibold">Zula Mclaughin</div>
						</div>
					</div>
					<div class="list-group-item d-flex  align-items-center">
						<div class="mr-2">
							<span class="avatar avatar-md brround cover-image" data-image-src="../assets/images/users/female/4.jpg"></span>
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

