<div class="mobile-menu-wrap">
	<a href="#" class="closeMobilMenu">close the mobile menu</a>
	<nav class="mobile-menu">
		<div class="search-widget">
			<input type="text" placeholder="search">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
		<ul class="menu-list">
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
			{{--<li><a href="create.html">Create an Ad</a></li>--}}
			{{--<li><a href="dashboard.html">Dashboard</a></li>--}}
			{{--<li><a href="listing.html">Ads Listing Page</a></li>--}}
			{{--<li><a href="how-adspot-works.html">How this works</a></li>--}}
			{{--<li><a href="about.html">About us</a></li>--}}
			{{--<li><a href="contact.html">Contact us</a></li>--}}
			{{--<li><a href="blog.html">Blog</a></li>--}}
			{{--<li><a href="blog-single.html">Blog Single</a></li>--}}
			{{--<li><a href="shop-index.html">Shop Page</a></li>--}}
			{{--<li><a href="shop-listing.html">Shop Archive</a></li>--}}
			{{--<li><a href="cart.html">Cart Page</a></li>--}}
			{{--<li><a href="checkout.html">Checkout Page</a></li>--}}
			{{--<li><a href="elements-shortcodes.html">Checkout Page</a></li>--}}
		</ul>
	</nav>
</div>