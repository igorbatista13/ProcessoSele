<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RespostaPagina1 extends Model
{
    use HasFactory;
    
    protected $fillable = ['inscricao_id', 'questao_id', 'resposta'];
    protected $table = 'respostas_pagina1';
}
