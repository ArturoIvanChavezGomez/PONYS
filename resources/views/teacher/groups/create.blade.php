@extends('adminlte::page')

@section('title', 'Tablero Maestros')

@section('content_header')
    <h1>Crear Materia</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'teacher.groups.store']) !!}

                @include('teacher.groups.partials.form')

                <input type="hidden" value="{{Auth::user()->id}}" name="user_id">

                {!! Form::submit('Crear Materia', ['class' => 'btn btn-success']) !!}

            {!! Form::close() !!}

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop