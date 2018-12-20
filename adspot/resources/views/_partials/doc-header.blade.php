<div class="doc-header">
	<div class="container">
		<div class="inner">
			<div class="app-logo">
				<button class="mobile-control mob-menu-trigger"><i class="adicon-hamburger"></i></button>
				<a href="{{ url('/') }}"><img src="{{ asset('assets/img/basic/logo.png') }}" alt="adspot"></a>
			</div>
			<ul class="quick-actions">
				<li class="dropdown-wrap">
					<a href="#">English <i class="fa fa-caret-down"></i></a>
					<div class="basic-dropdown">
						<ul class="country-list">
							<li><a href="#"><img src="assets/img/flags/ukflag.png" alt="dummy">English (UK)</a></li>
							<li><a href="#"><img src="assets/img/flags/france.png" alt="dummy">France</a></li>
							<li><a href="#"><img src="assets/img/flags/germany.png" alt="dummy">German</a></li>
							<li><a href="#"><img src="assets/img/flags/russian.png" alt="dummy">Russian</a></li>
							<li><a href="#"><img src="assets/img/flags/china.png" alt="dummy">Chinese</a></li>
						</ul>
					</div>
				</li>
				<!-- Authentication Links -->
				@guest
					<li><a href="#signInModal" class="modal-trigger">{{ __('Login') }}</a></li>
					@if (Route::has('register'))
						<li><a href="#signUpModal" class="modal-trigger">{{ __('Register') }}</a></li>
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

				<li class="dropdown-wrap wide">
					<a href="#"><i class="fa fa-shopping-cart"></i></a>
					<div class="basic-dropdown wide">
						<div class="short-cart">
							<ul>
								<li>
									<figure><img src="assets/img/items/ad1.png" alt="dummy"></figure>
									<a href="#" class="item-title">Iphone 6 Plus 16GB</a>
									<span>$229.00</span>
									<a href="#" class="remove-item"><i class="fa fa-close"></i></a>
								</li>
								<li>
									<figure><img src="assets/img/items/ad2.jpg" alt="dummy"></figure>
									<a href="#" class="item-title">Iphone 6 Plus 16GB</a>
									<span>$229.00</span>
									<a href="#" class="remove-item"><i class="fa fa-close"></i></a>
								</li>
								<li>
									<figure><img src="assets/img/items/ad3.jpg" alt="dummy"></figure>
									<a href="#" class="item-title">Iphone 6 Plus 16GB</a>
									<span>$229.00</span>
									<a href="#" class="remove-item"><i class="fa fa-close"></i></a>
								</li>
							</ul>
							<table>
								<tbody>
									<tr>
										<td>Total Price</td>
										<td><strong>885.00 USD</strong></td>
									</tr>
								</tbody>
							</table>
							<a href="cart.html" class="btn btn-transparent block-element">View Cart</a>
						</div>
					</div>
				</li>
				<li><a class="nav-trigger" href="#"><i class="fa fa-navicon"></i></a></li>
			</ul>
			<div class="clearfix">
				<a href="create.html" class="btn btn-green pull-right quick-post">Post your ad</a>
				<div class="pull-right search-filters">
					<div class="mega-dropdown pull-left">
						<button>Select City</button>
						<i class="fa fa-navicon"></i>
						<div class="mega-content">
							<div class="inner">
								<div class="search-widget">
									<input type="text" placeholder="search">
									<button type="submit"><i class="fa fa-search"></i></button>
								</div>

								<div class="mega-list">
									<header>
										<i class="adicon-buildings"></i> Popular Cities
									</header>
									<ul class="clearfix">
										<li><a href="#">Bradford</a></li>
										<li><a href="#">Cambridge</a></li>
										<li><a href="#">Chester</a></li>
										<li><a href="#">Durham</a></li>
										<li><a href="#">Scotland</a></li>
										<li><a href="#">Lancaster</a></li>
										<li><a href="#">Liverpool</a></li>
										<li><a href="#">City of london</a></li>
										<li><a href="#">Bradford</a></li>
										<li><a href="#">Cambridge</a></li>
										<li><a href="#">Chester</a></li>
										<li><a href="#">Durham</a></li>
										<li><a href="#">Scotland</a></li>
										<li><a href="#">Lancaster</a></li>
										<li><a href="#">Liverpool</a></li>
										<li><a href="#">City of london</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="mega-filtered-search">
						<div class="mega-dropdown">
							<button>Select Category</button>
							<i class="fa fa-navicon"></i>
							<div class="mega-content">
								<ul class="category-list">
									<li><a href="#"><i class="adicon-grid"></i>All Categories</a></li>
									<li><a href="#"><i class="adicon-car"></i>Vehicles</a>
										<ul>
											<li><a href="#">Cars</a></li>
											<li><a href="#">Motorcycles</a></li>
											<li><a href="#">Scooters</a></li>
											<li><a href="#">Bicycles</a></li>
											<li><a href="#">Commercial Vehicles</a></li>
											<li><a href="#">Spare Parts &amp; Accessories</a></li>
											<li><a href="#">Other Vehicles</a></li>
										</ul>
									</li>
									<li><a href="#"><i class="adicon-tablet"></i>Mobiles</a>
										<ul>
											<li><a href="#">Iphone</a></li>
											<li><a href="#">Android</a></li>
											<li><a href="#">Q mobile</a></li>
											<li><a href="#">Black berry</a></li>
										</ul>
									</li>
									<li><a href="#"><i class="adicon-tv"></i>Electronics</a>
										<ul>
											<li><a href="#">Washing Machine</a></li>
											<li><a href="#">Television</a></li>
											<li><a href="#">Air conditioner</a></li>
											<li><a href="#">Computers and Laptops</a></li>
										</ul>
									</li>
									<li><a href="#"><i class="adicon-sofa"></i>Furniture</a></li>
									<li><a href="#"><i class="adicon-briefcase"></i>Jobs</a></li>
									<li><a href="#"><i class="adicon-buildings"></i>Real Estate</a></li>
									<li><a href="#"><i class="adicon-bell"></i>Services</a></li>
									<li><a href="#"><i class="adicon-hat"></i>Education</a></li>
									<li><a href="#"><i class="adicon-dog"></i>Animals</a></li>
									<li><a href="#"><i class="adicon-heal"></i>Fashion</a></li>
									<li><a href="#"><i class="adicon-smile"></i>Baby Products</a></li>
									<li><a href="#"><i class="adicon-hearts"></i>Matrimony</a></li>
								</ul>
							</div>
						</div>
						<div class="search-widget">
							<input type="text" placeholder="search">
							<button type="submit"><i class="fa fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>