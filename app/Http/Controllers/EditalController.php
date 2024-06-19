<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaga;
use App\Models\Inscricao;
use App\Models\formulario;
use App\Models\Questao;
use App\Models\QuestaoPagina1;
use App\Models\QuestaoPagina2;
use App\Models\QuestaoPagina3;
use App\Models\QuestaoPagina4;
use App\Models\QuestaoPagina5;

use App\Models\RespostaPagina1;
use App\Models\RespostaPagina2;
use App\Models\RespostaPagina3;
use App\Models\RespostaPagina4;
use App\Models\RespostaPagina5;

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

        return view('paginas.editais.index', compact('editais', 'userInscriptions','status'));
    }
    public function editaisativos()
    {
        $status = 'ATIVOS';
        $editais = Vaga::where('status', '=', 'Ativo')->paginate(10);
        $userInscriptions = Inscricao::where('user_id', Auth::id())->pluck('vaga_id')->toArray();

        return view('paginas.editais.index', compact('editais', 'userInscriptions','status'));
    }
    public function editaisinativos()
    {
        $status = 'INATIVOS';
        $editais = Vaga::where('status', '=', 'Encerrado')->paginate(10);
        $userInscriptions = Inscricao::where('user_id', Auth::id())->pluck('vaga_id')->toArray();

        return view('paginas.editais.index', compact('editais', 'userInscriptions','status'));
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
        $userInscriptions = Inscricao::where('user_id', Auth::id())->pluck('vaga_id')->toArray();

        return view('paginas.site.show', compact('editais','userInscriptions'));
    }

    public function formulario($id) {

        $questoesPagina1 = QuestaoPagina1::all();
        $questoesPagina2 = QuestaoPagina2::all();
        $questoesPagina3 = QuestaoPagina3::all();
        $questoesPagina4 = QuestaoPagina4::all();
        $questoesPagina5 = QuestaoPagina5::all();

        return view('formulario.formulario', compact('id', 'questoesPagina1', 'questoesPagina2', 'questoesPagina3', 'questoesPagina4', 'questoesPagina5'));
    
   //     return view('paginas.formulario.index');
    }

    public function formcreate($id)
    {

        $vaga = Vaga::findOrFail($id);
        $questoes = Questao::all();
        $questoesPagina1 = QuestaoPagina1::all();
        $questoesPagina2 = QuestaoPagina2::all();
        $questoesPagina3 = QuestaoPagina3::all();
        $questoesPagina4 = QuestaoPagina4::all();
        $questoesPagina5 = QuestaoPagina5::all();


        $editalId = $id;
        return view('paginas.formulario.index', compact('editalId','vaga','questoesPagina1', 'questoesPagina2', 'questoesPagina3', 'questoesPagina4', 'questoesPagina5'));
    }




}
