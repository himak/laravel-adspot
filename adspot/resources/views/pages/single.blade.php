@extends('layouts.master')
@section('title', 'Ad Single')


@section('content')

	<div class="breadcrumb">
		<ul>
			<li><a href="{{ url('/') }}">Home</a></li>
			<li><a href="#">automobiles</a></li>
			<li><a href="#">Cars</a></li>
			<li>{{ $ad->title }}</li>
		</ul>
	</div>

	<div class="item-single row">

		<div class="item-content col-xs-12 col-sm-7 col-md-8">

			<article class="inner">
				<header>
					<ul class="info-icons">
						<li>
							<a href="#" class="fa fa-envelope tooltip-parent">
								<span class="tooltip">Send Message</span>
							</a>
						</li>
						<li>
							<a href="#" class="fa fa-phone tooltip-parent">
								<span class="tooltip">Mobile Number</span>
							</a>
						</li>
						<li>
							<a href="#" class="fa fa-heart tooltip-parent">
								<span class="tooltip">save ad</span>
							</a>
						</li>
					</ul>

					<h1>{{ $ad->title }}</h1>

					<ul class="info-list">
						<li><i class="fa fa-map-marker"></i><a href="#">Melbourne</a></li>
						<li><i class="fa fa-clock-o"></i>
							{{--{{ date( 'd.m.Y', strtotime( $ad->created_at ) ) }}--}}
							{{ $ad->created_at }}
						</li>
						<li><i class="fa fa-bookmark"></i>ID: 13030978</li>
					</ul>
				</header>

				@include('_partials.single.item-content.gallery')

				<div class="quick-info">
					<ul class="clearfix">
						<li>
							<div class="inner clearfix">
								<span class="label">Brand Name</span>
								<span class="desc">Apple</span>
							</div>
						</li>
						<li>
							<div class="inner clearfix">
								<span class="label">Product Model</span>
								<span class="desc">iphone se</span>
							</div>
						</li>
						<li>
							<div class="inner clearfix">
								<span class="label">Release Year</span>
								<span class="desc">2016</span>
							</div>
						</li>
						<li>
							<div class="inner clearfix">
								<span class="label">Condition</span>
								<span class="desc">Used</span>
							</div>
						</li>
						<li>
							<div class="inner clearfix">
								<span class="label">Color</span>
								<span class="desc">silver</span>
							</div>
						</li>
						<li>
							<div class="inner clearfix">
								<span class="label">Located In</span>
								<span class="desc">2016</span>
							</div>
						</li>
					</ul>
				</div>
				<div class="text-widget">
					<header><h4>Product Description</h4></header>
					<div class="inner">
						{{ $ad->description }}
					</div>
				</div>
				<footer>
					<div class="inner row">
						<div class="col-xs-12 col-md-4">
							<span class="item-views"> <i class="fa fa-eye"></i> Ad Views: 4698</span>
						</div>
						<div class="col-xs-12 col-md-8 text-right-md">
							Do you have something to sell? <a href="#">Post Your FREE Ad Today</a>
						</div>
					</div>
				</footer>
			</article>

			@include('_partials.single.item-content.email-alerts')

			@include('_partials.single.item-content.single-similar-items')

		</div>

		<aside class="sidebar col-xs-12 col-sm-5 col-md-4">
			<div class="inner">

				@section('price-widget')
					@include('_partials.single.sidebar.price-widget')
				@show

				@section('number-widget')
					@include('_partials.single.sidebar.number-widget')
				@show

				<div class="user-widget text-center">
					<img src="https://picsum.photos/77/77/?image=1005" alt="asd">
					<h4><a href="#">{{ $ad->user->name }}</a></h4>
					<div>Member Since 2013</div>
					<a href="#" class="link">More Ads</a>
					<ul class="clearfix">
						<li><a class="btn btn-transparent" href="#">Send Message</a></li>
						<li><a class="btn btn-transparent" href="#">Report Ad</a></li>
					</ul>
				</div>

				<div class="share-widget">
					<span>Share This Ad</span>
					<div class="social-links social-bg">
						<ul>
							<li><a href="#" target="_blank" class="fa fa-twitter"></a></li>
							<li><a href="#" target="_blank" class="fa fa-facebook"></a></li>
							<li><a href="#" target="_blank" class="fa fa-google-plus"></a></li>
							<li><a href="#" target="_blank" class="fa fa-instagram"></a></li>
						</ul>
					</div>
				</div>

				@include('_partials.single.sidebar.map-widget')

				@include( '_partials.single.sidebar.check-list-widget')

				@include( '_partials.single.sidebar.sponsor-widget')

			</div>
		</aside>

	</div>

@endsection

@section('csss')
	@parent
	<link href="{{ asset('assets/lib/slick-carousel/slick/slick.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('scripts')
	@parent
	<script src="{{ asset('assets/lib/slick-carousel/slick/slick.min.js') }}"></script>
@endsection