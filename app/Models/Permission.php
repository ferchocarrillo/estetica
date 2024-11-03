<?php

namespace App\Models;

use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends SpatiePermission
{
    // Puedes agregar propiedades o métodos personalizados aquí si lo necesitas

    protected $fillable = ['name', 'guard_name']; // Asegúrate de que estos campos son llenables
}
