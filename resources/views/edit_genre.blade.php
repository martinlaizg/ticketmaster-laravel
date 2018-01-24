@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Editar Género</h1>

    {!! Form::open(['action' => [ 'GenreController@editGenre', $genre->id]]) !!}
    <div class="form-group">

        <div>
        <h4> <span class="label label-primary">Nombre</span></h4></div>
        {!! Form::text('name', $genre->name, ['class' => 'field', 'placeholder' => 'Nombre',
                        'autofocus' => 'autofocus', 'required' => 'required']) !!}
                        
        <h4> <span class="label label-primary">Categoria</span></h4></div>    
        {!! Form::select('category', $categories) !!}
        
        {!! Form::button('<span class="glyphicon glyphicon-floppy-saved"></span> Editar Género',
             ['class' => 'btn btn-primary btn-block', 'type' => 'submit']) !!}
             </div>
    {!! Form::close() !!}
</div>

@endsection