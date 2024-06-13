<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscricao;
use App\Models\Vaga;
use App\Models\Formulario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


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
        $inscricao->status = 'pendente';
        $inscricao->save();

        // Enviar email de confirmação (opcional)
        Mail::to(Auth::user()->email)->send(new \App\Mail\InscricaoRealizada($inscricao));
        //Mail::to($user->email)->send(new WelcomeMail($user));

        return redirect()->route('minhas-inscricoes')->with('success', 'Inscrição realizada com sucesso!');
    }




    public function minhasInscricoes()
    {

        $inscricao = Inscricao::with(['user', 'vaga'])->get();

        $userInscriptions = Inscricao::where('user_id', Auth::id())->pluck('vaga_id')->toArray();

        return view('paginas.inscricao.minhasInscricoes', compact('inscricao', 'userInscriptions'));
        
    }
}
