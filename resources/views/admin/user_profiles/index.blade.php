@extends('admin/layouts/default')
@section('title') User Listing @endsection
@section('style_files')

<!-- Data table css -->

<link href="{{ asset('assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/datatable/responsivebootstrap4.min.css') }}" rel="stylesheet" />

@endsection
@section('content')

<div class="side-app">
    <!-- page-header -->
	<div class="page-header">
		<ol class="breadcrumb"><!-- breadcrumb -->
			<li class="breadcrumb-item"><a href="#">User Management </a></li>
			<li class="breadcrumb-item active" aria-current="page">User Listing</li>
		</ol><!-- End breadcrumb -->
		<div class="ml-auto">
			<div class="input-group">
				<a class="btn btn-success mt-sm-0 mr-2" href="{{ url('user_profiles/create') }}"><i class="fe fe-plus mr-1 mt-1"></i> Add New</a>
			</div>
		</div>
	</div>
	<!-- End page-header -->

	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12">
			<div class="card">
				<div class="card-header custom-header">
					<div>
						<h3 class="card-title">User Management</h3>
					</div>
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
								<th>Action</th>
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
									<td>
										<div class="align-top">
											<a class="btn btn-sm btn-success badge" href="{{ url('user_profiles/'.$user->id) }}/edit" type="button"><i class="fa fa-pencil"></i></a>
											<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-toggle="modal" type="button"><i class="fa fa-eye"></i></button>
											<button class="btn btn-sm btn-danger badge" type="button"><i class="fa fa-trash"></i></button>
										</div>
									</td>
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

</div><!--End side app-->
@endsection

@section('script_files')

<!-- Data tables js-->
<script src="{{ asset('assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/datatable.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/datatable-2.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
@endsection