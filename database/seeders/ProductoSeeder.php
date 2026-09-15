<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        Producto::create([
            'nombre'      => 'air 300',
            'descripcion' => 'zapatilla deportiva de la marca Nike',
            'precio'      => 234.00,
            'stock'       => 10,
        ]);
    }
}