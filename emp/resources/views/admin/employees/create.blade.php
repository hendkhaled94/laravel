@extends('admin.layouts.app')
@section('content')
	<br>
	<div class="well col-md-8 col-md-offset-2">
			<div class="card-body">
				<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
					@csrf

					<div class="form-group row">
						<label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

						<div class="col-md-6">
							<input id="name" type="text" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" name="fname" value="{{ old('fname') }}" required autofocus>

							@if ($errors->has('fname'))
								<span class="invalid-feedback">
									<strong>{{ $errors->first('fname') }}</strong>
								</span>
							@endif
						</div>
					</div>

					<div class="form-group row">
						<label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

						<div class="col-md-6">
							<input id="name" type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname" value="{{ old('lname') }}" required autofocus>

							@if ($errors->has('lname'))
								<span class="invalid-feedback">
									<strong>{{ $errors->first('lname') }}</strong>
								</span>
							@endif
						</div>
					</div>

					<div class="form-group row">
						<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('User Name') }}</label>

						<div class="col-md-6">
							<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

							@if ($errors->has('name'))
								<span class="invalid-feedback">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
							@endif
						</div>
					</div>

					<div class="form-group row">
						<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

						<div class="col-md-6">
							<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

							@if ($errors->has('email'))
								<span class="invalid-feedback">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
							@endif
						</div>
					</div>

					<div class="form-group row">
						<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

						<div class="col-md-6">
							<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

							@if ($errors->has('password'))
								<span class="invalid-feedback">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
							@endif
						</div>
					</div>

					<div class="form-group row">
						<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

						<div class="col-md-6">
							<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
						</div>
					</div>

					<div class="form-group row">
						<label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

						<div class="col-md-6">
							<input id="password" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" >

							@if ($errors->has('image'))
								<span class="invalid-feedback">
									<strong>{{ $errors->first('image') }}</strong>
								</span>
							@endif
						</div>
					</div>
						<div class="form-group row">
						<label for="job" class="col-md-4 col-form-label text-md-right">{{ __('Job Desc') }}</label>

						<div class="col-md-6">
							<input id="job" type="textarea" class="form-control{{ $errors->has('job') ? ' is-invalid' : '' }}" name="job" value="{{ old('job') }}" required autofocus>

							@if ($errors->has('job'))
								<span class="invalid-feedback">
									<strong>{{ $errors->first('job') }}</strong>
								</span>
							@endif
						</div>
					</div>
					<center>
										<div id="map" style="width:250px;height:250px;"></div>
				</center>
				<input type="hidden" name="location" id="mlocation" >
					<div class="form-group row mb-0">
						<div class="col-md-6 offset-md-4">
							<button type="submit" class="btn btn-primary">
								{{ __('Register') }}
							</button>
						</div>
					</div>
				</form>
			</div>

	</div>
@endsection