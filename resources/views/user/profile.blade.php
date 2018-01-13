@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<h1>Bienvenido {{ $user->name }}</h1>
		<br>
		<div class="col-sm-4">
			<!-- Informacion del usuario -->
			<ul class="list-group">
				<li class="list-group-item text-right">
					<span class="pull-left">
						<strong>Nombre</strong>
					</span>
					{{ $user->name }}
				</li>
				<li class="list-group-item text-right">
					<span class="pull-left">
						<strong>Apellidos</strong>
					</span>
					To-Do{{ $user->surname }}
				</li>
				<li class="list-group-item text-right">
					<span class="pull-left">
						<strong>Fecha de nacimiento</strong>
					</span>
					{{ $user->bdate }}
				</li>
				<li class="list-group-item text-right">
					<span class="pull-left">
						<strong>Pais</strong>
					</span>
					{{ $user->country }}
				</li>
				<li class="list-group-item text-right">
					<span class="pull-left">
						<strong>Ciudad</strong>
					</span>
					{{ $user->poblation }}
				</li>
			</ul>
		</div>
		<div class="col-sm-8">
			<!-- Entradas del usuario -->

		</div>
	</div>
</div>
@endsection