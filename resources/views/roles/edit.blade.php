@extends('adminlte::page')
@section('content')
    <h1>Editar Rol</h1>

    <form action="{{ route('roles.update', $role) }}" method="POST">
        @csrf
        @method('PUT') {{-- Necesario para que Laravel entienda que es una actualización --}}

        <div>
            <label for="name">Nombre del Rol:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $role->name) }}" required>
        </div>

        <div>
            <h3>Permisos Asociados:</h3>
            @foreach ($permissions as $permission)
                <div>
                    <label>
                        <input type="checkbox" name="permissions[]" value="{{ $permission->id }}" 
                            {{ $role->permissions->contains($permission) ? 'checked' : '' }}>
                        {{ $permission->name }}
                    </label>
                </div>
            @endforeach
        </div>

        <button type="submit">Actualizar Rol</button>
    </form>

    <a href="{{ route('roles.index') }}">Regresar a la lista de roles</a>
@endsection