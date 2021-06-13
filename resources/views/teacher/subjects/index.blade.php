@extends('adminlte::page')

@section('title', 'Tablero Maestros')

@section('content_header')
    <h1>Lista de materias</h1>
@stop

@section('content')  

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <a class="btn btn-success" href="{{route('teacher.subjects.create')}}">Crear nueva materia</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                       <th>ID</th>
                       <th>Nombre de la materia</th>
                       <th>Descripción</th>
                       <th>Creador</th>
                       <th colspan="2"></th> 
                    </tr>
                </thead>

                <tbody>
                       @foreach ($subjects as $subject)
                           <tr>
                                <td>{{$subject->id}}</td>
                                <td>{{$subject->name}}</td>
                                <td>{{$subject->description}}</td>
                                <td>{{Auth::user()->name }} {{Auth::user()->paternal_name }} {{Auth::user()->maternal_name }}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm"href="{{route('teacher.subjects.edit', $subject)}}">Editar</a>
                                </td>
                                <td>
                                    <form action="{{route('teacher.subjects.destroy', $subject)}}" method="POST">
                                        @csrf
                                        @method('delete')

                                        <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                                    </form>
                                </td>
                           </tr>
                       @endforeach 
                </tbody>
            </table>
        </div>
    </div>
@stop
