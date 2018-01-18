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
		{{ $user->surname }}
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
<a class="btn btn-info btn-block" href="{{ action('UserController@getUpdateForm') }}">Editar</a>