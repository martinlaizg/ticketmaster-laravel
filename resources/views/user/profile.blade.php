@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<br>
		<div class="col-sm-4 right-border">
			<!-- Informacion del usuario -->
			<h2>Bienvenido <br> {{ $user->name }}</h2>
			<hr>
			@include('user.userData', ['user' => $user])
		</div>
		<div class="col-sm-8">
			<!-- Entradas del usuario -->
			<h3>Tus próximas entradas</h3>
			@if( count($tickets) <= 0 )
				<div class="alert alert-info">
					No tienes próximas entradas, puedes comprarlas <a href="{{ action('HomeController@home') }}" class="alert-link">aquí</a>
				</div>
			@else
				<div>
					@foreach ($tickets as $ticket)
						@include('event.ticket', ['ticket' => $ticket])
					@endforeach
				</div>
			@endif
		</div>
	</div>
</div>
@endsection