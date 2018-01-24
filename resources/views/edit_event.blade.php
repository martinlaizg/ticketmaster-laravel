@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Editar Evento</h1>

    {!! Form::open(['action' => [ 'EventController@editEvent', $event->id]]) !!}
    <div class="form-group">

        <div>
        <h4> <span class="label label-primary">Nombre</span></h4></div>
        {!! Form::text('name', $event->name, ['class' => 'field', 'placeholder' => 'Nombre',
                        'autofocus' => 'autofocus', 'required' => 'required']) !!}
                        
        <div>
        <h4> <span class="label label-primary">Descripción</span></h4></div>
        {!! Form::text('description', $event->description, ['class' => 'field', 'autofocus' => 'autofocus',
                        'placeholder' => 'Descripción', 'required' => 'required']) !!}

        <h4> <span class="label label-primary">Género</span></h4></div>    
        {!! Form::select('genre', $genres) !!}
        
        {!! Form::button('<span class="glyphicon glyphicon-floppy-saved"></span> Editar Evento',
             ['class' => 'btn btn-primary btn-block', 'type' => 'submit']) !!}
             </div>
    {!! Form::close() !!}
</div>

@endsection