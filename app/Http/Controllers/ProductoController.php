<?php

namespace App\Http\Controllers;

use App\Models\producto; // Ajustar a Producto si la 'P' es mayúscula
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Carga la vista independiente de edición
    public function edit($id)
    {
        $producto = producto::findOrFail($id);
        return view('productos.edit', compact('producto'));
    }

    // Procesa y actualiza en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'stock'  => 'required|integer',
        ]);

        $prod = producto::findOrFail($id);
        $prod->update([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'stock'  => $request->stock,
        ]);

        return redirect()->route('home')->with('success', 'Producto actualizado correctamente');
    }
}