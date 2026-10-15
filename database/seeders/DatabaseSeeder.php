<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Ejecutar el seeder de Roles primero
        $this->call([
            RoleSeeder::class,
        ]);

        // 2. Crear tu usuario Administrador para pruebas
        User::factory()->create([
            'name' => 'Miguel Administrador',
            'email' => 'admin@cucea.edu.mx',
            'password' => bcrypt('password123'), // Tu contraseña de acceso
            'role_id' => 1, // El ID 1 corresponde a 'Admin' creado arriba
        ]);

        // 3. (Opcional) Crear 10 usuarios falsos para que tu tabla no esté vacía al diseñar las vistas
        User::factory(10)->create([
            'role_id' => 2, // Les asignamos rol de 'Usuario Adm' por defecto
        ]);
    }
}