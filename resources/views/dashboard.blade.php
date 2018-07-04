@extends('layouts.app')

@section('content')
    <h1>Dashboard</h1>
    <hr>

    <h2>Informacion del Usuario</h2>
    <div class="info-user">
        <ul>
            <li>Username: {{ $user->username }}</li>
            <li>Nombre: {{ $user->student->first_name }}</li>
            <li>Apellido: {{ $user->student->last_name }}</li>
            <li>Cedula: {{ $user->student->dni }}</li>
            <li>Edad: {{ $user->student->age }}</li>
        </ul>
    </div>
@endsection
