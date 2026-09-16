<?php

namespace App\Http\Controllers;

use App\Models\Producto; // Primera letra en mayúscula por convención PSR-4
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Muestra el formulario para crear un nuevo producto
    public function create()
    {
        return view('productos.create');
    }

    // Guarda el nuevo producto en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre'      => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio'      => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
        ]);

        Producto::create([
            'nombre'      => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio'      => $request->precio,
            'stock'       => $request->stock,
        ]);

        return redirect()->route('home')->with('success', 'Producto creado correctamente');
    }

    // Carga la vista independiente de edición
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.edit', compact('producto'));
    }

    // Procesa y actualiza en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre'      => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio'      => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
        ]);

        $prod = Producto::findOrFail($id);
        $prod->update([
            'nombre'      => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio'      => $request->precio,
            'stock'       => $request->stock,
        ]);

        return redirect()->route('home')->with('success', 'Producto actualizado correctamente');
    }
}