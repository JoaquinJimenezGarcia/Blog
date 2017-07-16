@extends('admin.template.main')

@section('title', 'Crear Usuario')

@section('content')
    {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'require']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'require']) !!}
        </div>

    {!! Form::close() !!}
@endsection