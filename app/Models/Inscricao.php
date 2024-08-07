<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;
use OwenIt\Auditing\Auditable;

class Inscricao extends Model implements AuditableContract

{
    use HasFactory;

    protected $fillable = ['user_id', 'vaga_id', 'motivo', 'status'];
    use Auditable;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function vaga()
    {
        return $this->belongsTo(Vaga::class);
    }

    public function formulario()
    {
        return $this->hasOne(RespInsc::class, 'inscricaos_id');
    }
}
