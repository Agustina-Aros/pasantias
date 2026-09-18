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

       return redirect()->route('home')->with('success', 'Producto actualizado correctamente');
    }

    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, $id)
{
    // Remplazar coma por punto antes de validar si el usuario usó formato con coma
    if ($request->has('precio')) {
        $request->merge([
            'precio' => str_replace(',', '.', $request->precio)
        ]);
    }

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
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->back()->with('success', 'Producto eliminado correctamente.');
    }
}