@extends('frontend.layouts.main') @section('main-container')


@if(Session::has('error'))
<div class="alert alert-error">
    {{ Session::get('error') }}
</div>
@endif
<!-- Header Close -->

<div class="main-wrapper ">
	<section class="page-title bg-1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="block text-center">
						<span class="text-white">Login</span>
						<h1 class="text-capitalize mb-4 text-lg">Login Form</h1>

						<div class="row">
							<div class="col-lg-6 offset-3 col-md-12 col-sm-12">
                              <form id="login-form" class="login_form" method="post"
									action="{{url('login')}}">
                                @csrf
								
								
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
							<button class="btn btn-main" name="submit" type="submit">Login</button>
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
