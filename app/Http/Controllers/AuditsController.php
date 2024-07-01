<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OwenIt\Auditing\Models\Audit;

class AuditsController extends Controller
{
    
    public function index()
    {
        $audits = Audit::orderBy('created_at', 'desc')->get();
        return view('paginas.auditoria.index', compact('audits'));
    }


}
