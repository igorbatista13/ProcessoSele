<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RespInsc extends Model
{
    use HasFactory;

    protected $fillable = ['inscricaos_id','bancodetalentos','anexo','areadisciplina','outros'];
    
    protected $table = 'resp_insc';

    // public function inscricao()
    // {
    //     return $this->belongsTo(Inscricao::class);
    // }

    public function questao()
    {
        return $this->belongsTo(Questao::class);
    }
    public function inscricao()
    {
        return $this->belongsTo(Inscricao::class, 'inscricaos_id');
    }
    
}
