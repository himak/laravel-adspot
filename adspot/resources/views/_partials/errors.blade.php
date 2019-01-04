@if( count( $errors ) )
	<div class="alert alert-info" role="alert">
		<button class="dismiss-alert"><i class="fa fa-close"></i></button>
		<ul>
			@foreach( $errors->all() as $error )
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif