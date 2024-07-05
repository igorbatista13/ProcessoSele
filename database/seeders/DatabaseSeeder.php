<?php


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vaga;
use App\Models\Inscricao;
use App\Models\Documento;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
      
       Vaga::factory(10)->create(); // Cria 10 vagas      
     //  Documento::factory(10)->create(); // Cria 10 documentos
       Inscricao::factory(10)->create(); // Cria 10 inscrições    
       User::factory(100)->create(); // Cria 10 inscrições    
    }
}
