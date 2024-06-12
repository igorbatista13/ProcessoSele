<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documento;
use Illuminate\Support\Facades\Auth;

class DocumentoController extends Controller
{
    //
    public function store(Request $request)
    {
        $documento = new Documento();
        $documento->user_id = Auth::id();
        $documento->tipo = $request->tipo;
        $documento->arquivo = $request->arquivo->store('documentos');
        $documento->save();

        return redirect()->route('perfil.index');
    }
}
