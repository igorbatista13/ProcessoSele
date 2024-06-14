<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    protected $fillable = ['titulo', 'descricao'];

    public function questaoable()
    {
        return $this->morphTo();
    }
    protected $table = 'questoes';

}

