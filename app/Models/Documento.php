<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;
use OwenIt\Auditing\Auditable;

class Documento extends Model implements AuditableContract
{
    use HasFactory;

    protected $fillable = ['vagas_id', 'nome', 'tipo_arquivo','modelo_arquivo','anexo','data_inicio','data_fim'];
    use Auditable;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function vaga()
    {
        return $this->belongsTo(Vaga::class);
    }
    
}
