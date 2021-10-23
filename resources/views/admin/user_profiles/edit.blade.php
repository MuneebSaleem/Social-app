@extends('admin/layouts/default')
@section('title') Edit User @endsection
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
		
		<div class="col-lg-12 col-xl-4 col-md-12 col-sm-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">My Profile</h3>
					<div class="card-options">
						<a href="#" class="btn btn-primary btn-sm"><i class="si si-pencil mr-1"></i>Change Password</a>
					</div>
				</div>
				<div class="card-body">
					<div class="text-center">
						<div class="userprofile ">
							<div class="userpic  brround"> <img src="/upload/user_profile_image/{{$userProfile->profile_image}}" alt="" class="userpicimg"> </div>
							<h3 class="username mb-2">{{$userProfile->username}}</h3>
							<p class="mb-1">Web Designer, Uk</p>
							<div class="text-center mb-4">
								<span><i class="fa fa-star text-warning"></i></span>
								<span><i class="fa fa-star text-warning"></i></span>
								<span><i class="fa fa-star text-warning"></i></span>
								<span><i class="fa fa-star-half-o text-warning"></i></span>
								<span><i class="fa fa-star-o text-warning"></i></span>
							</div>
							<div class="socials text-center mt-3">
								<a href="" class="btn btn-circle btn-primary ">
								<i class="fa fa-facebook"></i></a> <a href="" class="btn btn-circle btn-danger ">
								<i class="fa fa-google-plus"></i></a> <a href="" class="btn btn-circle btn-info ">
								<i class="fa fa-twitter"></i></a> <a href="" class="btn btn-circle btn-warning "><i class="fa fa-envelope"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<ul class="row text-center clearfix mb-0">
						<li class="col-sm-4">
							<span class="text-dark font-weight-bold">1,345</span>
							<p class="text-muted mb-0">
								<small>Following</small>
							</p>
						</li>
						<li class="col-sm-4">
							<span class="text-dark font-weight-bold">23,456</span>
							<p class="text-muted mb-0">
								<small>Followers</small>
							</p>
						</li>
						<li class="col-sm-4">
							<span class="text-dark font-weight-bold">52,678</span>
							<p class="text-muted mb-0">
								<small>Likes</small>
							</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-lg-12 col-xl-8 col-md-12 col-sm-12">
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
				<form action="{{ route('user_profiles.update',$userProfile->id) }}"
				 method="POST" id="user_profile_form" enctype="multipart/form-data">
				@csrf
				@method('PUT')
					<div class="card-body">
						<div class="row">
							<div class="col-lg-4 col-md-12">
								<div class="form-group">
									<label for="firstname">First Name</label>
									<input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname" value="{{$userProfile->firstname}}">
								</div>
							</div>
							<div class="col-lg-4 col-md-12">
								<div class="form-group">
									<label for="lastname">Last Name</label>
									<input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname" value="{{$userProfile->lastname}}">
								</div>
							</div>
							<div class="col-lg-4 col-md-12">
								<div class="form-group">
									<label for="username">User Name</label>
									<input type="text" class="form-control" id="username" placeholder="User Name" name="username" value="{{$userProfile->username}}">
								</div>
							</div>
							
						</div>

						<div class="row">
							<div class="col-lg-4 col-md-12">
								<div class="form-group">
									<label for="email">Email address</label>
									<input type="text" class="form-control" id="email" placeholder="Enter Email Address" name="email" value="{{$userProfile->email}}">
								</div>
							</div>

							<div class="col-lg-4 col-md-12">
								<div class="form-group">
									<label for="phonenumber">Phone Number</label>
									<input type="text" class="form-control" id="phonenumber" placeholder="Phone Number" name="phonenumber" value="{{$userProfile->phonenumber}}">
								</div>
							</div>

							<div class="col-lg-4 col-md-12">
								<div class="form-group">
									<div class="form-label">Profile Image</div>
									<div class="custom-file">
										<input type="file" class="custom-file-input" name="profile_image" id="profile_image" value="{{$userProfile->profile_image}}">
										<label for="profile_image" class="custom-file-label">Choose Profile</label>
									</div>
									<a href="/upload/user_profile_image/{{$userProfile->profile_image}}" target="_blank">View Profile Image</a>
								</div>
							</div>	

						</div>

						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="form-group">
									<label for="country_id">Country</label>
									<select class="form-control" name="country_id" id="country_id">
										<option selected value="{{$userProfile->country_id}}">{{$userProfile->country_id}}</option>
										<option value="1">Pakistan</option>
										<option value="2">USA</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group">
									<label for="province_id">Province</label>
									<select class="form-control" name="province_id" id="province_id">
										<option selected value="{{$userProfile->province_id}}">{{$userProfile->province_id}}</option>
										<option value="1">Karachi</option>
										<option value="2">Islamabad</option>
									</select>
								</div>
							</div>
						</div>	
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="form-group">
									<label for="experience_id">Experience</label>
									<select class="form-control" name="experience_id" id="experience_id">
										<option selected value="{{$userProfile->experience_id}}">{{$userProfile->experience_id}}</option>
										<option value="1">0-1</option>
										<option value="2">1-3</option>
									</select>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="form-group">
									<label for="status">Status</label>
									<select class="form-control" name="status" id="status">
										<option selected value="{{$userProfile->status }}">{{$userProfile->status==1 ? 'Active' : 'In-Active'  }}</option>
										<option value="1">Active</option>
										<option value="0">In-Active</option>
									</select>
								</div>
							</div>
						</div>	

						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="form-group">
									<label for="about">About Me</label>
									<textarea class="form-control" rows="3" name="about" id="about">{{$userProfile->about}}</textarea>
								</div>
							</div>
						</div>	
					</div>
					<div class="card-footer text-right">
						<button type="submit" class="btn btn-app btn-success mr-2 mt-1 mb-1">
							<i class="fa fa-check-circle"></i> Update
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- row end -->

</div>
<!-- End app-content-->
@endsection


<!-- <script src="{{ asset('assets/js/pages/user_profile.js') }}"></script> -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="application/javascript">
	$(document).ready(function(){

			$("#user_profile_form").bootstrapValidator({
	    fields: {
	        
	        firstname: {
	            validators:{
	                notEmpty:{
	                    message: 'Please Enter First Name'
	                },
	                stringLength: {
	                    min: 3,
	                    max: 12,
	                    message: 'first name must be more than 3 characters long.'
	                },
	            }
	        },
	        password: {
	            validators: {
	                notEmpty: {
	                    message: 'Please enter a password'
	                },
	                identical: {
	                    field: 'password_confirm',
	                    message: 'Password does not match'
	                }
	            }
	        },
	        password_confirm: {
	            validators: {
	                notEmpty: {
	                    message: ' Please enter Confirm password'
	                },
	                identical: {
	                    field: 'password',
	                    message: 'Confirm Password does not match'
	                }
	            }
	        }
	    }
	});
});



</script>