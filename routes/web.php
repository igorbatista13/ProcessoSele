<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VagaController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\InscricaoController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\CurriculoController;
use App\Http\Controllers\PainelController;
use App\Http\Controllers\EditalController;


Route::middleware(['auth'])->group(function () {
    //Editais
    Route::resource('editais', VagaController::class)->only(['index', 'show', 'create', 'edit', 'store', 'update']);

    // Inscrições
    Route::get('/inscricoes', [InscricaoController::class, 'index'])->name('inscricoes.index');
    Route::post('/inscricoes/{vagaId}', [InscricaoController::class, 'store'])->name('inscricao.store');
    Route::get('/inscricoes/{id}', [InscricaoController::class, 'show'])->name('inscricao.show');
    Route::get('/minhas-inscricoes', [InscricaoController::class, 'minhasInscricoes'])->name('inscricao.minhasInscricoes');
    Route::post('inscricoes/{vaga}', [InscricaoController::class, 'store'])->name('inscricoes.store');
    Route::get('/minhas-inscricoes', [InscricaoController::class, 'minhasInscricoes'])->name('minhas-inscricoes');

    //PERFIL
 //   Route::resource('perfil', PerfilController::class)->only(['index', 'update', 'edit']);
      
      Route::get('/perfil', [PerfilController::class, 'index'])->name('profile.index');
      Route::put('perfil/update', [PerfilController::class, 'update'])->name('perfil.update'); 
    // PAINEL DE CONTROLE DASHBOARD
    Route::resource('/painel', PainelController::class)->only(['index', 'update']);

    //Documentos
    Route::resource('documentos', DocumentoController::class)->only(['store']);
    // Curriculo
    Route::resource('curriculos', CurriculoController::class)->only(['store']);
});



// Rotas de admin (avaliador)
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('admin/inscricoes', [InscricaoController::class, 'indexAdmin'])->name('admin.inscricoes.index');
    Route::post('admin/inscricoes/{inscricao}/notificar', [InscricaoController::class, 'notificar'])->name('admin.inscricoes.notificar');
});

Route::resource('editais', VagaController::class)->only(['index', 'show']);
Route::resource('/', EditalController::class)->only(['index', 'show']);

//Route::get('/formulario', [EditalController::class, 'formulario'])->name('editais.formulario');

Route::get('inscricao/form/{id}', [EditalController::class, 'create'])->name('inscricao.form');
Route::post('inscricao/store/{id}', [EditalController::class, 'store'])->name('inscricao.store');

require __DIR__ . '/auth.php';
