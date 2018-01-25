@extends('layouts.app') 
@section('content')
<div class="container">
	<!-- Informacion del evento -->
	<div class="">
		<h3>{{ $show->event->name }}</h3>
		<br>
		<div>
			<label>Fecha:</label> {{ $show->date }}
			<br>
			<label>Ubicación:</label> {{ $show->ubication->name }}
			<br>
			<label>Localidad:</label> {{ $show->ubication->location }}
			<br>
			<label>Entradas:</label> {{ count($show->tickets) }}/{{ $show->ubication->seats }}
			<br>
			<label>Precio:</label> {{ $show->price }}€/entrada
		</div>
	</div>
	<br>
	@if( session()->get('error') )
		<div class="alert alert-danger">
			{{ session()->get('error') }}
		</div>
	@endif
	@if( $show->ubication->seatable )
		<form action="{{ action('ShowController@buySeatableTickets', $show->id) }}" method="post">
			{{ csrf_field() }}
			<div>
				<button class="btn btn-primary" type="submit">Comprar</button>
			</div>
			<br>
			<div>
				<table>
					<th>
						@for($i=1; $i<=$show->ubication->cols; $i++)
							<th width="20">{{ $i }}</th>
						@endfor
					</th>
					@for($j=1; $j<=$show->ubication->rows; $j++)
						<tr>						
							<th width="20">{{ $j }}</th>
							@for($i=1; $i<=$show->ubication->cols; $i++)
								@if($show->isOcupied($show->id, $i, $j))
									<td width="20"><input type="checkbox" name="{{$i}}-{{$j}}" id="{{$i}}-{{$j}}" disabled></td>
								@else
									<td width="20"><input type="checkbox" name="{{$i}}-{{$j}}" id="{{$i}}-{{$j}}"></td>					
								@endif
							@endfor
						</tr>
					@endfor
				</table>
			</div>
		</form>
	@else
		@if( $show->ubication->seats - count($show->tickets) > 0)
			<form action="{{ action('ShowController@buyTickets', $show->id) }}" method="post">
				{{ csrf_field() }}
				<div class="col-sm-2">
			 		<input class="form-control" type="number" name="numTickets" id="numTickets" value="1" min="1" max="{{$show->ubication->seats - count($show->tickets)}}">
				</div>
			 <button class="btn btn-primary" type="submit">Comprar</button>
			</form>
		@else
			<div class="alert alert-danger col-sm-3">
					<strong>Sold Out!</strong>
			</div>
		@endif
	@endif
</div>
@endsection