<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    use HasFactory;
    protected $fillable = [
        'ano',     'titulo',        'cidade',
        'estado',   'local',        'cargo',
        'perfil',   'descricao',    'image',
        'anexo1',   'data_inicio',  'data_fim',
        'status',
    ];

    public function inscricoes()
    {
        return $this->hasMany(Inscricao::class);
    }
}
