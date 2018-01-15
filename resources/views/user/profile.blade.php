@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<br>
		<div class="col-sm-4">
			<!-- Informacion del usuario -->
			<h2>Bienvenido <br> {{ $user->name }}</h2>
			<ul class="list-group">
				<li class="list-group-item text-right">
					<span class="pull-left">
						<strong>Nombre</strong>
					</span>
					{{ $user->name }}
				</li>
				<li class="list-group-item text-right">
					<span class="pull-left">
						<strong>Apellidos</strong>
					</span>
					To-Do{{ $user->surname }}
				</li>
				<li class="list-group-item text-right">
					<span class="pull-left">
						<strong>Fecha de nacimiento</strong>
					</span>
					{{ $user->bdate }}
				</li>
				<li class="list-group-item text-right">
					<span class="pull-left">
						<strong>Pais</strong>
					</span>
					{{ $user->country }}
				</li>
				<li class="list-group-item text-right">
					<span class="pull-left">
						<strong>Ciudad</strong>
					</span>
					{{ $user->poblation }}
				</li>
			</ul>
		</div>
		<div class="col-sm-8 left-border">
			<!-- Entradas del usuario -->
			<h3>Tus próximas entradas</h3>
			@if( count($nextEvents) <= 0 )
				<div class="alert alert-info">
					No tienes próximas entradas, puedes comprarlas <a href="{{ action('HomeController@home') }}" class="alert-link">aquí</a>
				</div>
			@else
				<div>
					Aquí aparecen tus entradas
				</div>
			@endif
		</div>
	</div>
</div>
@endsection