@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Editar Ubicación</h1>

    {!! Form::open(['action' => [ 'UbicationController@editUbication', $ubication->id]]) !!}
    <div class="form-group">

        <div>

        <h4> <span class="label label-primary">Nombre</span></h4>
        {!! Form::text('name', $ubication->name, ['class' => 'field', 'placeholder' => 'Nombre',
                'autofocus' => 'autofocus', 'required' => 'required']) !!}

        <h4> <span class="label label-primary">Ubicación</span></h4>
        {!! Form::text('ubication', $ubication->location, ['class' => 'field', 'placeholder' => 'Ubicacion',
                        'autofocus' => 'autofocus', 'required' => 'required']) !!}
            
        <h4> <span class="label label-primary">Asientos numerados</span></h4>
        {!! Form::select('seatable', ['Si', 'No']) !!}
        
        <h4> <span class="label label-primary">Filas de la ubicación</span></h4>
        {!! Form::number('rows', $ubication->rows, ['class' => 'field', 'placeholder' => 'Filas',
                'autofocus' => 'autofocus', 'required' => 'required']) !!}

        <h4> <span class="label label-primary">Localidades por fila</span></h4>
        {!! Form::number('cols', $ubication->cols, ['class' => 'field', 'placeholder' => 'Columnas',
                'autofocus' => 'autofocus', 'required' => 'required']) !!}

        {!! Form::button('<span class="glyphicon glyphicon-floppy-saved"></span> Editar Ubicación',
             ['class' => 'btn btn-primary btn-block', 'type' => 'submit']) !!}
             </div>
    {!! Form::close() !!}
</div>

@endsection