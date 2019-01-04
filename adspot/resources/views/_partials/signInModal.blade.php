<div id="signInModal" class="modal-container">
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
						<span>Sign in with facebook</span>
					</a>
					<a href="#" class="opt-gp-login">
						<i class="fa fa-google-plus"></i>
						<span>Sign in with Google+</span>
					</a>
					<a href="#" class="opt-twitter-login">
						<i class="fa fa-twitter"></i>
						<span>Sign in with Twitter</span>
					</a>
					<a href="#" class="opt-instagram-login">
						<i class="fa fa-instagram"></i>
						<span>Sign in with Instagram</span>
					</a>
					<a href="#" class="opt-linkedin-login">
						<i class="fa fa-linkedin"></i>
						<span>Sign in with Linkedin</span>
					</a>
				</div>
			</div>
			<span class="split-opt">or</span>
		</div>
		<div class="modal-content">
			<header>
				<h4>Welcome Back!</h4>
				<p>Please enter your details below</p>
			</header>
			<form method="POST" action="{{ route('login') }}">
				@csrf
				<div class="field-block">
					<div class="labeled-input">
						<label>{{ __('E-Mail Address') }}</label>
						<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' error' : ' valid' }}" name="email" value="{{ old('email') }}" autofocus>

						@if ($errors->has('email'))
							<span class="valid-block" role="alert">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
						@endif
					</div>
				</div>
				<div class="field-block">
					<div class="labeled-input">
						<label>{{ __('Password') }}</label>
						<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' error' : ' valid' }}" name="password">

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
							<input type="radio" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
							<label for="remember">{{ __('Remember Me') }}</label>
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
				<div class="login-cta text-center">
					<p>Don't have an account?</p>
					<a href="#">Register here FREE</a>
				</div>
			</form>
		</div>
	</div>
</div>