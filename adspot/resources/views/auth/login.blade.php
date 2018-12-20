@extends('layouts.master')
@section('title', 'Login')


@section('content')

	<div class="breadcrumb">
		<ul>
			<li><a href="{{ url('/') }}">Home</a></li>
			<li>{{ __('Login') }}</li>
		</ul>
	</div>

	<div class="page contextual-page">

		<div class="inner">

			<header class="page-header text-center">
				<h3>{{ __('Login') }}</h3>
			</header>

			<div class="row pt-50 pb-60">

				<div class="col-xs-12 col-sm-6 pull-right mb-50">
					<div class="account-access-option">
						<header class="text-left mb-50">
							<h4>Login with your social accounts</h4>
							<p>Use facebook or Google plus to login</p>
						</header>
						<div class="social_login_opt">
							<div>
								<div class="social-opts all-active">
									<a href="#" class="opt-fb-login">
										<i class="fa fa-facebook"></i>
										<span>Sign in with facebook</span>
									</a>
									<a href="#" class="opt-gp-login">
										<i class="fa fa-google-plus"></i>
										<span>Sign in with Google+</span>
									</a>

								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 pull-right">

					<div class="account-access-option">
						<header class="text-left mb-50">
							<h4>Welcome back!</h4>
							<p>Please fill in your credentials </p>
						</header>
						<form method="POST" action="{{ route('login') }}" id="signInForm" novalidate="novalidate">
							@csrf
							<div class="field-block">
								<div class="labeled-input">
									<label for="email">{{ __('E-Mail Address') }}</label>
									<input id="email" title="Enter e-mail address" minlength="3" type="email" class="form-control{{ $errors->has('email') ? ' error' : ' valid' }}" name="email" value="{{ old('email') }}" required autofocus>

									@if ($errors->has('email'))
										<span class="valid-block" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
									@endif
								</div>
							</div>
							<div class="field-block">
								<div class="labeled-input">
									<label for="password">{{ __('Password') }}</label>
									<input id="password" title="Enter Password"  type="password" class="form-control{{ $errors->has('password') ? ' error' : ' valid' }}" name="password" required>

									@if ($errors->has('password'))
										<span class="valid-block" role="alert">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
									@endif
								</div>
							</div>

							<div class="row login-actions field-block">
								<div class="col-xs-12 col-sm-6">
									<div class="custom-radio">
										<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
										<label for="remember">
											{{ __('Remember Me') }}
										</label>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 xs-text-left text-right">
									@if (Route::has('password.request'))
										<a href="{{ route('password.request') }}">
											{{ __('Forgot Your Password?') }}
										</a>
									@endif
								</div>
							</div>

							<button class="btn btn-md btn-green block-element" type="submit">{{ __('Login') }}</button>

						</form>
					</div>

				</div>

			</div>

		</div>

	</div>

@endsection
