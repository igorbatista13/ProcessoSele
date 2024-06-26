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
use App\Http\Controllers\QuestaoController;


Route::middleware(['auth'])->group(function () {
    //Editais
    Route::resource('editais', EditalController::class)->only(['index', 'create', 'edit', 'store', 'update']);
    Route::get('/editaisativos', [EditalController::class, 'editaisativos']);
    Route::get('/editaisinativos', [EditalController::class, 'editaisinativos']);

    // Inscrições
    Route::resource('inscricoes', InscricaoController::class)->only(['index', 'show', 'create', 'edit', 'store', 'update']);
    Route::post('/inscricoes/{vagaId}', [InscricaoController::class, 'store'])->name('inscricao.store');
    Route::get('/inscricoes/{id}', [InscricaoController::class, 'show'])->name('inscricao.show');
    Route::get('/minhas-inscricoes', [InscricaoController::class, 'minhasInscricoes'])->name('inscricao.minhasInscricoes');
    Route::post('inscricoes/{vaga}', [InscricaoController::class, 'store'])->name('inscricoes.store');
    Route::get('/minhas-inscricoes', [InscricaoController::class, 'minhasInscricoes'])->name('minhas-inscricoes');
    Route::get('inscricao/form/{id}', [EditalController::class, 'formcreate'])->name('inscricao.form');

    //PERFIL
    //   Route::resource('perfil', PerfilController::class)->only(['index', 'update', 'edit']);

    Route::get('/perfil', [PerfilController::class, 'index'])->name('profile.index');
    Route::put('perfil/update', [PerfilController::class, 'update'])->name('perfil.update');
    // PAINEL DE CONTROLE DASHBOARD
    //Route::resource('/painel', PainelController::class)->only(['index', 'update']);

    //Documentos
    Route::resource('documentos', DocumentoController::class)->only(['store']);
    // Curriculo
    Route::resource('curriculos', CurriculoController::class)->only(['store']);

    // QUESTOES
    Route::prefix('questoes')->group(function () {
        Route::get('/{pagina}', [QuestaoController::class, 'index'])->name('paginas.questoes.index');
        Route::get('/{pagina}/create', [QuestaoController::class, 'create'])->name('paginas.questoes.create');
        Route::post('/{pagina}', [QuestaoController::class, 'store'])->name('paginas.questoes.store');
        Route::get('/{pagina}/{id}/edit', [QuestaoController::class, 'edit'])->name('paginas.questoes.edit');
        Route::put('/{pagina}/{id}', [QuestaoController::class, 'update'])->name('paginas.questoes.update');
        Route::delete('/{pagina}/{questao}', [QuestaoController::class, 'destroy'])->name('paginas.questoes.destroy');
    });
  //  Route::get('questoes/{pagina}', [QuestaoController::class, 'index'])->name('questoes.index');
    Route::get('questoes/create', [QuestaoController::class, 'create'])->name('questoes.create');
    Route::post('questoes', [QuestaoController::class, 'store'])->name('questoes.store');
});



// Rotas de admin (avaliador)
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('admin/inscricoes', [InscricaoController::class, 'indexAdmin'])->name('admin.inscricoes.index');
    Route::post('admin/inscricoes/{inscricao}/notificar', [InscricaoController::class, 'notificar'])->name('admin.inscricoes.notificar');
});

Route::resource('/', PainelController::class)->only(['index', 'show']);
Route::get('/editais/{id}', [EditalController::class, 'show'])->name('editais.show');

//Route::get('/formulario', [EditalController::class, 'formulario'])->name('editais.formulario');

Route::post('inscricao/store/{id}', [EditalController::class, 'formstore'])->name('inscricao.store');

require __DIR__ . '/auth.php';
