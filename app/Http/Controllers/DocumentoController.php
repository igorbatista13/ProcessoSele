<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documento;
use Illuminate\Support\Facades\Auth;

class DocumentoController extends Controller
{
    //
    public function store2(Request $request)
    {
        $documento = new Documento();
        $documento->user_id = Auth::id();
        $documento->tipo = $request->tipo;
        $documento->arquivo = $request->arquivo->store('documentos');
        $documento->save();

        return redirect()->route('perfil.index');
    }

    public function create(Request $request)
    {
        // Validação dos dados recebidos do formulário
        $request->validate([
            'vagas_id' => 'required|exists:vagas,id',
            'tipo_arquivo' => 'required|string',
            'nome' => 'required|string|max:255',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date|after_or_equal:data_inicio',
            'anexo' => 'nullable|file|mimes:pdf,xlsx,docx,doc',
        ]);

        // Processa o upload do anexo, se fornecido
        $anexoPath = null;
        if ($request->hasFile('anexo')) {
            $anexoPath = $request->file('anexo')->store('public/anexos');
        }

        // Cria um novo documento
        $documento = Documento::create([
            'vagas_id' => $request->input('vagas_id'),
            'tipo_arquivo' => $request->input('tipo_arquivo'),
            'nome' => $request->input('nome'),
            'data_inicio' => $request->input('data_inicio'),
            'data_fim' => $request->input('data_fim'),
            'anexo' => $anexoPath, // Salva o caminho do anexo se existir
        ]);
        return back()->with('success', 'Documento atualizado com sucesso!');
    }

    public function update(Request $request, $id)
    {
        // Validação dos dados recebidos do formulário
        $request->validate([
            'vagas_id' => 'required|exists:vagas,id',
            'tipo_arquivo' => 'required|string',
            'nome' => 'required|string|max:255',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date|after_or_equal:data_inicio',
            'anexo' => 'nullable|file|mimes:pdf,xlsx,docx,doc',
        ]);

        // Busca o documento pelo ID ou cria um novo se não existir
        $documento = Documento::create(
            ['id' => $id],
            [
                'vagas_id' => $request->input('vagas_id'),
                'tipo_arquivo' => $request->input('tipo_arquivo'),
                'nome' => $request->input('nome'),
                'data_inicio' => $request->input('data_inicio'),
                'data_fim' => $request->input('data_fim'),
            ]
        );

        // Verifica se há um arquivo anexo e faz o upload
        if ($request->hasFile('anexo')) {
            $path = $request->file('anexo')->store('public/anexos');
            $documento->anexo = $path;
            $documento->save();
        }

        // Redireciona ou retorna uma resposta
        return back()->with('success', 'Documento atualizado com sucesso!');
    }
}
