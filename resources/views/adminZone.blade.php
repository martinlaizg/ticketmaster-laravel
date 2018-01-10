@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Bienvenido a la zona de administracion</h1>
</div>

<div class="container">
   
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#homeAdmin">Bienvenido</a></li>
      <li><a data-toggle="tab" href="#eventsAdmin">Eventos</a></li>
      <li><a data-toggle="tab" href="#categoriesAdmin">Categorias</a></li>
      <li><a data-toggle="tab" href="#genresAdmin">Géneros</a></li>
    </ul>
  
    <div class="tab-content">
      <div id="homeAdmin" class="tab-pane fade in active">
        <h3>Bienvenido a la zona de administracion</h3>
        <p>Desde aqui podrá editar las diferentes partes de la página</p>
      </div>
      <div id="eventsAdmin" class="tab-pane fade">
        <h3>Eventos</h3>
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div id="categoriesAdmin" class="tab-pane fade">
        <h3>Categorias</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      </div>
      <div id="genresAdmin" class="tab-pane fade">
        <h3>Géneros</h3>
        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      </div>
    </div>
  </div>

@endsection