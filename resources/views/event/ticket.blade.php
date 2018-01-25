<div class="panel panel-primary @if($ticket->show_date < Carbon\Carbon::now()) oscurecer @endif">
	<div class="panel-heading">
		<a class="link-header @if($ticket->show_date < Carbon\Carbon::now()) disabled @endif" href="{{ action('ShowController@getShow', $ticket->show_id) }}">{{ $ticket->show_name }}</a>
	</div>
	<div class="panel-body row">
		<div class="col-sm-6">
			<strong>Lugar:</strong>
			<br>
			{{ $ticket->ubication }}, {{ $ticket->location }}
		</div>
		<div class="col-sm-3 text-center">
			<strong>Asiento:</strong>
			<br>
			@if($ticket->seatable)
				{{ $ticket->col }} - {{ $ticket->row }}
			@else
				Ubicación no numerada
			@endif
		</div>
		<div class="col-sm-3 text-right">
			<strong>Fecha:</strong>
			<br>
			{{ $ticket->show_date }}
		</div>
		<br>
	</div>
</div>