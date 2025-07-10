<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller {
    // Listar todos los usuarios
    public function index() {
        return User::all();
    }

    // Filtrar por rol
    public function filter($role) {
        return User::where('role', $role)->get();
    }

    // Estadísticas
    public function stats() {
        return User::selectRaw('role, count(*) as count')
                ->groupBy('role')
                ->get();
    }
}
