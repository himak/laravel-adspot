@extends('layouts.master')
@section('title', 'Verify Email')


@section('content')

	<div class="breadcrumb">
		<ul>
			<li><a href="{{ url('/') }}">Home</a></li>
			<li>{{ __('Verify Email') }}</li>
		</ul>
	</div>

	<div class="page contextual-page">

		<div class="inner">

			<header class="page-header text-center">
				<h3>{{ __('Verify Your Email Address') }}</h3>
			</header>

			<div class="text-widget pt-50 pb-60">
				<div class="inner">

					@if (session('resent'))
						<div class="alert alert-success" role="alert">
							{{ __('A fresh verification link has been sent to your email address.') }}
						</div>
					@endif

					{{ __('Before proceeding, please check your email for a verification link.') }}
					{{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
				</div>
			</div>

		</div>

	</div>

@endsection
