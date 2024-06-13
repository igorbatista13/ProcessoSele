<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestaoPagina3 extends Model
{
    use HasFactory;

    protected $table = 'questoes_pagina3';
    public function questaoable()
    {
        return $this->morphOne('App\Models\Questao', 'questaoable');
    }
}
