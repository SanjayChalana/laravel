 @extends('frontend.layouts.main') @section('main-container')



<!-- Header Close -->

<div class="main-wrapper ">
	<section class="page-title bg-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block text-center">
						<span class="text-white">Signup</span>
						<h1 class="text-capitalize mb-4 text-lg">Signup Form</h1>

						<div class="row">
							<div class="col-lg-6 offset-3 col-md-12 col-sm-12">
                              <form id="signup-form" class="signup_form" method="post"
									action="{{url('signup')}}">
                                @csrf
									<!-- form message -->
									<div class="row">
										<div class="col-12">
											<div class="alert alert-success contact__msg"
												style="display: none" role="alert">Your message was sent
												successfully.</div>
										</div>
									</div>
									<!-- end message -->
									<div class="form-group">
										<input name="first_name" type="text" class="form-control"
											placeholder="First Name" value="{{old('first_name')}}">
											@error('first_name')
											<div class="alert alert-danger">{{ $message }}</div>
										@enderror
									</div>
									<div class="form-group">
										<input name="last_name" type="text" class="form-control"
											placeholder="Last Name" value="{{old('last_name')}}">
											@error('last_name')
											<div class="alert alert-danger">{{ $message }}</div>
										@enderror
									</div>
									<div class="form-group">
										<input name="email" type="email" class="form-control"
											placeholder="Email Address" value="{{old('email')}}">
											@error('email')
											<div class="alert alert-danger">{{ $message }}</div>
										@enderror
									</div>
									<div class="form-group">
										<input name="password" type="password" class="form-control" placeholder="Password" value="{{ old('password') }}">
										@error('password')
										<div class="alert alert-danger">{{ $message }}</div>
										@enderror
									</div>
									
									<div class="form-group">
										<input name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password" value="{{ old('password_confirmation') }}">
										@error('password_confirmation')
										<div class="alert alert-danger">{{ $message }}</div>
										@enderror
									</div>
									
									<div class="form-group">
										<input name="contact" type="text" class="form-control"
											placeholder="Contact" value="{{old('contact')}}">
											@error('contact')
											<div class="alert alert-danger">{{ $message }}</div>
										@enderror
									</div>
									<button class="btn btn-main" name="submit" type="submit">Register</button>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection
