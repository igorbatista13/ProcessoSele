<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image; // Importação correta da facade
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Storage;



class PerfilController extends Controller
{
    public function index()
    {
        $perfil = Auth::user()->perfil;
        return view('paginas.perfil.index_novo', compact('perfil'));
    }

   

    public function update(Request $request, Perfil $perfil)
    {
        
        $user = Auth::user();
        $perfil = $user->perfil;
    
        // Preenche os campos do perfil com todos os dados do request
        $perfil->fill($request->except(['image']));
    
        // Lida com o upload da imagem, se necessário
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $imagePath = public_path('images/perfil') . '/' . $imageName;
    
            // Move a imagem para o diretório especificado
            $requestImage->move(public_path('images/perfil'), $imageName);
    
            $perfil->image = $imageName;
        }
    
        $perfil->save();
    
        return view('paginas.perfil.index_novo')->with('success', 'Perfil atualizado com sucesso!');
    }
    
}