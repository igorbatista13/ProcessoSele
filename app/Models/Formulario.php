<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'inicio',
        'fim',
        // Adicione outros campos conforme necessário
    ];
    
    protected $table = 'modelo_formularios';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function vaga()
    {
        return $this->belongsTo(Vaga::class);
    }
}
