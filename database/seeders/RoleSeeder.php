<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role; // <-- MUY IMPORTANTE IMPORTAR EL MODELO

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create(['nombre' => 'Admin']);
        Role::create(['nombre' => 'Usuario Adm']);
        Role::create(['nombre' => 'Usuario Aca']);
    }
}