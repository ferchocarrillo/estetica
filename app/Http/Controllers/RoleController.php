<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Spatie\Permission\Models\Permission; // Asegúrate de importar el modelo de permisos
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        return view('roles.create');
    }

    public function store(Request $request)
    {
        $role = Role::create(['name' => $request->name]);
        return redirect()->route('roles.index');
    }

    public function edit(Role $role)
    {
        // Obtén todos los permisos para pasarlos a la vista
        $permissions = Permission::all();

        // Pasa tanto el rol como los permisos a la vista
        return view('roles.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, Role $role)
    {
        $role->update(['name' => $request->name]);
        return redirect()->route('roles.index');
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index');
    }
}
