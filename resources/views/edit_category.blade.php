@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Editar Categoria</h1>

    {!! Form::open(['url' => '/category/edit/' . $category->id]) !!}
    <div class="form-group">

        <div>
        <h4> <span class="label label-primary">Nombre</span></h4></div>
        {!! Form::text('name', $category->name, ['class' => 'field', 'placeholder' => 'Nombre',
                        'autofocus' => 'autofocus', 'required' => 'required']) !!}
            
        {!! Form::button('<span class="glyphicon glyphicon-floppy-saved"></span> Editar Categoria',
             ['class' => 'btn btn-primary btn-block', 'type' => 'submit']) !!}
             </div>
    {!! Form::close() !!}
</div>

@endsection