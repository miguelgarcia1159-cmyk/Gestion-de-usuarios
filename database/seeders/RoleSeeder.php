<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create([
            'nombre' => 'Admin',
        ]);

        Role::create([
            'nombre' => 'Usuario Adm',
        ]);

        Role::create([
            'nombre' => 'Usuario Aca',
        ]);
    }
}