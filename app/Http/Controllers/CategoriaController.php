<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    const PAGINATION = 5; // PARA QUE PAGINEE DE 5 EN 5

    public function index(Request $request)
    {
        // $query = Categoria::where('estado', true);

        // if ($request->has('search')) {
        //     $query->where('descripcion', 'LIKE', '%' . $request->search . '%');
        // }

        // $categorias = $query->paginate(5);
        
        $categorias = Categoria::where('estado', true)->paginate(5);
        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|string|max:30'
        ]);

        Categoria::create([
            'descripcion' => $request->input('descripcion'),
            'estado' => True,
        ]);

        return redirect()->route('categorias.index')->with('success', 'Registro realizado correctamente');
    }

    public function edit(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, string $id)
    {
        $categoria = Categoria::findOrFail($id);

        $request->validate([
            'descripcion' => 'nullable|string|max:30',
        ]);

        $categoria->update($request->all());

        return redirect()->route('categorias.index')->with('success', 'Actualización realizada correctamente');
    }

    public function destroy(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->estado = '0';
        $categoria->save();
        return redirect()->route('categorias.index')->with('success', 'Eliminación realizada correctamente');
    }
}
