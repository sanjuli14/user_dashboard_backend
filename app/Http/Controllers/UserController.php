<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller {

public function filter($role) {
    $users = User::where('role', $role)->paginate(10); // 10 items por página
    return response()->json($users);
}


public function index() {
    $users = User::paginate(10);
    return response()->json($users);
}
    // Estadísticas
    public function stats() {
        return User::selectRaw('role, count(*) as count')
                ->groupBy('role')
                ->get();
    }
}
