<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;

use Illuminate\Support\Facades\Hash;

use App\Models\User;

use Intervention\Image\Facades\Image; // Certifique-se de importar a facade corretamente



class PerfilController extends Controller
{
    public function index()
    {
        $perfil = Auth::user()->perfil;
        return view('paginas.perfil.index', compact('perfil'));
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

            // Usa a facade Image para manipular a imagem
            $image = Image::make($requestImage->path());

            // Redimensiona a imagem para as dimensões desejadas
            $largura = 225;
            $altura = 225;
            $image->resize($largura, $altura, function ($constraint) {
                $constraint->aspectRatio(); // Mantém a proporção da imagem
                $constraint->upsize(); // Evita que a imagem seja dimensionada para cima
            });

            // Salva a imagem redimensionada
            $image->save($imagePath);

            $perfil->image = $imageName;
        }

        $perfil->save();


        return view('paginas.perfil.index')->with('success', 'Perfil atualizado com sucesso!');

    }
}
