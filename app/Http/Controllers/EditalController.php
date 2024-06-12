<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaga;
use App\Models\Inscricao;

use Illuminate\Support\Facades\Auth;

class EditalController extends Controller
{
    public function index()
    {
        $inscricao = Vaga::get();

        $userInscriptions = Inscricao::where('user_id', Auth::id())->pluck('vaga_id')->toArray();

        return view('paginas.site.index',compact('inscricao','userInscriptions'));

    }
   


}
