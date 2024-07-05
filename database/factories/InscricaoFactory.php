<?php
// database/factories/InscricaoFactory.php
namespace Database\Factories;

use App\Models\Inscricao;
use App\Models\Vaga;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class InscricaoFactory extends Factory
{
    protected $model = Inscricao::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(), // Ajuste conforme seu relacionamento
            'vaga_id' => Vaga::factory(),
            'motivo' => $this->faker->paragraph,
            'status' => $this->faker->randomElement(['pendente', 'aprovado', 'rejeitado']),
        ];
    }
}
