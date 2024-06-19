<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscricao;
use App\Models\Vaga;

use Illuminate\Support\Facades\Auth;

class PainelController extends Controller
{
    
    public function index () {
        $inscricao = Vaga::get();
        $userInscriptions = Inscricao::where('user_id', Auth::id())->pluck('vaga_id')->toArray();

        return view('paginas/painel/index',compact('inscricao','userInscriptions'));
    }
}
