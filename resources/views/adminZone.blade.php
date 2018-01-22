@extends('layouts.app')

@section('style')

.half {
    width: 44%;
    display: inline-block;
    margin-right: 5%;
}

.half-sm {
    width: 25%;
    display: inline-block;
    margin-right: 4%;
}

.margenBajo {
    margin-bottom: 1em;
}

@endsection

@section('content')

<div class="container">
    <h1 class="margenBajo">Bienvenido a la zona de administracion</h1>
</div>

<div class="container">
   
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#homeAdmin">Bienvenido</a></li>
        <li><a data-toggle="tab" href="#eventsAdmin">Eventos</a></li>  
        <li><a data-toggle="tab" href="#showsAdmin">Shows</a></li>
        <li><a data-toggle="tab" href="#genresAdmin">Géneros</a></li>
        <li><a data-toggle="tab" href="#categoriesAdmin">Categorias</a></li>
        <li><a data-toggle="tab" href="#ubicationsAdmin">Ubicaciones</a></li>
    </ul>
  
    <div class="tab-content">
        <div id="homeAdmin" class="tab-pane fade in active">
            <h3>Bienvenido a la zona de administracion</h3>
            <p>Desde aqui podrá editar las diferentes partes de la página</p>
        </div>

        <div id="eventsAdmin" class="tab-pane fade">
            <h3 class="margenBajo">Eventos</h3> 
            
            <a href="{{action('EventController@createEventView')}}">Crear</a>
            
            <div class="container">
                @forelse($events as $event)

                    <div class="panel panel-primary half">
                        <div class="panel-heading">{{$event->name}}

                        <a href="{{action('EventController@editEventView', [$event->id])}}">
                            <span class="glyphicon glyphicon-pencil" style="color:white"></span>
                        </a>

                        <a href="{{action('EventController@deleteEvent', [$event->id])}}">
                            <span class="glyphicon glyphicon-remove" style="color:red"></span>
                        </a></div>

                        <div class="panel-body">{{$event->description}}</div>
                    </div>

                @empty
                    <div class="list-empty">No hay ningún evento</div>
                @endforelse
            </div>

        </div>

        <div id="categoriesAdmin" class="tab-pane fade">
            <h3 class="margenBajo">Categorias</h3>

            <a href="{{action('CategoryController@createCategoryView')}}">Crear</a>

            <div class="container">
                @forelse($categories as $category)

                    <div class="panel panel-primary half-sm">
                        <div class="panel-heading">{{$category->name}}

                        <a href="{{action('CategoryController@editCategoryView', [$category->id])}}">
                            <span class="glyphicon glyphicon-pencil" style="color:white"></span>
                        </a>

                        <a href="{{action('CategoryController@deleteCategory', [$category->id])}}">
                            <span class="glyphicon glyphicon-remove" style="color:red"></span>
                        </a></div>
                    </div>

                @empty
                    <div class="list-empty">No hay ninguna categoria</div>
                @endforelse
            </div>
        </div>

        <div id="genresAdmin" class="tab-pane fade">
            <h3 class="margenBajo">Géneros</h3>

            <a href="{{action('GenreController@createGenreView')}}">Crear</a>
            
            <div class="container">
                @forelse($genres as $genre)

                    <div class="panel panel-primary half-sm">
                        <div class="panel-heading">{{$genre->name}} 

                        <a href="{{action('GenreController@editGenreView', [$genre->id])}}">
                            <span class="glyphicon glyphicon-pencil" style="color:white"></span>
                        </a>

                        <a href="{{action('GenreController@deleteGenre', [$genre->id])}}">
                            <span class="glyphicon glyphicon-remove" style="color:red"></span>
                        </a></div>
                    </div>

                @empty
                    <div class="list-empty">No hay ningún género</div>
                @endforelse
            </div>
        </div>

        <div id="ubicationsAdmin" class="tab-pane fade">
            <h3 class="margenBajo">Ubicaciones</h3>

            <a href="{{action('UbicationController@createUbicationView')}}">Crear</a>
            
            <div class="container">
                @forelse($ubications as $ubication)

                    <div class="panel panel-primary half-sm">
                        <div class="panel-heading">{{$ubication->location}} 

                        <a href="{{action('UbicationController@editUbicationView', [$ubication->id])}}">
                            <span class="glyphicon glyphicon-pencil" style="color:white"></span>
                        </a>

                        <a href="{{action('UbicationController@deleteUbication', [$ubication->id])}}">
                            <span class="glyphicon glyphicon-remove" style="color:red"></span>
                        </a></div>
                    </div>

                @empty
                    <div class="list-empty">No hay ninguna ubicación</div>
                @endforelse
            </div>
        </div>

        <div id="showsAdmin" class="tab-pane fade">
            <h3 class="margenBajo">Shows</h3>

            <a href="{{action('ShowController@createShowView')}}">Crear</a>
            
            <div class="container">
                @forelse($shows as $show)

                    <div class="panel panel-primary half-sm">
                        <div class="panel-heading">{{$show->date}} 

                        <a href="{{action('ShowController@editShowView', [$show->id])}}">
                            <span class="glyphicon glyphicon-pencil" style="color:white"></span>
                        </a>

                        <a href="{{action('ShowController@deleteShow', [$show->id])}}">
                            <span class="glyphicon glyphicon-remove" style="color:red"></span>
                        </a></div>
                    </div>

                @empty
                    <div class="list-empty">No hay ningún show</div>
                @endforelse
            </div>
        </div>
    </div>
  </div>

@endsection