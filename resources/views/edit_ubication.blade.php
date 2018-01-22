@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Editar Ubicación</h1>

    {!! Form::open(['url' => '/ubication/edit/' . $ubication->id]) !!}
    <div class="form-group">

        <div>
        <h4> <span class="label label-primary">Ubicación</span></h4></div>
        {!! Form::text('ubication', $ubication->location, ['class' => 'field', 'placeholder' => 'Ubicacion',
                        'autofocus' => 'autofocus', 'required' => 'required']) !!}
            
        {!! Form::button('<span class="glyphicon glyphicon-floppy-saved"></span> Editar Ubicación',
             ['class' => 'btn btn-primary btn-block', 'type' => 'submit']) !!}
             </div>
    {!! Form::close() !!}
</div>

@endsection