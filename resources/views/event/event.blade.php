@extends('layouts.app') 
@section('content')
<div class="container">
	<!-- Informacion del evento -->
	<div class="col-sm-5">
		<h3>Evento</h3>
		<br>
		<ul class="list-group">
			<li class="list-group-item text-right">
				<span class="pull-left">
							<strong>Nombre</strong>
						</span> {{ $event->name }}
			</li>
			<li class="list-group-item text-right">
				<span class="pull-left">
							<strong>Descripción</strong>
						</span> {{ $event->description }}
			</li>
			<li class="list-group-item text-right">
				<span class="pull-left">
							<strong>Categoría</strong>
						</span>{{ $event->genre->category->name }}
			</li>
			<li class="list-group-item text-right">
				<span class="pull-left">
							<strong>Género</strong>
						</span> {{ $event->genre->name }}
			</li>
		</ul>
	</div>
	<!-- Próximos shows -->
	<div class="col-sm-7">
		<h3>Shows</h3>
		<hr>
		@foreach( $event->shows->sortBy('date') as $show )
			@include('event.smallShow', [ 'show' => $show ])
		@endforeach
	</div>
</div>
@endsection