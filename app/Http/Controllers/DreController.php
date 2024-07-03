<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dre;
// use App\Models\Cidade;
// use App\Models\Estado;


class DreController extends Controller
{
    public function index()
    {

        $dre = Dre::all();
        $search = request('search');

        if ($search) {
            $dre = Dre::where([['Nome', 'like', '%' . $search . '%']])->get();
        } else {
            $dre = Dre::all();
        }
        return view('paginas.dre.index', compact('dre', 'search'));
    }


    public function store(Request $request)
    {

        Dre::create($request->all());

        toast('Produto criado com sucesso!', 'success');

        return redirect('/dre')->with('success', 'Produto criado com sucesso!');
    }

    public function update(Request $request, Dre $dre)
    {

        $dre->Nome       = $request->Nome;
        $dre->Tel   = $request->Tel;
        $dre->Email     = $request->Email;
        $dre->Endereco      = $request->Endereco;
        $dre->Numero = $request->Numero;
        $dre->Bairro = $request->Bairro;
        $dre->Cep = $request->Cep;


        $dre->update();



        return redirect('/dre')->with('edit', 'DRE editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dre $dre)
    {
        $dre->delete();

        return redirect()->route('produtos.index')
            ->with('delete', 'Produto deletado com sucesso!');
    }

    // public function export () {


    //     return Excel::download(new ProdutoExport, 'Produtos.xlsx');
    //   //  return Excel::download(new Empresa_Cliente, 'users.xlsx');
    // }
}
