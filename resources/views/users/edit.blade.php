@extends('adminlte::page')

@section('content')
    <h1>Editar Usuario</h1>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required>
        </div>

        <div>
            <label for="email">Correo:</label>
            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required>
        </div>

        <div>
            <h3>Roles:</h3>
            @foreach ($roles as $role)
            <div>
                <label>
                    <input type="checkbox" name="roles[]" value="{{ $role->name }}" 
                        {{ $user->hasRole($role->name) ? 'checked' : '' }}>
                    {{ $role->name }}
                </label>
            </div>
        @endforeach
        </div>

        <button type="submit">Actualizar Usuario</button>
    </form>

    <a href="{{ route('users.index') }}">Regresar a la lista de usuarios</a>
@endsection