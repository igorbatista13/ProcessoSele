<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $titulo = 'FAQ';
        $faq = Faq::paginate(10);

        return view('paginas.faq.index', compact('titulo', 'faq'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pergunta' => 'required',
            'resposta' => 'required',
          
        ]);
        $faq = new Faq($validatedData);
        
        $faq->save();
        
        return back();
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'pergunta' => 'required',
            'resposta' => 'required',
        ]);

        $modelo = Faq::findOrFail($id);
        $modelo->update($request->all());

        $modelo->save();
        return back()->with('success', 'FAQ atualizado com sucesso!');
    }

    public function destroy(Request $request) {
        $id = $request->id;
        $faq = Faq::findOrFail($id);
        $faq->delete();
        return back()->with('success', 'FAQ deletado com sucesso!');
    }

}
