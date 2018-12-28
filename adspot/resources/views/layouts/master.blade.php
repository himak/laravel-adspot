<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<!--========================================
    Meta
    ===========================================-->
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('title', 'Adspot')</title>

	<!-- Disable tap highlight on IE -->
	<meta name="msapplication-tap-highlight" content="no">

	<!-- Web Application Manifest -->

	<!-- Add to home screen for Chrome on Android -->
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="application-name" content="xDocs">
	<link rel="icon" sizes="192x192" href="{{ asset('assets/img/basic/chrome-touch-icon-192x192.png') }}">

	<!-- Add to home screen for Safari on iOS -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="Web Starter Kit">
	<link rel="apple-touch-icon" href="{{ asset('assets/img/basic/apple-touch-icon.png') }}">

	<!-- Tile icon for Win8 (144x144 + tile color) -->
	<meta name="msapplication-TileImage" content="{{ asset('assets/img/basic/ms-touch-icon-144x144-precomposed.png') }}">
	<meta name="msapplication-TileColor" content="#55acee">
	<!-- Color the status bar on mobile devices -->
	<meta name="theme-color" content="#55acee">

	<!--========================================
    CSS
    ===========================================-->
	@section('csss')
		<!--3rd party plugins-->
		<link href="{{ asset('assets/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	@show
	<!--custom icons for classified website-->
	<link href="{{ asset('assets/css/adspoticons.css') }}" rel="stylesheet" type="text/css">
	<!--main styles for template-->
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
	<!--put your custom css on the file below-->
	<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css">

</head>
<body class="{{ Request::segment(1) ?: 'home' }}">

	<div class="web-app">

		@include('_partials.doc-header')
		@include('_partials.sliding-nav')
		@include('_partials.mobile-menu-wrap')

		<div class="app-canvas">
			<div class="container">

				@yield('content')

			</div>

			@yield('section')

			@include('_partials.call-to-action')

		</div>

		@include('_partials.doc-footer')

	</div>

	<!--======================================
	Modals
	=======================================-->
	@include('_partials.signInModal')
	@include('_partials.signUpModal')

	@section('scripts')
		<!--========================================
		Javascript
		===========================================-->
		<script src="{{ asset('assets/lib/jquery/dist/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/js/app.js') }}"></script>
	@show


</body>
</html>
