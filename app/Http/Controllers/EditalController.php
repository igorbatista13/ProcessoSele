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
    public function index()
    {
        $inscricao = Vaga::get();

        $userInscriptions = Inscricao::where('user_id', Auth::id())->pluck('vaga_id')->toArray();

        return view('paginas.site.index',compact('inscricao','userInscriptions'));

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

    public function create($id)
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
