<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaga;
use App\Models\Inscricao;

use Illuminate\Support\Facades\Auth;

class VagaController extends Controller
{
    public function index()
    {
        $editais = Vaga::paginate(10);
        $userInscriptions = Inscricao::where('user_id', Auth::id())->pluck('vaga_id')->toArray();

        return view('paginas.editais.index', compact('editais', 'userInscriptions'));
    }

    public function create()
    {

        return view('paginas.editais.create');
    }




    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ano' => 'required|integer',
            'titulo' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
            'local' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
            'perfil' => 'required|string|max:255',
            'descricao' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'anexo1' => 'nullable|file|max:2048',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date',
            'status' => 'required|string|max:255',
        ]);

        // Save the data
        $editais = new Vaga($validatedData);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images');
            $editais->image = $path;
        }

        if ($request->hasFile('anexo1')) {
            $path = $request->file('anexo1')->store('anexos');
            $editais->anexo1 = $path;
        }

        $editais->save();

        return view('paginas.editais.create');
    }

    public function edit($id)
    {
        $editais = Vaga::findOrFail($id);
        return view('paginas.editais.edit', compact('editais'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'ano' => 'required',
            'titulo' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'local' => 'required',
            'cargo' => 'required',
            'perfil' => 'required',
            'descricao' => 'required',
            'image' => 'nullable|image',
            'anexo1' => 'nullable|file',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date',
            'status' => 'required',
        ]);

        $editais = Vaga::findOrFail($id);
        $editais->update($request->all());

        if ($request->hasFile('image')) {
            $editais->image = $request->file('image')->store('images');
        }

        if ($request->hasFile('anexo1')) {
            $editais->anexo1 = $request->file('anexo1')->store('anexos');
        }

        $editais->save();

        return redirect()->route('editais.index')->with('success', 'Edital atualizado com sucesso!');
    }

    public function show($id)
    {
        $editais = Vaga::findOrFail($id);
        return view('editaiss.show', compact('editais'));
    }
    
}
