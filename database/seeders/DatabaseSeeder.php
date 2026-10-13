<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Crear los roles
        $this->call(RoleSeeder::class);

        // Administrador principal
        User::create([
            'name' => 'Miguel Ángel García Mondragón',
            'email' => 'admin@cucea.edu.mx',
            'password' => Hash::make('password'),
            'role_id' => 1,
        ]);

        // 10 usuarios de prueba
        User::factory(10)->create([
            'role_id' => 2,
        ]);
    }
}