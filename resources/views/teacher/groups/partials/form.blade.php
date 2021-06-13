<div class="form-group">
    {!! Form::label('name', 'Nombre del grupo') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del grupo']) !!}

    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('password', 'Contraseña') !!}
    {!! Form::password('password', null, ['class' => 'form-control', 'placeholder' => 'Escriba la contraseña del grupo']) !!}

    @error('password')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>