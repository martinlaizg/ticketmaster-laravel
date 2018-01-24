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

.margenDerechaIcon {
    margin-right: 0.5em;
}

.divDerecha {
    float: right;
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
        <li><a data-toggle="tab" href="#usersAdmin">Usuarios</a></li>
    </ul>
  
    <div class="tab-content">
        <div id="homeAdmin" class="tab-pane fade in active">
            <h3>Bienvenido a la zona de administracion</h3>
            <p>Desde aqui podrá editar las diferentes partes de la página</p>
        </div>

        <div id="usersAdmin" class="tab-pane fade">
            <h3>Usuarios</h3>

            <a href="{{action('UserController@createUserView')}}"><button class="btn btn-info btn-lg margenBajo">Crear</button></a>
            
            <div class="container">
                @forelse($users as $user)

                <div class="panel panel-primary half">

                    <div class="panel-heading">{{$user->email}} 

                        <div class="divDerecha">
                            <a href="{{action('UserController@getUpdateForm', [$user->id])}}">
                                <span class="glyphicon glyphicon-pencil margenDerechaIcon" style="color:white"></span>
                            </a>

                            <a href="{{action('UserController@deleteUser', [$user->id])}}">
                                <span class="glyphicon glyphicon-remove" style="color:red"></span>
                            </a>
                        </div>
                    </div>

                    <div class="panel-body">
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
                        </ul>
                    </div>
                </div>      
                @empty
                    <div class="list-empty">No hay ningún usuario</div>
                @endforelse
            </div>
        </div>

        <div id="eventsAdmin" class="tab-pane fade">
            <h3>Eventos</h3> 
            
            <a href="{{action('EventController@createEventView')}}"><button class="btn btn-info btn-lg margenBajo">Crear</button></a>
            
            <div class="container">
                @forelse($events as $event)

                    <div class="panel panel-primary half">
                        <div class="panel-heading">{{$event->name}}

                        <div class="divDerecha">
                            <a href="{{action('EventController@editEventView', [$event->id])}}">
                                <span class="glyphicon glyphicon-pencil margenDerechaIcon" style="color:white"></span>
                            </a>

                            <a href="{{action('EventController@deleteEvent', [$event->id])}}">
                                <span class="glyphicon glyphicon-remove" style="color:red"></span>
                            </a></div></div>

                        <div class="panel-body">{{$event->description}}</div>
                    </div>

                @empty
                    <div class="list-empty">No hay ningún evento</div>
                @endforelse
            </div>

        </div>

        <div id="categoriesAdmin" class="tab-pane fade">
            <h3>Categorias</h3>

            <a href="{{action('CategoryController@createCategoryView')}}"><button class="btn btn-info btn-lg margenBajo">Crear</button></a>

            <div class="container">
                @forelse($categories as $category)

                    <div class="panel panel-primary half-sm">
                        <div class="panel-heading">{{$category->name}}

                        <div class="divDerecha">

                            <a href="{{action('CategoryController@editCategoryView', [$category->id])}}">
                                <span class="glyphicon glyphicon-pencil margenDerechaIcon" style="color:white"></span>
                            </a>

                            <a href="{{action('CategoryController@deleteCategory', [$category->id])}}">
                                <span class="glyphicon glyphicon-remove" style="color:red"></span>
                            </a></div></div>
                    </div>

                @empty
                    <div class="list-empty">No hay ninguna categoria</div>
                @endforelse
            </div>
        </div>

        <div id="genresAdmin" class="tab-pane fade">
            <h3>Géneros</h3>

            <a href="{{action('GenreController@createGenreView')}}"><button class="btn btn-info btn-lg margenBajo">Crear</button></a>
            
            <div class="container">
                @forelse($genres as $genre)

                    <div class="panel panel-primary half-sm">
                        <div class="panel-heading">{{$genre->name}} 

                        <div class="divDerecha">

                            <a href="{{action('GenreController@editGenreView', [$genre->id])}}">
                                <span class="glyphicon glyphicon-pencil margenDerechaIcon" style="color:white"></span>
                            </a>

                            <a href="{{action('GenreController@deleteGenre', [$genre->id])}}">
                                <span class="glyphicon glyphicon-remove" style="color:red"></span>
                            </a></div></div>
                    </div>

                @empty
                    <div class="list-empty">No hay ningún género</div>
                @endforelse
            </div>
        </div>

        <div id="ubicationsAdmin" class="tab-pane fade">
            <h3>Ubicaciones</h3>

            <a href="{{action('UbicationController@createUbicationView')}}"><button class="btn btn-info btn-lg margenBajo">Crear</button></a>
            
            <div class="container">
                @forelse($ubications as $ubication)

                    <div class="panel panel-primary half-sm">
                        <div class="panel-heading">{{$ubication->location}} 

                        <div class="divDerecha">

                            <a href="{{action('UbicationController@editUbicationView', [$ubication->id])}}">
                                <span class="glyphicon glyphicon-pencil margenDerechaIcon" style="color:white"></span>
                            </a>

                            <a href="{{action('UbicationController@deleteUbication', [$ubication->id])}}">
                                <span class="glyphicon glyphicon-remove" style="color:red"></span>
                            </a></div></div>
                    </div>

                @empty
                    <div class="list-empty">No hay ninguna ubicación</div>
                @endforelse
            </div>
        </div>

        <div id="showsAdmin" class="tab-pane fade">
            <h3>Shows</h3>

            <a href="{{action('ShowController@createShowView')}}"><button class="btn btn-info btn-lg margenBajo">Crear</button></a>
            
            <div class="container">
                @forelse($shows as $show)

                    <div class="panel panel-primary half-sm">
                        <div class="panel-heading">{{$show->date}} 

                        <div class="divDerecha">

                            <a href="{{action('ShowController@editShowView', [$show->id])}}">
                                <span class="glyphicon glyphicon-pencil margenDerechaIcon" style="color:white"></span>
                            </a>

                            <a href="{{action('ShowController@deleteShow', [$show->id])}}">
                                <span class="glyphicon glyphicon-remove" style="color:red"></span>
                            </a></div></div>
                    </div>

                @empty
                    <div class="list-empty">No hay ningún show</div>
                @endforelse
            </div>
        </div>
    </div>
  </div>

@endsection