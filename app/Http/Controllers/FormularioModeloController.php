<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Formulario;


class FormularioModeloController extends Controller
{
    public function index()
    {
        $titulo = 'Modelo de Formulários';
        $modelo = Formulario::paginate(10);

        return view('paginas.modeloformulario.index', compact('titulo', 'modelo'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
          
        ]);

        // Create a new Vaga instance and fill it with validated data
        $modelo = new Formulario($validatedData);

        $modelo->save();

        return back();
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
        ]);

        $modelo = Formulario::findOrFail($id);
        $modelo->update($request->all());

        $modelo->save();
        return back()->with('success', 'Edital atualizado com sucesso!');
    }




}
