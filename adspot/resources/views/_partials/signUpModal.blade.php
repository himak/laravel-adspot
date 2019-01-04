<div id="signUpModal" class="modal-container">
	<a href="#" class="modal-overlay"> click to close modal</a>
	<div class="inner">
		<button class="close_modal"><i class="fa fa-remove"></i></button>
		<div class="social_login_opt">
			<div>
				<div class="opt-navigator dropdown-wrap">
					<button>open options</button>
					<div class="basic-dropdown">
						<ul class="social-drop-list">
							<li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i>Google+</a></li>
							<li><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i>Linkedin</a></li>
						</ul>
					</div>
				</div>
				<div class="social-opts">
					<a href="#" class="opt-fb-login active">
						<i class="fa fa-facebook"></i>
						<span>{{ __('Register') }} with facebook</span>
					</a>
					<a href="#" class="opt-gp-login">
						<i class="fa fa-google-plus"></i>
						<span>{{ __('Register') }} with Google+</span>
					</a>
					<a href="#" class="opt-twitter-login">
						<i class="fa fa-twitter"></i>
						<span>{{ __('Register') }} with Twitter</span>
					</a>
					<a href="#" class="opt-instagram-login">
						<i class="fa fa-instagram"></i>
						<span>{{ __('Register') }} with Instagram</span>
					</a>
					<a href="#" class="opt-linkedin-login">
						<i class="fa fa-linkedin"></i>
						<span>{{ __('Register') }} with Linkedin</span>
					</a>
				</div>
			</div>
			<span class="split-opt">or</span>
		</div>
		<div class="modal-content">
			<header>
				<h4>We are excited to have you with us!</h4>
				<p>Please enter your details below</p>
			</header>
			<form method="POST" action="{{ route('register') }}">
				@csrf
				<div class="field-block">
					<div class="labeled-input">
						<label>{{ __('Name') }}*</label>
						<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' error' : ' valid' }}" name="name" value="{{ old('name') }}" required autofocus>

						@if ($errors->has('name'))
							<span class="valid-block" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
						@endif
					</div>
				</div>
				<div class="field-block">
					<div class="labeled-input">
						<label>{{ __('E-Mail Address') }}*</label>
						<input id="email" title="Enter your email" type="email" class="form-control{{ $errors->has('email') ? ' error' : ' valid' }}" name="email" value="{{ old('email') }}" required>

						@if ($errors->has('email'))
							<span class="valid-block" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
						@endif
					</div>
				</div>
				{{--<div class="field-block">--}}
					{{--<div class="icon-field">--}}
						{{--<span>+44</span>--}}
						{{--<input type="text" placeholder="Your Contact #">--}}
					{{--</div>--}}
				{{--</div>--}}
				<div class="field-block">
					<div class="labeled-input">
						<label>{{ __('Password') }}*</label>
						<input id="password" title="Password" type="password" class="form-control{{ $errors->has('password') ? ' error' : ' valid' }}" name="password" required>

						@if ($errors->has('password'))
							<span class="valid-block" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
						@endif
					</div>
				</div>
				<div class="field-block">
					<div class="labeled-input">
						<label>{{ __('Confirm Password') }}*</label>
						<input id="password-confirm" title="Confirm Password" type="password" class="form-control {{ $errors->has('password') ? ' error' : ' valid' }}" name="password_confirmation" required>
						@if ($errors->has('password'))
							<span class="valid-block" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
						@endif
					</div>
				</div>
				<button type="submit" class="btn btn-md btn-green block-element">{{ __('Register') }}</button>
				<div class="login-cta text-center"><br>
					By clicking {{ __('Register') }}, you agree to <br>
					<a href="#">our Terms</a> and <a href="#">Privacy Policy</a>.
				</div>
			</form>
		</div>
	</div>
</div>