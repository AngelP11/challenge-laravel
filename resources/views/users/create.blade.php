@extends('layouts.app')

@section('content')
    <h2>Crear Usuario</h2>
    <a style="margin-bottom: 15px;" class="btn btn-primary" href="{{ route('users.index') }}">Volver</a>

    {!! Form::open(['route' => ['users.store'], 'method' => 'POST']) !!}
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="username">Nombre de Usuario</label>
                    <input class="form-control" type="text" name="username" id="username">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="email">Correo Electronico</label>
                    <input class="form-control" type="email" name="email" id="email">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="password">Contraseña</label>
            <input class="form-control" type="password" name="password" id="password">
        </div>

        <div class="form-group">
            <label for="role">Rol</label>
            <select class="form-control" name="role" id="role">
                <option value="1">Administrador</option>
                <option value="2">Estudiante</option>
            </select>
        </div>

        <div class="form-group">
            <label for="student_id">Asignar usuario a</label>
            <select class="form-control" name="student_id" id="student_id">
                @foreach($students as $student)
                    <option value="{{ $student->id  }}">{{ $student->first_name }} {{ $student->last_name }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success" type="submit">Guardar</button>
    {!! Form::close() !!}
@stop