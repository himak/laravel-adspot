@extends('layouts.master')
@section('title', 'Register')


@section('content')

	<div class="breadcrumb">
		<ul>
			<li><a href="{{ url('/') }}">Home</a></li>
			<li>{{ __('Register') }}</li>
		</ul>
	</div>

	<div class="page contextual-page">
		<div class="inner">

			<header class="page-header text-center">
				<h3>{{ __('Register') }}</h3>
			</header>

			<div class="row pt-50 pb-60">

				<div class="col-xs-12 col-sm-6 pull-right mb-50">
					<div class="account-access-option">
						<header class="text-left mb-50">
							<h4>{{ __('Register') }} with your social accounts</h4>
							<p>Use facebook or Google plus to login</p>
						</header>
						<div class="social_login_opt">
							<div>
								<div class="social-opts all-active">
									<a href="#" class="opt-fb-login">
										<i class="fa fa-facebook"></i>
										<span>{{ __('Register') }} with facebook</span>
									</a>
									<a href="#" class="opt-gp-login">
										<i class="fa fa-google-plus"></i>
										<span>{{ __('Register') }} with Google+</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 pull-right">

					<div class="account-access-option">
						<header class="text-left mb-50">
							<h4>We are excited to have you with us!</h4>
							<p>Please enter your details below</p>
						</header>
						<form method="POST" action="{{ route('register') }}">
							@csrf
							<div class="field-block">
								<div class="labeled-input">
									<label for="name">{{ __('Name') }} *</label>
									<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' error' : ' valid' }}" name="name" value="{{ old('name') }}" autofocus>

									@if ($errors->has('name'))
										<span class="valid-block" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
									@endif
								</div>
							</div>
							<div class="field-block">
								<div class="labeled-input">
									<label for="email">{{ __('E-Mail Address') }}*</label>
									<input id="email" title="Enter your email" type="email" class="form-control{{ $errors->has('email') ? ' error' : ' valid' }}" name="email" value="{{ old('email') }}">

									@if ($errors->has('email'))
										<span class="valid-block" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
									@endif
								</div>
							</div>
							{{--<div class="field-block">--}}
								{{--<div class="icon-field wide-element">--}}
									{{--<span>+421</span>--}}
									{{--<input id="su_mobileNumber" type="tel" name="su_mobileNumber" placeholder="e.g. 03987654321">--}}
								{{--</div>--}}
							{{--</div>--}}
							<div class="field-block">
								<div class="labeled-input">
									<label for="password">{{ __('Password') }}*</label>
									<input id="password" title="Password" type="password" class="form-control{{ $errors->has('password') ? ' error' : ' valid' }}" name="password">

									@if ($errors->has('password'))
										<span class="valid-block" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
									@endif
								</div>
							</div>
							<div class="field-block">
								<div class="labeled-input">
									<label for="password-confirm">{{ __('Confirm Password') }}*</label>
									<input id="password-confirm" title="Confirm Password" type="password" class="form-control {{ $errors->has('password') ? ' error' : ' valid' }}" name="password_confirmation">

									@if ($errors->has('password'))
										<span class="valid-block" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
									@endif
								</div>
							</div>
							<button type="submit" class="btn btn-md btn-green block-element">{{ __('Register') }}</button>

							<div class="login-cta text-center"><br>
								By clicking Signup Now, you agree to <br>
								<a href="#">our Terms</a> and <a href="#">Privacy Policy</a>.
							</div>
						</form>
					</div>

				</div>

			</div>

		</div>{{--.inner--}}
	</div>{{--.page .contextual-page --}}
</div>
@endsection
