<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questao;
use App\Models\QuestaoPagina1;
use App\Models\QuestaoPagina2;
use App\Models\QuestaoPagina3;
use App\Models\QuestaoPagina4;
use App\Models\QuestaoPagina5;

class QuestaoController extends Controller
{
    public function index($pagina)
    {
        // Determinar o modelo específico com base na página
        $modelo = "App\Models\QuestaoPagina{$pagina}";

        // Obter todas as questões da página específica
        $questoes = $modelo::all();

        return view('paginas.questoes.index', compact('questoes', 'pagina'));
    }

    public function create($pagina)
    {
        return view('paginas.questoes.create', compact('pagina'));
    }

    public function store(Request $request, $pagina)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
       //     'descricao' => 'nullable|string',
        ]);

        // Determinar o modelo específico com base na página
        $modelo = "App\Models\QuestaoPagina{$pagina}";
        $questao = $modelo::create($request->all());

        return redirect()->route('paginas.questoes.index', ['pagina' => $pagina])->with('success', 'Questão criada com sucesso!');
    }

    public function edit($pagina, $id)
    {
        // Determinar o modelo específico com base na página
        $modelo = "App\Models\QuestaoPagina{$pagina}";
    
        // Obter a questão específica
        $questao = $modelo::findOrFail($id);
    
        return view('paginas.questoes.edit', compact('questao', 'pagina'));
    }

    public function update(Request $request, $pagina, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
         //   'descricao' => 'nullable|string',
        ]);

        $modelo = "App\Models\QuestaoPagina{$pagina}";
        $questao = $modelo::findOrFail($id);
        $questao->update($request->all());

        return redirect()->route('paginas.questoes.index', ['pagina' => $pagina])->with('success', 'Questão atualizada com sucesso!');
    }

    public function destroy($pagina, $id)
    {
        $modelo = "App\Models\QuestaoPagina{$pagina}";
        $questao = $modelo::findOrFail($id);
        $questao->delete();

        return back()->with('success', 'Questão deletada com sucesso!');
    }
}
