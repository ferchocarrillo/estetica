<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        // Obtén todos los usuarios con sus roles
        $users = User::with('roles')->get();

        return view('users.index', compact('users'));
    }
    public function edit(User $user)
    {
        $roles = Role::all(); // Obtén todos los roles disponibles
        return view('users.edit', compact('user', 'roles'));
    }
    public function update(Request $request, User $user)
    {
        // Validar la solicitud
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'roles' => 'array',
        ]);
    
        // Actualizar el usuario
        $user->name = $request->name;
        $user->email = $request->email;
    
        // Sincronizar roles
        if ($request->roles) {
            $user->syncRoles($request->roles); // Asegúrate de que esto esté enviando los nombres de los roles
        }
    
        $user->save();
    
        return redirect()->route('users.index')->with('success', 'Usuario actualizado con éxito.');
    }
}
