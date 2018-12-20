@extends('layouts.master')
@section('title', 'Reset Password')


@section('content')


	<div class="breadcrumb">
		<ul>
			<li><a href="{{ url('/') }}">Home</a></li>
			<li><a href="{{ route('login') }}">{{ __('Login') }}</li></a>
			<li>{{ __('Reset Password') }}</li>
		</ul>
	</div>

	<div class="page contextual-page">

		<div class="inner">

			<header class="page-header text-center">
				<h3>{{ __('Reset Password') }}</h3>
			</header>

			<div class="row pt-50 pb-60">

				<div class="col-xs-12 col-sm-6 col-sm-offset-3">

					<div class="account-access-option">

						@if (session('status'))
							<div class="alert alert-success" role="alert">
								{{ session('status') }}
							</div>
						@endif


						<header class="text-left mb-50">
							<h4>Forgot Your Password?</h4>
							<p>Please fill in your e-mail address </p>
						</header>

						<form method="POST" action="{{ route('password.email') }}">
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

							<button class="btn btn-md btn-green block-element" type="submit">{{ __('Send Password Reset Link') }}</button>

						</form>
					</div>

				</div>

			</div>

		</div>

	</div>

@endsection
