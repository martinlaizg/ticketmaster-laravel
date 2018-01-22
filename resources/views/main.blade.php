@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div>
				<h2>Próximos eventos</h2>
			</div>
			<div class=''>
				@foreach($events as $event)
					@include('event.smallEvent', [ 'event' => $event ])
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection