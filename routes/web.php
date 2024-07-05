<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



use App\Http\Controllers\{

  VagaController,
  PerfilController,
  InscricaoController,
  DocumentoController,
  CurriculoController,

  PainelController,
  EditalController,
  QuestaoController,
  AuditsController,
  FaqController,
  FormularioModeloController,
  UserController,
  RoleController,
  SuporteController
};

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
  Route::get('inscricao/form/1/{id}', [EditalController::class, 'formcreate1'])->name('inscricao1.form');
  Route::get('inscricao/form/2/{id}', [EditalController::class, 'formcreate2'])->name('inscricao2.form');
  Route::get('inscricao/form/3/{id}', [EditalController::class, 'formcreate3'])->name('inscricao3.form');
  Route::get('inscricao/form/4/{id}', [EditalController::class, 'formcreate4'])->name('inscricao4.form');

  //PERFIL
  //   Route::resource('perfil', PerfilController::class)->only(['index', 'update', 'edit']);

  Route::get('/perfil', [PerfilController::class, 'index'])->name('profile.index');
  Route::put('perfil/update', [PerfilController::class, 'update'])->name('perfil.update');
  // PAINEL DE CONTROLE DASHBOARD
  //Route::resource('/painel', PainelController::class)->only(['index', 'update']);

  //Documentos
  //    Route::resource('documentos', DocumentoController::class)->only(['store']);
  Route::post('/documentos/create', [DocumentoController::class, 'create'])->name('documentos.create');
  Route::put('/documentos/{id}', [DocumentoController::class, 'update'])->name('documentos.update');

  // Curriculo
  Route::resource('curriculos', CurriculoController::class)->only(['store']);

  // Auditoria
  Route::get('audits/editais', [AuditsController::class, 'editais'])->name('audits.editais');
  Route::get('audits/inscricoes', [AuditsController::class, 'inscricoes'])->name('audits.inscricoes');
  Route::get('audits/users', [AuditsController::class, 'users'])->name('audits.users');

  // Modelo Formulario (1 a 4)
  Route::resource('modeloformulario', FormularioModeloController::class)->only(['index', 'create', 'edit', 'store', 'update']);

  // FAQ
  Route::resource('faq', FaqController::class)->only(['index', 'create', 'edit', 'store', 'show', 'update', 'destroy']);

  // Usuários
  Route::resource('usuarios', UserController::class);


  // Suporte TI
  Route::get('suporte', [SuporteController::class, 'index'])->name('suporte.index');


  // Perfil / Regras
  //   Route::resource('roles',                     RoleController::class);



  // QUESTOES
  Route::prefix('questoes')->group(function () {
    Route::get('/{pagina}', [QuestaoController::class, 'index'])->name('paginas.questoes.index');
    Route::get('/{pagina}/create', [QuestaoController::class, 'create'])->name('paginas.questoes.create');
    Route::post('/{pagina}', [QuestaoController::class, 'store'])->name('paginas.questoes.store');
    Route::get('/{pagina}/{id}/edit', [QuestaoController::class, 'edit'])->name('paginas.questoes.edit');
    Route::put('/{pagina}/{id}', [QuestaoController::class, 'update'])->name('paginas.questoes.update');
    Route::delete('/{pagina}/{questao}', [QuestaoController::class, 'destroy'])->name('paginas.questoes.destroy');
  });
  Route::resource('roles',                     RoleController::class);

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
