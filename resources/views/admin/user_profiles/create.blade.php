@extends('admin/layouts/default')
@section('title') Add New User @endsection
@section('style_files')


@endsection
@section('content')

<!-- app-content-->
<div class="side-app">
	<!-- page-header -->
	<div class="page-header">
		<ol class="breadcrumb"><!-- breadcrumb -->
			<li class="breadcrumb-item"><a href="#">User Profile</a></li>
			<li class="breadcrumb-item active" aria-current="page">Add Profile</li>
		</ol><!-- End breadcrumb -->

		<div class="ml-auto">
			<div class="input-group">
				<a class="btn btn-secondary text-white" href="{{ url('user_profiles/') }}"> Back</a>
			</div>
		</div>


	</div>
	<!-- End page-header -->

	<!-- row -->
	<div class="row">
		
		<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
		@if ($errors->any())
		 @foreach ($errors->all() as $error)
		<div class="alert alert-icon alert-danger" role="alert">
		  <i class="fa fa-close mr-2" aria-hidden="true"></i>{{ $error }}
		</div>
		@endforeach
		@endif
			<div class="card">
				<div class="card-header">
				    <h3 class="card-title">Add Profile</h3>
				</div>
				<form action="{{ route('user_profiles.store') }}" method="POST" id="user_profile_form" enctype="multipart/form-data">
				@csrf
					<div class="card-body">
						<div class="row">
							<div class="col-lg-3 col-md-12">
								<div class="form-group">
									<label for="firstname">First Name</label>
									<input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname">
								</div>
							</div>
							<div class="col-lg-3 col-md-12">
								<div class="form-group">
									<label for="lastname">Last Name</label>
									<input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname">
								</div>
							</div>
							<div class="col-lg-3 col-md-12">
								<div class="form-group">
									<label for="username">User Name</label>
									<input type="text" class="form-control" id="username" placeholder="User Name" name="username">
								</div>
							</div>
							<div class="col-lg-3 col-md-12">
								<div class="form-group">
									<label for="email">Email address</label>
									<input type="text" class="form-control" id="email" placeholder="Enter Email Address" name="email">
								</div>
							</div>
						</div>


						<div class="row">
							<div class="col-lg-3 col-md-12">
								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
								</div>
							</div>
							<div class="col-lg-3 col-md-12">
								<div class="form-group">
									<label for="confirm_password">Confirm Password</label>
									<input type="password" class="form-control" id="confirm_password" placeholder="Enter confirm password" name="confirm_password">
								</div>
							</div>
							<div class="col-lg-3 col-md-12">
								<div class="form-group">
									<label for="phonenumber">Phone Number</label>
									<input type="text" class="form-control" id="phonenumber" placeholder="Phone Number" name="phonenumber">
								</div>
							</div>
							<div class="col-lg-3 col-md-12">
								<div class="form-group">
									<label for="role_id">Role</label>
									<select id="role_id" class="form-control" name="role_id">
										<option value="">-- Select --</option>
										<option value="1">Admin</option>
										<option value="2">User</option>
										<option value="3">Mentor</option>
									</select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-3 col-md-12">
								<div class="form-group">
									<label for="country_id">Country</label>
									<select class="form-control" name="country_id" id="country_id">
										<option value="">-- Select --</option>
										@forelse($countries as $country)
										<option value="{{$country->id}}">{{$country->country_code."(".$country->code.")"}}</option>
										@empty
										<option value="">No data found</option>
										@endforelse
									</select>
								</div>
							</div>
							<div class="col-lg-3 col-md-12">
								<div class="form-group">
									<label for="province_id">Province</label>
									<select class="form-control" name="province_id" id="province_id">
									</select>
								</div>
							</div>
							<div class="col-lg-3 col-md-12">
								<div class="form-group">
									<label for="experience_id">Experience</label>
									<select class="form-control" name="experience_id" id="experience_id">
										<option value="">-- Select --</option>
										<option value="1">0-1</option>
										<option value="2">1-3</option>
									</select>
								</div>
							</div>
							<div class="col-lg-3 col-md-12">
								<div class="form-group">
									<div class="form-label">Profile Image</div>
									<div class="custom-file">
										<input type="file" class="custom-file-input" name="profile_image" id="profile_image">
										<label for="profile_image" class="custom-file-label">Choose Profile</label>
									</div>
								</div>
							</div>	
						</div>	

						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="form-group">
									<label for="about">About Me</label>
									<textarea class="form-control" rows="3" name="about" id="about"></textarea>
								</div>
							</div>
						</div>	
					</div>
					<div class="card-footer text-right">
						<button type="submit" class="btn btn-app btn-success mr-2 mt-1 mb-1">
							<i class="fa fa-check-circle"></i> Submit
						</button>
						<a class="btn btn-app btn-gray mr-2 mt-1 mb-1">
							<i class="fa fa-close"></i> Cancel
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- row end -->

</div>
<!-- End app-content-->
@endsection
@section('script_files')
<script type="text/javascript">
	var GETREGION = "{{ route('user_profiles.get_region') }}"; // for region
    var CSRFTOKEN = "{{ csrf_token() }}";
</script>
<script src="{{ asset('assets/js/pages/user_profile.js') }}"></script>
@endsection