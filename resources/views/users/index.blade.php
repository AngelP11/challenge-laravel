@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h2>Lista de Usuarios</h2>
            @if(Entrust::can('crear_usuario'))
                <a style="margin-bottom: 15px" class="btn btn-primary" href="{{ route('users.create') }}">Crear Nuevo Usuario</a>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre de Usuario</th>
                        <th>Correo Electronico</th>
                        <th>Role</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->roles[0]->display_name }}</td>
                            <td>
                                @if(Entrust::can(['editar_usuario', 'eliminar_usuario']))
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a style="color: white" class="btn btn-warning" href="{{ route('users.edit', $user) }}">Editar</a>
                                        <a style="color: white" class="btn btn-danger destroy" href="{{ route('admin.users.destroy', $user) }}">
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
