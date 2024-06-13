<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaga;
use App\Models\Inscricao;
use App\Models\formulario;

use Illuminate\Support\Facades\Auth;

class EditalController extends Controller
{
    public function index()
    {
        $inscricao = Vaga::get();

        $userInscriptions = Inscricao::where('user_id', Auth::id())->pluck('vaga_id')->toArray();

        return view('paginas.site.index',compact('inscricao','userInscriptions'));

    }
   
    public function formulario() {

        return view('paginas.formulario.index');
    }

    public function create($id)
    {
        $vaga = Vaga::findOrFail($id);

        $editalId = $id;
        return view('paginas.formulario.index', compact('editalId','vaga'));
    }




}
