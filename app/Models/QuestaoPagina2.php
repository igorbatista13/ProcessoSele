<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestaoPagina2 extends Model
{
    use HasFactory;

    protected $table = 'questoes_pagina2';
    protected $fillable = [
        'titulo',
    //    'descricao',
        // Adicione outros campos que possam ser preenchidos
    ];
}
