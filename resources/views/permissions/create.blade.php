@extends('adminlte::page')

@section('content')
    <h1>Crear Permiso</h1>
    <form action="{{ route('permission.store') }}" method="POST">
        @csrf
        <label for="name">Nombre del Permiso:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Guardar</button>
    </form>
@endsection