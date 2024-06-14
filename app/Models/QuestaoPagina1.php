<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestaoPagina1 extends Model
{
    use HasFactory;

    protected $table = 'questoes_pagina1';
    protected $fillable = [
        'titulo',
    //    'descricao',
        // Adicione outros campos que possam ser preenchidos
    ];
    // public function questaoable()
    // {
    //     return $this->morphOne('App\Models\Questao', 'questaoable');
    // }
}
