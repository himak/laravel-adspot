@extends('layouts.master')
@section('title', 'Home')


@section('content')

	@if (session('status'))
		<div class="alert alert-success" role="alert">
			{{ session('status') }}
		</div>
	@endif

	@include('_partials.cat-boxes')

@endsection


@section('section')

	@include('_partials.section')

@endsection