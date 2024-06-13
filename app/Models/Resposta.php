<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
    use HasFactory;

    protected $fillable = ['inscricaos_id', 'questoes_id', 'resposta'];
    
    protected $table = 'respostas';

    public function inscricao()
    {
        return $this->belongsTo(Inscricao::class);
    }

    public function questao()
    {
        return $this->belongsTo(Questao::class);
    }
}
