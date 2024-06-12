<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curriculo;
use Illuminate\Support\Facades\Auth;

class CurriculoController extends Controller
{
    //

    public function store(Request $request)
    {
        $curriculo = new Curriculo();
        $curriculo->user_id = Auth::id();
        $curriculo->arquivo = $request->arquivo->store('curriculos');
        $curriculo->save();

        return redirect()->route('perfil.index');
    }
}
