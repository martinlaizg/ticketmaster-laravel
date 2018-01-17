@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Crear Categoria</h1>

    {!! Form::open(['url' => '/category/create/']) !!}
    <div class="form-group">

        <div>
        <h4> <span class="label label-primary">Nombre</span></h4></div>
        {!! Form::text('name', null, ['class' => 'field', 'placeholder' => 'Nombre',
                        'autofocus' => 'autofocus', 'required' => 'required']) !!}
                        

        <h4> <span class="label label-primary">Género</span></h4></div>    
        {!! Form::select('genre[]', ($genres), null, 
            ['multiple'=>false,'class' => 'form-control margin']) !!}
            
        {!! Form::button('<span class="glyphicon glyphicon-floppy-saved"></span> Crear Categoria',
             ['class' => 'btn btn-primary btn-block', 'type' => 'submit']) !!}
             </div>
    {!! Form::close() !!}
</div>

@endsection