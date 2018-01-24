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
		</div>
	</div>
	<br>
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
				<button type="submit">Comprar</button>
			</div>
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
		Show sin asientos
	@endif
</div>
@endsection