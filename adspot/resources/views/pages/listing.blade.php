@extends('layouts.master')
@section('title', 'Adspot')


@section('content')

	<div class="breadcrumb">
		<ul>
			<li><a href="{{ url('/') }}">Home</a></li>
			<li><a href="#">Mobiles</a></li>
			<li><a href="#">Smart Phones</a></li>
			<li>
				<span>Apple Iphone <a href="#"><i class="fa fa-close"></i></a></span>
				<span>Iphone 6 <a href="#"><i class="fa fa-close"></i></a></span>
				<span>Clear All <a href="#"><i class="fa fa-close"></i></a></span>
			</li>
		</ul>
	</div>

	<header class="heading text-bold">
		<h2>Used Iphone 6 Plus 16GB In Melbourne</h2>
		<h4>482 Ads found in Melbourne</h4>
	</header>

	<div class="listing-actions text-right clearfix" data-target="#items-listing-area">
		<div class="inner">
			<div class="button-action">
				<span>Ads With Photos</span>
				<a href="#" class="active"><i class="fa"></i></a>
			</div>
			<div class="layout-action">
				<a href="#" class="active">
					<i class="fa fa-bars"></i>
					<span class="tooltip">List layout</span>
				</a>
				<a href="#">
					<i class="fa fa-th"></i>
					<span class="tooltip">Grid layout</span>
				</a>
			</div>
			<div class="search-action">
				<a href="#"><i class="fa fa-star-o"></i>
					<span class="tooltip">Save search</span>
				</a>
			</div>
			<div class="sort-action">
				<i class="fa"></i>
				<span>Recently Published</span>
				<ul>
					<li><a href="#">Price Low to High</a></li>
					<li><a href="#">Price High to Low</a></li>
					<li><a href="#">Price High to Low</a></li>
					<li><a href="#">Recently Published</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="listing-area clearfix">
		<div class="listing-filters">
			<div class="listing-filter-block">
				<header>
					<h6>Brand Name</h6>
					<a class="trigger-filter-block" href="#"><i class="fa fa-navicon"></i></a>
				</header>
				<div class="inner">
					<div class="search-widget">
						<input type="text" placeholder="search">
						<button type="submit"><i class="fa fa-search"></i></button>
					</div>
					<div class="filter-options-widget">
						<ul>
							<li class="active"><a href="#">
									<i></i>
									<span>All Brands</span>
								</a></li>
							<li><a href="#">
									<i></i>
									<span>Samsung</span>
								</a></li>
							<li><a href="#">
									<i></i>
									<span>Apple</span>
								</a></li>
							<li><a href="#">
									<i></i>
									<span>Nokia</span>
								</a></li>
							<li><a href="#">
									<i></i>
									<span>Blackberry</span>
								</a></li>
							<li><a href="#">
									<i></i>
									<span>Sony Ericsson</span>
								</a></li>
							<li><a href="#">
									<i></i>
									<span>HTC</span>
								</a></li>
							<li><a href="#">
									<i></i>
									<span>Motorola</span>
								</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="listing-filter-block">
				<header>
					<h6>Model</h6>
					<a class="trigger-filter-block" href="#"><i class="fa fa-navicon"></i></a>
				</header>
				<div class="inner">
					<div class="search-widget">
						<input type="text" placeholder="search">
						<button type="submit"><i class="fa fa-search"></i></button>
					</div>
					<div class="filter-options-widget">
						<ul>
							<li class="active"><a href="#">
									<i></i>
									<span>All Models</span>
								</a></li>
							<li><a href="#">
									<i></i>
									<span>Samsung</span>
								</a></li>
							<li><a href="#">
									<i></i>
									<span>Apple</span>
								</a></li>
							<li><a href="#">
									<i></i>
									<span>Nokia</span>
								</a></li>
							<li><a href="#">
									<i></i>
									<span>Blackberry</span>
								</a></li>
							<li><a href="#">
									<i></i>
									<span>Sony Ericsson</span>
								</a></li>
							<li><a href="#">
									<i></i>
									<span>HTC</span>
								</a></li>
							<li><a href="#">
									<i></i>
									<span>Motorola</span>
								</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="listing-filter-block">
				<header>
					<h6>Price Range</h6>
					<a class="trigger-filter-block" href="#"><i class="fa fa-navicon"></i></a>
				</header>
				<div class="inner">
					<div class="range-widget">
						<div class="range-inputs">
							<input type="text" placeholder="From">
							<input type="text" placeholder="To">
						</div>
						<button type="submit"><i class="fa fa-search"></i></button>
					</div>
				</div>
			</div>

		</div>
		<div id="items-listing-area" class="items-list">

			@forelse($ads as $ad)

				<article class="item-spot @if ($ad->featured) {{ 'featured' }} @endif" id="ad-{{ $ad->id }}">
					<a href="{{ route('ads.show', ['ad' => $ad->id]) }}" class="imgAsBg" style="background-image: url(&quot;assets/img/items/ad2.jpg&quot;);">
						<img src="assets/img/items/ad2.jpg" alt="dummy data">
					</a>
					<div class="item-content">
						<header>
							<h4><a href="{{ route('ads.show', ['ad' => $ad->id]) }}">{{ $ad->title }}</a></h4>
							<div class="breadcrumb">
								<ul>
									<li><a href="#">Mobile Phones</a></li>
									<li><a href="#">Apple</a></li>
								</ul>
							</div>
							<ul class="item-info">
								<li><i class="fa fa-map-marker"></i><a href="#">Melbourne</a></li>
								<li><i class="fa fa-clock-o"></i>{{ $ad->created_at }}</li>
							</ul>
						</header>
						<div class="item-actions text-center">
							<ul class="contact-options">
								<li><a href="#" class="fa fa-envelope tooltip-parent">
										<span class="tooltip">Send Message</span>
									</a></li>
								<li><a href="#" class="fa fa-phone tooltip-parent">
										<span class="tooltip">Mobile Number</span>
									</a></li>
								<li><a href="#" class="fa fa-heart tooltip-parent">
										<span class="tooltip">save ad</span>
									</a></li>
							</ul>
							<div class="price-tag">{{ $ad->price }}&nbsp;€
							</div>
						</div>
						<div class="inner">
							<p>
								{{ $ad->description }}
							</p>
							<a class="view-item" href="{{ route( 'ads.show', [ $ad->id ] ) }}">view ad</a>
						</div>
					</div>
				</article>

			@empty

				<p>We got nothing !! Please add some ads.</p>

			@endforelse

		</div>

	</div>

@endsection