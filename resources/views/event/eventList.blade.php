@extends('layouts.app') @section('content')
<div class="container">
	<div>
		<h1>Lista de eventos</h1>
	</div>
	<div class="row">
		<div class="col-md-3">
			<h3>Filtro</h3>
			<hr>
			<div>
				<label for="genre" class="control-label">Genero</label>
				<select class="form-control" name="genre" id="genre">
					@foreach( $genres as $genre)
					<option value="{{ $genre->id }}">{{ $genre->name }}</option>
					@endforeach
				</select>
			</div>
			<br>
			<div>
				<label for="date" class="control-label">Fecha</label>
				<input class="form-control" type="datetime-local" name="" id="">
			</div>
			<br>
			<div>
				<label for="ubication" class="control-label">Ubicación</label>
				<select class="form-control" name="ubication" id="ubication">
					<option value="">To-Do</option>
					@foreach( $ubications as $ubication)
					<option value="{{ $ubication->id }}">{{ $ubication->name }}</option>
					@endforeach
				</select>
			</div>
			<hr>
			<button class="btn btn-warning btn-block">Aplicar filtro</button>
			<br>
		</div>
		<div class="col-md-9">
			<br>
			<br>
			@foreach( $events as $event)
				@include('event.event', [ 'event' => $event ])
			@endforeach
		</div>
	</div>
</div>
@endsection