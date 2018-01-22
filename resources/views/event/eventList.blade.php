@extends('layouts.app') 
@section('content')
<div class="container">
	<div>
		<h1>Lista de eventos</h1>
	</div>
	<div class="row">
		<div class="col-md-3">
			<h3>Filtro</h3>
			<hr>
			<form action="{{ action('EventController@getEvents') }}" method="post">
				{{ csrf_field() }}
				<div>
					<label for="genre_id" class="control-label">Genero</label>
					<select class="form-control" name="genre_id" id="genre_id" value="{{ old('genre_id') }}">
					<option value="">Todos</option>
					@foreach($categories as $thisCategory)
					<option value="{{ $thisCategory->id }}" @if($genre == $thisCategory->id ) selected @endif>{{ $thisCategory->name }}</option>
					@endforeach
					{{--
					@foreach( $categories as $thisCategory )
					<optgroup label="{{ $thisCategory->name }}">
							@foreach( $thisCategory->genres() as $genre )
							<option value="{{ $genre->id }}"></option>
						@endforeach
					</optgroup>
					@endforeach
					--}}
				</select>
				</div>
				<br>
				<div>
					<label for="date" class="control-label">Fecha</label>
					<input class="form-control" type="date" name="date" id="date">
				</div>
				<br>
				<div>
					<label for="ubication" class="control-label">Ubicación</label>
					<select class="form-control" name="ubication" id="ubication">
					<option value="">To-Do</option>
					@foreach( $ubications as $thisUbication )
					<option value="{{ $thisUbication->id }}" @if($ubication == $thisUbication->id ) selected @endif>{{ $thisUbication->name }}</option>
					@endforeach
				</select>
				</div>
				<hr>
				<button type="submit" class="btn btn-warning btn-block">Aplicar filtro</button>
			</form>
			<br>
		</div>
		<br>
		<br>
		<!-- Lista de eventos -->
		<div class="col-md-9">
			@if( count($events) > 0 )
				{{ $events->appends(['genre_id' => $genre])->links() }}
				@foreach( $events as $event)
					@include('event.event', [ 'event' => $event ]) 
				@endforeach
				{{ $events->appends(['genre_id' => $genre])->links() }}
			@else
				<div class="alert alert-info">
					No hay eventos con esas características
				</div>
			@endif
		</div>
	</div>
</div>
@endsection