<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {
    public function run() {
        $roles = ['manager', 'revisor', 'comprador'];
        for ($i = 0; $i < 100; $i++) {
            User::create([
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'role' => $roles[array_rand($roles)],
            ]);
        }
    }
}
