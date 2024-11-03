@extends('adminlte::page')
@section('content')



    <h1>Editar Permiso</h1>

    <form action="{{ route('permissions.update', $permission) }}" method="POST">
        @csrf
        @method('PUT') {{-- Necesario para que Laravel entienda que es una actualización --}}
        
        <div>
            <label for="name">Nombre del Permiso:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $permission->name) }}" required>
        </div>

        <div>
            <h3>Permisos Asociados:</h3>
            @foreach ($permissions as $perm)
                <div>
                    <label>
                        <input type="checkbox" name="permissions[]" value="{{ $perm->id }}" 
                            {{ $permission->id == $perm->id ? 'checked' : '' }}>
                        {{ $perm->name }}
                    </label>
                </div>
            @endforeach
        </div>

        <button type="submit">Actualizar Permiso</button>
    </form>

    <a href="{{ route('permissions.index') }}">Regresar a la lista de permisos</a>
@endsection