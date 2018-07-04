@extends('layouts.app')

@section('content')
    <h2>Editar Usuario</h2>
    <a style="margin-bottom: 15px;" class="btn btn-primary" href="{{ route('users.index') }}">Volver</a>

    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}

        <div class="form-group">
            <label for="username">Nombre de Usuario</label>
            <input class="form-control" type="text" name="username" id="username" value="{{ $user->username }}">
        </div>
        <div class="form-group">
            <label for="email">Correo Electronico</label>
            <input class="form-control" type="email" name="email" id="email" value="{{ $user->email }}">
        </div>

        <button class="btn btn-success" type="submit">Guardar cambios</button>
    {!! Form::close() !!}
@stop