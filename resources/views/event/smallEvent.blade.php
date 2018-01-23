<div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<a class="link-header" href="{{ action('EventController@getEvent', $event->id) }}">{!! $event->name !!}</a>
		</div>
		<div class="panel-body">
			<p>{!! $event->description !!}</p>
			<label class="label label-info">{{ $event->genre->name }}</label>
		</div>
	</div>
</div>