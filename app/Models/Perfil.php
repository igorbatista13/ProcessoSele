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

    public function isComplete()
    {
        // Lista de campos obrigatórios (exclua facebook e instagram)
        $requiredFields = [
      //      'nome',
            'cpf',
            'rg',
          //  'pcd',
          //  'sexo',
         //   'escolaridade',
         //   'data_nascimento',
        //    'email',
            'orgao',
            'cargo',
            'telefone',
            'endereco',
            'cidade',
            'estado',
            'CEP',
      //      'image',
        //    'tipo',
        // comprovantes 
        // anexorg - anexo cpf - anexo comprovante de endereco - anexo             
        ];
    
        // Verifique se todos os campos obrigatórios estão preenchidos
        foreach ($requiredFields as $field) {
            if (empty($this->$field)) {
                return false;
            }
        }
    
        return true;
    }
    


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
