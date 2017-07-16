@extends('admin.template.main')

@section('title', 'Lista de Usuarios')

@section('content')
    <a href="{{route('users.create')}}" class="btn btn-info">Registrar nuevo usuario</a><hr>
    <table class="table table-striped">
        <thead>
            <th>#</th>
            <th>Nombre</th>
            <th>Tipo</th>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->type }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $users -> render() !!}
@endsection