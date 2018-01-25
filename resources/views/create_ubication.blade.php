@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Crear Ubicación</h1>

    {!! Form::open(['action' => 'UbicationController@createUbication']) !!}
    <div class="form-group">

        <div>

        <h4> <span class="label label-primary">Nombre</span></h4>
        {!! Form::text('name', null, ['class' => 'field', 'placeholder' => 'Nombre',
                'autofocus' => 'autofocus', 'required' => 'required']) !!}

        <h4> <span class="label label-primary">Ubicacion</span></h4>
        {!! Form::text('ubication', null, ['class' => 'field', 'placeholder' => 'Ubicacion',
                'autofocus' => 'autofocus', 'required' => 'required']) !!}

        <h4> <span class="label label-primary">Asientos numerados</span></h4>
        {!! Form::select('seatable', ['Si', 'No']) !!}
        
        <h4> <span class="label label-primary">Filas de la ubicación</span></h4>
        {!! Form::number('rows', null, ['class' => 'field', 'placeholder' => 'Filas',
                'autofocus' => 'autofocus', 'required' => 'required']) !!}

        <h4> <span class="label label-primary">Localidades por fila</span></h4>
        {!! Form::number('cols', null, ['class' => 'field', 'placeholder' => 'Columnas',
                'autofocus' => 'autofocus', 'required' => 'required']) !!}

        {!! Form::button('<span class="glyphicon glyphicon-floppy-saved"></span> Crear Ubicación',
             ['class' => 'btn btn-primary btn-block', 'type' => 'submit']) !!}
             </div>
    {!! Form::close() !!}
</div>

@endsection