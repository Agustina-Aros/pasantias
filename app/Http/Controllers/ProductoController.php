<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        // Reemplazar coma por punto en el precio antes de validar
        if ($request->has('precio')) {
            $request->merge([
                'precio' => str_replace(',', '.', $request->precio)
            ]);
        }

        $request->validate([
            'nombre'      => 'required|string|max:255|unique:productos,nombre',
            'descripcion' => 'nullable|string',
            'precio'      => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
        ],
        [
            'nombre.unique' => 'Este producto ya existe, pruebe con otro nombre.',
        ]);

        Producto::create([
            'nombre'      => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio'      => $request->precio,
            'stock'       => $request->stock,
        ]);

        return redirect()->route('home')->with('success', 'Producto creado correctamente');
    }

    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, $id)
    {
        if ($request->has('precio')) {
            $request->merge([
                'precio' => str_replace(',', '.', $request->precio)
            ]);
        }

        $request->validate([
            // unique excluye el ID actual para poder editar sin cambiar el nombre
            'nombre'      => 'required|string|max:255|unique:productos,nombre,' . $id,
            'descripcion' => 'nullable|string',
            'precio'      => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
        ],
        [
            'nombre.unique' => 'Este producto ya existe, pruebe con otro nombre.',
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

    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->back()->with('success', 'Producto eliminado correctamente.');
    }
}