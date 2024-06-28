<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaga;
use App\Models\Inscricao;
use App\Models\Formulario;

use Illuminate\Support\Facades\Auth;

class EditalController extends Controller
{
    // public function index()
    // {
    //     $inscricao = Vaga::get();

    //     $userInscriptions = Inscricao::where('user_id', Auth::id())->pluck('vaga_id')->toArray();

    //     return view('paginas.site.index',compact('inscricao','userInscriptions'));

    // }
    public function index()
    {
        $status = 'Todos';
        $editais = Vaga::paginate(10);
        $userInscriptions = Inscricao::where('user_id', Auth::id())->pluck('vaga_id')->toArray();

        return view('paginas.editais.index', compact('editais', 'userInscriptions', 'status'));
    }
    public function editaisativos()
    {
        $status = 'ATIVOS';
        $editais = Vaga::where('status', '=', 'Ativo')->paginate(10);
        $userInscriptions = Inscricao::where('user_id', Auth::id())->pluck('vaga_id')->toArray();

        return view('paginas.editais.index', compact('editais', 'userInscriptions', 'status'));
    }
    public function editaisinativos()
    {
        $status = 'INATIVOS';
        $editais = Vaga::where('status', '=', 'Encerrado')->paginate(10);
        $userInscriptions = Inscricao::where('user_id', Auth::id())->pluck('vaga_id')->toArray();

        return view('paginas.editais.index', compact('editais', 'userInscriptions', 'status'));
    }


    public function create()
    {
        $modeloformulario = Formulario::get();
        return view('paginas.editais.create', compact('modeloformulario'));
    }




    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'modelo_formulario_id' => 'required|integer',
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

        // Create a new Vaga instance and fill it with validated data
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

        return back();
    }

    public function edit($id)
    {
        $editais = Vaga::findOrFail($id);
        return view('paginas.editais.edit', compact('editais'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'modelo_formulario_id' => 'required|integer',
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
        $userInscriptions = Inscricao::where('user_id', Auth::id())->pluck('vaga_id')->toArray();

        return view('paginas.site.show', compact('editais', 'userInscriptions'));
    }

    public function formulario($id)
    {



        return view('formulario.formulario', compact('id'));

        //     return view('paginas.formulario.index');
    }

    public function formcreate($id)
    {

        $vaga = Vaga::findOrFail($id);



        $editalId = $id;
        return view('paginas.formulario.index', compact('editalId', 'vaga'));
    }
}
