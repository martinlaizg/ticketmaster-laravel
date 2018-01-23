@extends('layouts.app') 
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div>
				<h2>Próximos eventos</h2>
			</div>
			@if( count($events) == 0)
			<div class="alert alert-info">
				No hay próximos eventos
			</div>
			@else
			<div>
				{{ $events->links() }} 
				@foreach($events as $event)
					@include('event.smallEvent', [ 'event' => $event ])
				@endforeach
				{{ $events->links() }}
				</div>
			@endif
		</div>
	</div>
</div>
@endsection