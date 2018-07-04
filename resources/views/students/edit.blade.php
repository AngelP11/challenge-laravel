@extends('layouts.app')

@section('content')
    <h2>Editar Estudiante</h2>
    <a style="margin-bottom: 15px;" class="btn btn-primary" href="{{ route('students.index') }}">Volver</a>

    {!! Form::open(['route' => ['students.update', $student], 'method' => 'PUT']) !!}
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="first_name">Nombre</label>
                <input class="form-control" type="text" name="first_name" id="first_name" value="{{ $student->first_name }}">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="last_name">Apellido</label>
                <input class="form-control" type="text" name="last_name" id="last_name" value="{{ $student->last_name }}">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="dni">Cedula</label>
        <input class="form-control" type="number" name="dni" id="dni" value="{{ $student->dni }}">
    </div>

    <div class="form-group">
        <label for="age">Edad</label>
        <input class="form-control" type="number" name="age" id="age" value="{{ $student->age }}">
    </div>

    <button class="btn btn-success" type="submit">Guardar</button>
    {!! Form::close() !!}
@stop