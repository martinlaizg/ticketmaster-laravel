<div class="panel panel-primary half @if($show->date < Carbon\Carbon::now()) oscurecer @endif">
	<div class="panel-heading">
		<a class="link-header @if($show->date < Carbon\Carbon::now()) disabled @endif" href="{{ action('ShowController@getShow', $show->id) }}">{{ $event->name }}</a>
	</div>
	<div class="panel-body row">
		<div class="col-sm-4">
			<strong>Lugar:</strong>
			<br>
			{{ $show->ubication->name }}
		</div>
		<div class="col-sm-4 text-center">
			<strong>Ciudad:</strong>
			<br>
			{{ $show->ubication->location }}
		</div>
		<div class="col-sm-4 text-right">
			<strong>Fecha:</strong>
			<br>
			{{ $show->date }}
		</div>
		<br>
	</div>
</div>