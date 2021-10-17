@extends('admin/layouts/default')
@section('content')

<!-- app-content-->
<div class="app-content  my-3 my-md-5 toggle-content">
	<div class="side-app">
		<div class="bg-white p-3 header-secondary row">
			<div class="col">
				<div class="d-flex">

					<!-- <a class="btn btn-danger" href="#"><i class="fe fe-rotate-cw mr-1 mt-1"></i> Upgrade </a> -->
				</div>
			</div>
			<div class="col col-auto">
				<!-- <a class="btn btn-light mt-4 mt-sm-0" href="#"><i class="fe fe-help-circle mr-1 mt-1"></i>  Support</a> -->
				<a class="btn btn-success mt-4 mt-sm-0" href="{{url('user_profiles/create')}}"><i class="fe fe-plus mr-1 mt-1"></i> Add New</a>
			</div>
		</div>
		@if(session('status'))
		<div class="alert alert-icon alert-success" role="alert">
		  <i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i> {{ session('status') }}
		</div>
		@endif
		<!-- page-header -->
		<div class="page-header">
			<ol class="breadcrumb"><!-- breadcrumb -->
				<li class="breadcrumb-item"><a href="#">User Profile</a></li>
				<li class="breadcrumb-item active" aria-current="page">Manage User</li>
			</ol><!-- End breadcrumb -->
			
		</div>
		<!-- End page-header -->

		<!-- row -->

		<div class="card">
			<div class="card-header">
				<div class="card-title">Manage User</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="example3" class="table table-striped table-bordered text-nowrap" >
						<thead>
							<tr>
								<th>First name</th>
								<th>Last name</th>
								<th>Email</th>
								<th>User Name</th>
								<th>Phone Number</th>
								<th>Image</th>
								<th>Status</th>
								<th>Created</th>
							</tr>
						</thead>
						<tbody>
							@forelse ($user_profiles as $user)
								<tr>
									<td>{{ $user->firstname }}</td>
									<td>{{ $user->lastname }}</td>
									<td>{{ $user->email }}</td>
									<td>{{ $user->username }}</td>
									<td>{{ $user->phonenumber }}</td>
									<td>{{ $user->profile_image }}</td>
									<td>{{ $user->status }}</td>
									<td>{{ $user->created_at }}</td>
								</tr>
							@empty
							    <p>No users</p>
							@endforelse


							
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- End app-content-->
@endsection