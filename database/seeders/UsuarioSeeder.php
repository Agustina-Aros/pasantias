<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsuarioSeeder extends Seeder
{
    public function run(): void
    {
        Usuario::create([
            'nombre'   => 'Agus',
            'email'    => 'agus@gmail.com',
            'password' => hash::make('123456789'),
        ]);

        Usuario::create([
            'nombre'   => 'María Fernández',
            'email'    => 'maria.fernandez@gmail.com',
            'password' => Hash::make('contraseña2024'),
        ]);

        Usuario::create([
            'nombre'   => 'Juan Pérez',
            'email'    => 'juan.perez@gmail.com',
            'password' => Hash::make('contraseña123'),
        ]);

        Usuario::create([
            'nombre'   => 'Lucía Torres',
            'email'    => 'lucia.torres@gmail.com',
            'password' => Hash::make('luciatorres'),
        ]);

        Usuario::create([
            'nombre'   => 'Gonzalo Ramírez',
            'email'    => 'gonzalo.ramirez@gmail.com',
            'password' => Hash::make('gonzaRamirez'),
        ]);

        Usuario::create([
            'nombre'   => 'Valentina Rossi',
            'email'    => 'valentina.rossi@gmail.com',
            'password' => Hash::make('valentina2024P'),
        ]);

        Usuario::create([
            'nombre'   => 'Santiago López',
            'email'    => 'santiago.lopez@gmail.com',
            'password' => Hash::make('santiLopezSegura'),
        ]);
    }
}