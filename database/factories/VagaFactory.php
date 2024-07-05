<?php
// database/factories/VagaFactory.php
namespace Database\Factories;

use App\Models\Vaga;
use App\Models\Formulario;
use Illuminate\Database\Eloquent\Factories\Factory;

class VagaFactory extends Factory
{
    protected $model = Vaga::class;

    public function definition()
    {
        return [
            'modelo_formulario_id' => '1', // Ajuste conforme seu relacionamento
            'ano' => $this->faker->year,
            'titulo' => $this->faker->sentence,
            'descricao' => $this->faker->paragraph,
            'cidade' => $this->faker->city,
            'estado' => $this->faker->state,
            'local' => $this->faker->address,
            'cargo' => $this->faker->jobTitle,
            'perfil' => $this->faker->word,
            'dre' => $this->faker->word,
            'image' => $this->faker->imageUrl(),
            'anexo1' => $this->faker->filePath(),
            'data_inicio' => $this->faker->date(),
            'data_fim' => $this->faker->date(),
            'status' => $this->faker->randomElement(['ativo', 'inativo']),
            'novostatus' => $this->faker->randomElement(['pendente', 'aprovado']),
            'etapa' => $this->faker->randomElement(['inicial', 'final']),
        ];
    }
}
