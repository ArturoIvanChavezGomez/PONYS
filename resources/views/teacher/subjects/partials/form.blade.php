<div class="form-group">
    {!! Form::label('name', 'Nombre de la materia') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la materia']) !!}

    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la materia', 'readonly']) !!}

    @error('slug')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('description', 'Descripción') !!}
    {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Escriba una descripción breve']) !!}
    @error('description')
        <span class="text-danger">{{$message}}</span>
    @enderror
</div>