<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscricao;
use App\Models\Vaga;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class InscricaoController extends Controller
{
    //
    public function index() {
        
        $inscricao = Inscricao::get();

        $userInscriptions = Inscricao::where('user_id', Auth::id())->pluck('vaga_id')->toArray();

        return view('paginas.inscricao.index',compact('inscricao'));
    }
    public function store(Request $request, $vagaId)
    {
        $vaga = Vaga::findOrFail($vagaId);
        $inscricao = new Inscricao();
        $inscricao->user_id = Auth::id();
        $inscricao->vaga_id = $vaga->id;
        $inscricao->motivo = $vaga->id;
        $inscricao->save();

     //   Mail::to(Auth::user()->email)->send(new \App\Mail\InscricaoRealizada($vaga));

        // return redirect()->route('vagas.index');    
        return back();
    }




    public function minhasInscricoes() {

        $inscricao = Inscricao::with(['user', 'vaga'])->get();

        $userInscriptions = Inscricao::where('user_id', Auth::id())->pluck('vaga_id')->toArray();

        return view('paginas.inscricao.minhasInscricoes',compact('inscricao','userInscriptions'));
    }
}
