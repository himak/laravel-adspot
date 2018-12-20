<div class="sliding-nav">
	<a class="close-sliding-nav" href="#">Close nav</a>
	<nav class="slide-nav-list">
		<ul class="parent">
			<!-- Authentication Links -->
			@guest
				<li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
				@if (Route::has('register'))
					<li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
				@endif
			@else
				<li class="dropdown-wrap">
					<a href="#" class="text-normal">
						{{ Auth::user()->name }} <i class="fa fa-caret-down"></i>
					</a>

					<div class="basic-dropdown">
						<ul class="country-list">
							<li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i>&nbsp;&nbsp;Dashboard</a></li>
							<li>
								<a href="{{ route('logout') }}"
								   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
									<i class="fa fa-sign-out"></i>&nbsp;&nbsp;{{ __('Logout') }}
								</a>
							</li>
						</ul>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</div>
				</li>
			@endguest
			{{--<li class="parent">--}}
				{{--<a href="javascript:return;">Demos</a>--}}
				{{--<ul>--}}
					{{--<li><a href="home2.html">Demo1 - Focus</a></li>--}}
					{{--<li><a href="home3.html">Demo2 - Expressive</a></li>--}}
					{{--<li><a href="home4.html">Demo3 - Minimal</a></li>--}}
					{{--<li><a href="home5.html">Demo4 - Fancy</a></li>--}}
				{{--</ul>--}}
			{{--</li>--}}
			{{--<li class="parent">--}}
				{{--<a href="#">Classified</a>--}}
				{{--<ul>--}}
					{{--<li><a href="home-default.html">Home</a></li>--}}
					{{--<li><a href="listing.html">Ads Archive</a></li>--}}
					{{--<li><a href="single.html">Ad Single</a></li>--}}
					{{--<li><a href="create.html">Create Ad</a></li>--}}
					{{--<li><a href="dashboard.html">Dashboard</a></li>--}}
				{{--</ul>--}}
			{{--</li>--}}
			{{--<li class="parent">--}}
				{{--<a href="javascript:return;">Shop</a>--}}
				{{--<ul>--}}
					{{--<li><a href="shop-index.html">Shop Home</a></li>--}}
					{{--<li><a href="shop-listing.html">Archive</a></li>--}}
					{{--<li><a href="shop-single.html">Single</a></li>--}}
					{{--<li><a href="cart.html">Cart</a></li>--}}
					{{--<li><a href="checkout.html">Checkout</a></li>--}}
				{{--</ul>--}}
			{{--</li>--}}
			{{--<li class="parent">--}}
				{{--<a href="javascript:return;">Pages</a>--}}
				{{--<ul>--}}
					{{--<li><a href="about.html">About</a></li>--}}
					{{--<li><a href="blog.html">Blog</a></li>--}}
					{{--<li><a href="blog-single.html">Blog Single</a></li>--}}
					{{--<li><a href="contact.html">Contact</a></li>--}}
					{{--<li><a href="terms.html">Terms</a></li>--}}
				{{--</ul>--}}
			{{--</li>--}}
			{{--<li class="parent">--}}
				{{--<a href="javascript:return;">Shortcodes</a>--}}
				{{--<ul>--}}
					{{--<li><a href="elements-shortcodes.html">Elements</a></li>--}}
					{{--<li><a href="typography.html">Typography</a></li>--}}
					{{--<li><a href="elements-bootstrap.html">Bootstrap Components</a></li><li><a href="buttons.html">Buttons</a></li>--}}
				{{--</ul>--}}
			{{--</li>--}}

		</ul>
	</nav>
</div>