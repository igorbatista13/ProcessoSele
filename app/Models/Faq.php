<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $fillable = [
        'pergunta',
        'resposta',

        // Adicione outros campos conforme necessário
    ];
    
    protected $table = 'faq';

}
