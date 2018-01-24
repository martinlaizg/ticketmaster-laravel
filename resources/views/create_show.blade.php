@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Crear Show</h1>

    {!! Form::open(['action' => 'ShowController@createShow']) !!}
    <div class="form-group">

        <div>

        <h4> <span class="label label-primary">Evento</span></h4></div>    
        {!! Form::select('event', $events) !!}

        </div>

		<label for="date" class="label label-primary">Fecha</label>
		<input class="form-control" type="date" name="date" id="date">
                        
        <h4> <span class="label label-primary">Ubicacion</span></h4>  
        {!! Form::select('ubication', $ubications) !!}

        {!! Form::button('<span class="glyphicon glyphicon-floppy-saved"></span> Crear Show',
             ['class' => 'btn btn-primary btn-block', 'type' => 'submit']) !!}
             </div>
    {!! Form::close() !!}
</div>

@endsection