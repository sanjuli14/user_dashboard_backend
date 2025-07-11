<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
{
    // Usuario administrador
    \App\Models\User::create([
        'name' => 'Admin',
        'email' => 'admin@example.com',
        'role' => 'manager'
    ]);

    // Usuarios de prueba
    \App\Models\User::factory(50)->create();
}
}
