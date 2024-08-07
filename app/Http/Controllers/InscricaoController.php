<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscricao;
use App\Models\Vaga;
use App\Models\Formulario;
use App\Models\RespInsc;
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

        $inscricoes = Inscricao::with('formulario')->get();

        return view('paginas.inscricao.index', compact(
            'inscricao',
            'countInscricao',
            'countInscricaoPendente',
            'countInscricaoAprovadas',
            'countInscricaoNaoAprovadas',
            'inscricoes'
        ));
    }

    public function edit($id)
    {
        $inscricao = Inscricao::findOrFail($id);
        $inscricoes = Inscricao::with('formulario')->get();

        return view('paginas.inscricao.edit', compact('inscricao','inscricoes'));
    }


    public function store(Request $request, $id)
    {
        // Criação de uma nova inscrição
        $inscricao = new Inscricao();
        $inscricao->user_id = Auth::id();
        $inscricao->vaga_id = $id;
        $inscricao->motivo = ''; // Defina um valor padrão ou remova se não for necessário
        $inscricao->status = '';
        $inscricao->save();

        // Criação de uma nova resposta de inscrição
        $formulario = new RespInsc();
        $formulario->inscricaos_id = $inscricao->id; // Correção: uso do ID da inscrição criada
        $formulario->bancodetalentos = $request->bancodetalentos;
        // Processamento do upload do arquivo
        if ($request->hasFile('anexo')) {
            $file = $request->file('anexo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('anexos', $fileName, 'public');
            $formulario->anexo = $filePath; // Salva o caminho do arquivo
        }
        $formulario->areadisciplina = $request->areadisciplina;
        $formulario->outros = $request->outros;
        $formulario->save();

        // Envio de e-mail de notificação
        Mail::to(Auth::user()->email)->send(new \App\Mail\InscricaoRealizada($inscricao));

        // Redireciona para a rota 'minhas-inscricoes' com uma mensagem de sucesso
        return redirect()->route('minhas-inscricoes')->with('success', 'Inscrição realizada com sucesso!');
    }




    public function minhasInscricoes()
    {

        $inscricao = Inscricao::with(['user', 'vaga'])->get();

        $userInscriptions = Inscricao::where('user_id', Auth::id())->pluck('vaga_id')->toArray();

        return view('paginas.inscricao.minhasInscricoes', compact('inscricao', 'userInscriptions'));
    }
}
