@extends('adminlte::page')

@section('title', 'Tablero Maestros')

@section('content_header')
    <h1>Lista de grupos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-success" href="{{ route('teacher.groups.create') }}">Crear nuevo grupo</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre del grupo</th>
                        <th>Contraseña</th>
                        <th>Creador del grupo</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($groups as $group)
                        <tr>
                            <td>{{$group->id}}</td>
                            <td>{{$group->name}}</td>
                            <td>{{$group->password}}</td>
                            <td>{{$user->user_id}}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('teacher.group.edit', $user) }}">Editar</a>
                            </td>
                            <td>
                                <form action="{{ route('teacher.groups.destroy', $user) }}" method="POST">
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