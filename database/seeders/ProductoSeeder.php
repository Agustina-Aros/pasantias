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

        Producto::create([
            'nombre'=>'flichX',
            'descripcion'=>'zapatilla urbana de la marca Sketcher',
            'precio'=>144,
            'stock'=>8,
        ]);

        Producto::create([
            'nombre'=>'mocachi city',
            'descripcion'=>'zapato formal de la marca ShoeStore',
            'precio'=>424,
            'stock'=>3,
        ]);

        Producto::create([
            'nombre'=>'Magna004',
            'descripcion'=>'zapato borcego de la marca Briganti',
            'precio'=>234,
            'stock'=>15,
        ]);

        Producto::create([
            'nombre'=>'aconcagua II',
            'descripcion'=>'zapatilla de la marca Montagne',
            'precio'=>634,
            'stock'=>20,
        ]);

        Producto::create([
            'nombre'      => 'Ultraboost 22',
            'descripcion' => 'zapatilla de running de la marca Adidas',
            'precio'      => 310.00,
            'stock'       => 12,
        ]);

        Producto::create([
            'nombre'      => 'Old Skool Classic',
            'descripcion' => 'zapatilla urbana de la marca Vans',
            'precio'      => 120.00,
            'stock'       => 25,
        ]);

        Producto::create([
            'nombre'      => 'Chuck Taylor All Star',
            'descripcion' => 'zapatilla de lona de la marca Converse',
            'precio'      => 95.50,
            'stock'       => 18,
        ]);

        Producto::create([
            'nombre'      => 'GoreTex Summit',
            'descripcion' => 'bota de trekking de la marca Salomon',
            'precio'      => 540.00,
            'stock'       => 6,
        ]);

        Producto::create([
            'nombre'      => 'RS-X Efekt',
            'descripcion' => 'zapatilla deportiva de la marca Puma',
            'precio'      => 180.00,
            'stock'       => 14,
        ]);

        Producto::create([
            'nombre'      => 'Oxford Premium',
            'descripcion' => 'zapato formal de vestir de la marca Florsheim',
            'precio'      => 290.00,
            'stock'       => 5,
        ]);

        Producto::create([
            'nombre'      => 'Classic Clog',
            'descripcion' => 'sandalia de descanso de la marca Crocs',
            'precio'      => 65.00,
            'stock'       => 30,
        ]);

        Producto::create([
            'nombre'      => 'Gel-Nimbus 25',
            'descripcion' => 'zapatilla de running de la marca Asics',
            'precio'      => 280.00,
            'stock'       => 9,
        ]);

        Producto::create([
            'nombre'      => 'Suede Classic',
            'descripcion' => 'zapatilla urbana de la marca Puma',
            'precio'      => 110.00,
            'stock'       => 22,
        ]);

        Producto::create([
            'nombre'      => 'TERREX Swift R3',
            'descripcion' => 'bota de senderismo de la marca Adidas',
            'precio'      => 450.00,
            'stock'       => 7,
        ]);

        Producto::create([
            'nombre'      => '574 Core',
            'descripcion' => 'zapatilla urbana de la marca New Balance',
            'precio'      => 160.00,
            'stock'       => 15,
        ]);

        Producto::create([
            'nombre'      => 'Metcon 8',
            'descripcion' => 'zapatilla de entrenamiento de la marca Nike',
            'precio'      => 220.00,
            'stock'       => 11,
        ]);

        Producto::create([
            'nombre'      => 'Derby Executive',
            'descripcion' => 'zapato formal de cuero de la marca Briganti',
            'precio'      => 380.00,
            'stock'       => 4,
        ]);

        Producto::create([
            'nombre'      => 'Speedcross 6',
            'descripcion' => 'zapatilla de trail running de la marca Salomon',
            'precio'      => 330.00,
            'stock'       => 8,
        ]);

        Producto::create([
            'nombre'      => 'Slip-On Pro',
            'descripcion' => 'zapatilla casual de la marca Vans',
            'precio'      => 105.00,
            'stock'       => 19,
        ]);
    }
}