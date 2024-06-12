<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Perfil;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
 // Criar um perfil associado a esse usuário com campos vazios
        $perfil = new Perfil();
        $perfil->user_id = $user->id; // Associe o perfil ao usuário recém-criado
        $perfil->nome = '';
        $perfil->cpf = '';
        $perfil->rg = '';
        $perfil->pcd = '';
        $perfil->sexo = '';
        $perfil->escolaridade = '';
        $perfil->data_nascimento = now();
        $perfil->email = '';
        
        $perfil->Orgao = '';
        $perfil->Cargo = '';
        $perfil->Endereco = '';
        $perfil->Cidade = '';
        $perfil->Estado = '';
        $perfil->CEP = '';
        $perfil->Telefone = '';
        $perfil->Facebook = '';
        $perfil->Instagram = '';
        $perfil->Linkedin = '';
        $perfil->Site = '';
        $perfil->image = ''; // Ou defina como null, dependendo do tipo de campo
        $perfil->Tipo = $request->Tipo;

        // Salvar o perfil associado ao usuário
        $user->perfil()->save($perfil);
        event(new Registered($user));

        Auth::login($user);
        Mail::to($user->email)->send(new WelcomeMail($user));

        return redirect('/');
    }
}
