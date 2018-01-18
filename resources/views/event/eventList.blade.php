@extends('layouts.app') @section('content')
<div class="container">
	<div>
		<h1>Lista de eventos</h1>
	</div>
	<div class="row">
		<div class="col-md-3">
			<h3>Filtro</h3>
			<hr>
			<label for="genre" class="control-label">Genero</label>
			<select class="form-control" name="genre" id="genre">
				@foreach( $genres as $genre)
				<option value="{{ $genre->id }}">{{ $genre->name }}</option>
				@endforeach
			</select>
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