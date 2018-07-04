@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h2>Lista de Estudiantes</h2>
            @if(Entrust::can('crear_estudiante'))
                <a style="margin-bottom: 15px" class="btn btn-primary" href="{{ route('students.create') }}">Crear Nuevo Estudiante</a>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cedula</th>
                    <th>Edad</th>
                    <th>Accion</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->first_name }}</td>
                        <td>{{ $student->last_name }}</td>
                        <td>{{ $student->dni }}</td>
                        <td>{{ $student->age }}</td>
                        <td>
                            @if(Entrust::can(['editar_student', 'eliminar_estudiante']))
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a style="color: white" class="btn btn-warning" href="{{ route('students.edit', $student) }}">Editar</a>
                                    <a style="color: white" class="btn btn-danger destroy" href="{{ route('admin.students.destroy', $student) }}">
                                        Eliminar
                                    </a>
                                </div>
                            @else
                                No puedes realizar ninguna accion
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('js')

    <script>

        $('.destroy').on('click', function (event) {

            event.preventDefault();

            var confir = confirm('Seguro quiere eliminar');

            if (confir){

                window.open(event.target.href);

            }

        })

    </script>

@stop