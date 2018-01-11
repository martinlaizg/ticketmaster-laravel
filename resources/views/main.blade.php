@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div>
				<h2>Próximos eventos</h2>
			</div>
			<div class=''>
				@foreach($events as $event)
				<div class="row">
					<div class="panel panel-default">
						<div class="panel-heading">{!! $event->name !!}</div>
						<div class="panel-body">{!! $event->description !!}</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection