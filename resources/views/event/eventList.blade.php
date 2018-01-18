@extends('layouts.app') @section('content')
<div class="container">
	<h1>Lista de eventos</h1>
	@foreach( $events as $event)
		@include('event.event', [ 'event' => $event ])
	@endforeach
</div>
@endsection