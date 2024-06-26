<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscricao;
use App\Models\Vaga;
use App\Models\Formulario;
use App\Models\Resposta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

//use App\Models\Questao;
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

class InscricaoController extends Controller
{
    //
    public function index()
    {
        $countInscricao = Inscricao::count();
        $countInscricaoPendente = Inscricao::where('status', 'pendente')->count();
        $countInscricaoAprovadas = Inscricao::where('status', 'pendente')->count();
        $countInscricaoNaoAprovadas = Inscricao::where('status', 'pendente')->count();


        $inscricao = Inscricao::get();

        $userInscriptions = Inscricao::where('user_id', Auth::id())->pluck('vaga_id')->toArray();

        return view('paginas.inscricao.index', compact('inscricao',
        'countInscricao', 'countInscricaoPendente', 'countInscricaoAprovadas', 'countInscricaoNaoAprovadas'
    ));
    }

        public function edit($id)
        {
            $inscricao = Inscricao::findOrFail($id);
            return view('paginas.inscricao.edit', compact('inscricao'));
        }
    

        public function store(Request $request, $id)
        {
            $request->validate([
                'nome' => 'required|string|max:255',
                'cpf' => 'required|string|max:14',
                // Adicione outras validações necessárias
            ]);
        
            $formulario = new Formulario();
            $formulario->user_id = Auth::id();
            $formulario->vaga_id = $id;
            $formulario->nome = $request->nome;
            $formulario->cpf = $request->cpf;
            $formulario->save();
        
            $inscricao = new Inscricao();
            $inscricao->user_id = Auth::id();
            $inscricao->vaga_id = $id;
            $inscricao->motivo = ''; // Defina um valor padrão ou remova se não for necessário
            $inscricao->status = '';
            $inscricao->save();
        
            // Salvar respostas para questões da página 1
            foreach ($request->except(['nome', 'cpf', 'motivo', '_token']) as $key => $value) {
                if (strpos($key, 'questao_pagina1_') === 0) {
                    $questaoId = substr($key, 16); // Tamanho de 'questao_pagina1_'
        
                    // Verifique se a questão existe na tabela QuestaoPagina1
                    $questao = QuestaoPagina1::find($questaoId);
                    if ($questao) {
                        Resposta::create([
                            'inscricaos_id' => $inscricao->id,
                            'questoes_id' => $questaoId,
                            'resposta' => $value,
                        ]);
                    } else {
                        return redirect()->back()->with('error', 'Questão da página 1 não encontrada.');
                    }
                }
            }
        
            // Salvar respostas para questões da página 2
            foreach ($request->except(['nome', 'cpf', 'motivo', '_token']) as $key => $value) {
                if (strpos($key, 'questao_pagina2_') === 0) {
                    $questaoId = substr($key, 16); // Tamanho de 'questao_pagina2_'
        
                    // Verifique se a questão existe na tabela QuestaoPagina2
                    $questao = QuestaoPagina2::find($questaoId);
                    if ($questao) {
                        Resposta::create([
                            'inscricaos_id' => $inscricao->id,
                            'questoes_id' => $questaoId,
                            'resposta' => $value,
                        ]);
                    } else {
                        return redirect()->back()->with('error', 'Questão da página 2 não encontrada.');
                    }
                }
            }
        
            // Enviar email de confirmação (opcional)
            Mail::to(Auth::user()->email)->send(new \App\Mail\InscricaoRealizada($inscricao));
        
            return redirect()->route('minhas-inscricoes')->with('success', 'Inscrição realizada com sucesso!');
        }
        



    public function minhasInscricoes()
    {

        $inscricao = Inscricao::with(['user', 'vaga'])->get();

        $userInscriptions = Inscricao::where('user_id', Auth::id())->pluck('vaga_id')->toArray();

        return view('paginas.inscricao.minhasInscricoes', compact('inscricao', 'userInscriptions'));
        
    }
}
