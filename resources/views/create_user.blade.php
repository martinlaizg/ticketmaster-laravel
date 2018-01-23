@extends('layouts.app')

@section('style')

    .margenUp {
        margin-top: 2em;
    }

    .half {
        width: 25%;
        display: inline-block;
        margin-right: 5%;
    }

@endsection

@section('content')

<div class="container">
    <h1>Crear perfil</h1>

    {!! Form::open(['url' => '/user/create/']) !!}
    <div class="form-group">

        <div class="half">
            <h4> <span class="label label-primary">Nombre</span></h4>
            {!! Form::text('name', null, ['class' => 'field', 'placeholder' => 'Nombre',
                'autofocus' => 'autofocus', 'required' => 'required']) !!}

            <h4> <span class="label label-primary">Apellidos</span></h4>
            {!! Form::text('surname', null, ['class' => 'field', 'placeholder' => 'Nombre',
                'autofocus' => 'autofocus', 'required' => 'required']) !!}
            
            <h4> <span class="label label-primary">Email</span></h4> 
            {!! Form::email('email', null, ['class' => 'field', 'autofocus' => 'autofocus',
                'placeholder' => 'Email', 'required' => 'required']) !!}

            <h4> <span class="label label-primary">Password</span></h4>   
            {!! Form::password('password', ['class' => 'field', 'placeholder' => 'Password',
                    'autofocus' => 'autofocus', 'required' => 'required']) !!}
        </div>

        <div class="half"> 
            <h4><label for="bdate" class="label label-primary">Fecha</label></h4>
            <input type="date" name="bdate" id="bdate">
            
            <h4> <span class="label label-primary">Pais</span></h4>
            {!! Form::text('country', null, ['class' => 'field', 'placeholder' => 'Nombre',
                'autofocus' => 'autofocus']) !!}

            <h4> <span class="label label-primary">Ciudad</span></h4>
            {!! Form::text('poblation', null, ['class' => 'field', 'placeholder' => 'Nombre',
                'autofocus' => 'autofocus']) !!}
            
            <h4> <span class="label label-primary">Rol</span></h4>
            {!! Form::select('role', ['Guest', 'Admin']) !!}
        </div>

        <div class="margenUp"></div>

        {!! Form::button('<span class="glyphicon glyphicon-floppy-saved"></span> Confirmar',
             ['class' => 'btn btn-primary btn-block', 'type' => 'submit']) !!}
    </div>
    {!! Form::close() !!}
</div>

@endsection