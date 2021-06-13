@extends('adminlte::page')

@section('title', 'Tablero Maestros')

@section('content_header')
    <h1>Lista de alumnos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-success" href="{{ route('teacher.users.create') }}">Crear nuevo usuario</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Número de control</th>
                        <th>Correo Electrónico</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->paternal_name}}</td>
                            <td>{{$user->maternal_name}}</td>
                            <td>{{$user->control_number}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('teacher.users.edit', $user) }}">Editar</a>
                            </td>
                            <td>
                                <form action="{{ route('teacher.users.destroy', $user) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@stop