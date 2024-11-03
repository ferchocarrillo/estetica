@extends('adminlte::page')
@section('css')

<style>
    .avatar-stack img {
        width: 25px;
    }
</style>
@stop
@section('content')
    <h1>Permisos</h1>
    <a href="{{ route('permissions.create') }}">Crear nuevo permiso</a>
    <table class="table table-bordered data-table" id="redenciones_table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $permission->id }}</td>
                    <td>{{ $permission->name }}</td>
                    <td>
                        <div class="avatar-stack justify-content-start flex-row">
                            <a href="{{ route('permissions.edit', $permission) }}" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Edit Item">
                                <img alt="Image placeholder" src="{{ asset('img/edit.png') }}">
                            </a>
                        <form action="{{ route('permissions.destroy', $permission) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="avatar avatar-sm rounded-circle" style="padding: 0; "><a onclick="return confirm ('¡estas a punto de borrar un plan de la base!, este proceso no tiene reversa');" data-toggle="tooltip" data-original-title="Thash Item">
                                <img alt="Image placeholder" src="{{ asset('img/trash.png') }}">
                            </a></button>
                        </form>
                    </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#redenciones_table').DataTable();
        colReorder: {
            order: [3, 0, 1, 2, 4]
        }
    });

</script>
@stop
