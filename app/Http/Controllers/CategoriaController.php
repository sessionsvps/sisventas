<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use phpDocumentor\Reflection\PseudoTypes\True_;

class CategoriaController extends Controller
{
    const PAGINATION = 5; // PARA QUE PAGINEE DE 5 EN 5

    public function index(Request $request)
    {
        $buscarpor = $request->get('buscarpor');
        $categorias = Categoria::where('estado', '=', '1')->where('descripcion', 'like', '%' . $buscarpor . '%')->paginate($this::PAGINATION);
        return view('categoria.index', compact('categorias'));
    }

    public function create()
    {
        return view('categoria.create');
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

        return redirect()->route('categorias.index')->with('datos', 'Registro Nuevo Guardado...!');
    }

    public function edit(string $id)
    {
        $docentes = Categoria::findOrFail($id);
        return view('categoria.edit', compact('categorias'));
    }

    public function update(Request $request, string $id)
    {
        $categoria = Categoria::findOrFail($id);

        $request->validate([
            'descripcion' => 'nullable|string|max:30',
        ]);

        $categoria->update($request->all());

        return redirect()->route('categoria.index')->with('success', 'Categoria actualizado exitosamente.');
    }

    public function destroy(string $id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->estado = '0';
        $categoria->save();
        return redirect()->route('categoria.index')->with('success', 'Categoria eliminada exitosamente.');
    }
}
