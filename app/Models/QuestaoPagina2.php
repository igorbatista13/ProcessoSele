<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestaoPagina2 extends Model
{
    use HasFactory;

    protected $table = 'questoes_pagina2';
    public function questaoable()
    {
        return $this->morphOne('App\Models\Questao', 'questaoable');
    }
}
