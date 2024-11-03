@extends('adminlte::page')
@section('css')

<style>
    .avatar-stack img {
        width: 25px;
    }
</style>
@stop

@section('content')
    <h1>Usuarios y Roles</h1>

    <table class="table table-bordered data-table" id="redenciones_table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Roles</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @foreach ($user->getRoleNames() as $role)
                            <span>{{ $role }}</span>
                        @endforeach
                    </td>
                    <td>
                        <div class="avatar-stack justify-content-start flex-row">
                        <a href="{{ route('users.edit', $user->id) }}" class="avatar avatar-sm rounded-circle" data-toggle="tooltip" data-original-title="Edit Item">
                            <img alt="Image placeholder" src="{{ asset('img/edit.png') }}">
                        </a>
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