@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div>
				<h2>Próximos eventos</h2>
			</div>
			<div class=''>
				@foreach($events as $event)
				<div class='row'>
					<div class="col-sm-3">
						<img src="img/{{ $event->image }}" class='img-responsive img-rounded' alt="Event image" onerror="this.onerror=null; this.src='./img/default.jpg'">
					</div>
					<div class='col-sm-9'>
						<h4>{!! $event->name !!}</h4>
						<p>{!! $event->description !!}</p>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection