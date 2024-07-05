<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OwenIt\Auditing\Models\Audit;
use App\Models\Inscricao;
use App\Models\Vaga;
use App\Models\User;
class AuditsController extends Controller
{
    
    public function editais()
    {
        $titulo = 'Auditoria de Editais';
        $audits = Audit::where('auditable_type', Vaga::class)
        ->orderBy('created_at', 'desc')
        ->get();        return view('paginas.auditoria.index', compact('audits','titulo'));
    }
    
    public function inscricoes()
    {
        $titulo = 'Auditoria de Inscrições';
        $audits = Audit::where('auditable_type', Inscricao::class)
        ->orderBy('created_at', 'desc')
        ->get();
                return view('paginas.auditoria.index', compact('audits','titulo'));
    }
    public function users()
    {
        $titulo = 'Auditoria de Usuários';
        $audits = Audit::where('auditable_type', User::class)
        ->orderBy('created_at', 'desc')
        ->get();
                return view('paginas.auditoria.index', compact('audits','titulo'));
    }


}
