@extends('layouts.app') @section('content')
<div class='container'>
	<h1>Crear evento</h1>
	<br>
	<form class='form-horizontal' action='{{ action("EventController@createForm") }}' method='POST'>
		<div class="well well-sm" style='overflow: auto;'>
			<div class='col-sm-8'>
				<!-- Lado izquierdo -->
				<div class='form-group'>
					<label for='inputNombreEvento' class='col-sm-3 control-label'>Nombre:</label>
					<div class='col-sm-9'>
						<input type='text' name='nombre' id='inputNombreEvento' class='form-control'>
					</div>
				</div>
				<div class='form-group'>
					<label for='inputDescripcionEvento' class='col-sm-3 control-label'>Descripción:</label>
					<div class='col-sm-9'>
						<textarea class='form-control' name="inputDescripcionEvento" id="inputDescripcionEvento" rows="10"></textarea>
					</div>
				</div>
			</div>

			<div class='col-sm-4 left-border'>
				<!-- Lado derecho -->
				<label for="inputImageEvent">Imagen del evento:</label>
				<span class='btn btn-primary btn-block' onclick='document.getElementById("inputImageEvent").click();'>
					Seleccionar imagen...
					<input type='file' name='inputImageEvent' id='inputImageEvent' style='display:none;'>
				</span>
				<br>
				<br>
				<br>
				<button class='btn btn-success btn-block' type="submit">Crear</button>
			</div>

		</div>
	</form>
</div>
@endsection