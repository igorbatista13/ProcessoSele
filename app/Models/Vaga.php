<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;
use OwenIt\Auditing\Auditable;


class Vaga extends Model implements AuditableContract
{

    use HasFactory;
    protected $fillable = [
        'modelo_formulario_id', 'ano',     'titulo',        'cidade',
        'estado',   'local',        'cargo',
        'perfil',   'descricao',    'image',
        'anexo1',   'data_inicio',  'data_fim',
        'status',   
    ];
    use Auditable;

    public function inscricoes()
    {
        return $this->hasMany(Inscricao::class);
    }
}
