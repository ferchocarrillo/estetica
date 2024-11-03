@extends('adminlte::page')

@section('content')
    <h1>Crear Rol</h1>
    <form action="{{ route('roles.store') }}" method="POST">
        @csrf
        <label for="name">Nombre del Rol:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Guardar</button>
    </form>
@endsection