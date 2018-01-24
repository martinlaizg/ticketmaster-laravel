@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Crear Ubicación</h1>

    {!! Form::open(['action' => 'UbicationController@createUbication']) !!}
    <div class="form-group">

        <div>
        <h4> <span class="label label-primary">Ubicacion</span></h4></div>
        {!! Form::text('ubication', null, ['class' => 'field', 'placeholder' => 'Ubicacion',
                        'autofocus' => 'autofocus', 'required' => 'required']) !!}
            
        {!! Form::button('<span class="glyphicon glyphicon-floppy-saved"></span> Crear Ubicación',
             ['class' => 'btn btn-primary btn-block', 'type' => 'submit']) !!}
             </div>
    {!! Form::close() !!}
</div>

@endsection