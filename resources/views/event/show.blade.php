@extends('layouts.app') 
@section('content')
<div class="container">
	<!-- Informacion del evento -->
	<div class="col-sm-5">
		<h3>{{ $show->event->name }}</h3>
		<br>
		<div>
			<label>Fecha:</label> {{$show->date}}
			<br>
			<label>Ubicación:</label> {{$show->ubication->name}}
			<br>
			<label>Localidad:</label> {{$show->ubication->location}}
		</div>
	</div>
</div>
@endsection