<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'nome', 'cpf',
        'rg', 'pcd', 'sexo', 'escolaridade',
        'data_nascimento', 'email', 'Orgao',
        'Cargo', 'Endereco', 'Cidade',
        'Estado', 'CEP', 'Telefone',
        'Facebook', 'Instagram', 'Linkedin',
        'Site', 'image', 'tipo',
    ];

    protected $table = 'perfil';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
