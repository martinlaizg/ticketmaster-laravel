<div class="row">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<a class="link-header" href="/events/{{ $event->id }}">{!! $event->name !!}</a>
		</div>
		<div class="panel-body">
			<p>{!! $event->description !!}</p>
			<button type="button" class="btn btn-info btn-xs">{{ $event->genre->name }}</button>
		</div>
	</div>
</div>