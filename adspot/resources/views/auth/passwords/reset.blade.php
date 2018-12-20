@extends('layouts.master')
@section('title', 'Reset Password')

@section('content')

	<div class="breadcrumb">
		<ul>
			<li><a href="{{ url('/') }}">Home</a></li>
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
						<header class="text-left mb-50">
							<h4>{{ __('Reset Password') }}</h4>
							<p>Please fill in your credentials </p>
						</header>
						<form method="POST" action="{{ route('password.update') }}">
							@csrf

							<input type="hidden" name="token" value="{{ $token }}">

							<div class="field-block">
								<div class="labeled-input">
									<label for="email">{{ __('E-Mail Address') }}</label>

									<input id="email" type="email" title="Enter e-mail address" class="form-control{{ $errors->has('email') ? ' error' : ' valid' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

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
							<div class="field-block">
								<div class="labeled-input">
									<label for="password-confirm">{{ __('Confirm Password') }}</label>
									<input id="password-confirm" title="Enter Password"  type="password" class="form-control{{ $errors->has('password') ? ' error' : ' valid' }}" name="password_confirmation" required>

									@if ($errors->has('password'))
										<span class="valid-block" role="alert">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
									@endif
								</div>
							</div>

							<button class="btn btn-md btn-green block-element" type="submit">{{ __('Reset Password') }}</button>

						</form>
					</div>

				</div>

			</div>

		</div>

	</div>

@endsection
