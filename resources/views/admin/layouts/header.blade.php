<!--app-header-->
<div class="app-header header d-flex">
	<div class="container-fluid">
		<div class="d-flex">
		    <a class="header-brand" href="index.html">
				<img src="{{ asset('assets/images/brand/logo.png') }}" class="header-brand-img main-logo" alt="Hogo logo">
				<img src="{{ asset('assets/images/brand/icon.png') }}" class="header-brand-img icon-logo" alt="Hogo logo">
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
			<div class="d-flex order-lg-2 ml-auto header-rightmenu">
				<div class="dropdown">
					<a  class="nav-link icon full-screen-link" id="fullscreen-button">
						<i class="fe fe-maximize-2"></i>
					</a>
				</div><!-- full-screen -->
				<div class="dropdown header-user">
					<a class="nav-link leading-none siderbar-link"  data-toggle="sidebar-right" data-target=".sidebar-right">
						<span class="mr-3 d-none d-lg-block ">
							<span class="text-gray-white"><span class="ml-2">Tidda</span></span>
						</span>
						<span class="avatar avatar-md brround"><img src="{{ asset('assets/images/users/female/33.png') }}" alt="Profile-img" class="avatar avatar-md brround"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
						<div class="header-user text-center mt-4 pb-4">
							<span class="avatar avatar-xxl brround"><img src="{{ asset('assets/images/users/female/33.png') }}" alt="Profile-img" class="avatar avatar-xxl brround"></span>
							<a href="#" class="dropdown-item text-center font-weight-semibold user h3 mb-0">Tidda</a>
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