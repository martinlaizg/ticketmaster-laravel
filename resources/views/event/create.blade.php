@extends('layouts.app') @section('content')
<div class='container'>
	<h1>Crear evento</h1>
	<br> @if(count($errors) > 0)
	<div class='alert alert-danger'>
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<form class='form-horizontal' enctype='multipart/form-data' action='{{ action("EventController@createForm") }}' method='POST'>
		<div class='well well-sm' style='overflow: auto;'>
			{{ csrf_field() }}
			<div class='col-sm-8'>
				<!-- Lado izquierdo -->
				<div class='form-group'>
					<label for='name' class='col-sm-3 control-label'>Nombre:</label>
					<div class='col-sm-9'>
						<input type='text' name='name' id='name' class='form-control' value='{{ old("name") }}'>
					</div>
				</div>
				<div class='form-group'>
					<label for='description' class='col-sm-3 control-label'>Descripción:</label>
					<div class='col-sm-9'>
						<textarea class='form-control' style='resize: vertical;' name='description' id='description' rows='10' value='{{ old("description") }}'></textarea>
					</div>
				</div>
			</div>

			<div class='col-sm-4 left-border'>
				<!-- Lado derecho -->
				<label for='image' style='margin-'>Imagen:</label><label id='inputPath'></label>
				<span class='btn btn-primary btn-block' onclick='document.getElementById("image").click();'>
					Seleccionar imagen...
					<input type='file' name='image' id='image' onchange='changePath()' style='display:none;'>
				</span>
				<br>
				<br>
				<button class='btn btn-success btn-block' type='submit'>Crear</button>
			</div>

		</div>
	</form>
	<script>
		function changePath() {
			var imagen = document.getElementById('image');
			document.getElementById('inputPath').innerHTML = imagen.value.split('\\')[2];
		}
	</script>
</div>
@endsection