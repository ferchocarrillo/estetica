<?php

namespace App\Models;

use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    // Puedes agregar propiedades o métodos personalizados aquí si lo necesitas

    protected $fillable = ['name', 'guard_name']; // Asegúrate de que estos campos son llenables
}
