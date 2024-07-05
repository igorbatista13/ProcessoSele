<?php
// database/factories/DocumentoFactory.php
namespace Database\Factories;

use App\Models\Documento;
use App\Models\Vaga;

use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentoFactory extends Factory
{
    protected $model = Documento::class;

    public function definition()
    {
        return [
            'vagas_id' => Vaga::factory(), // Ajuste conforme seu relacionamento
            'nome' => $this->faker->word,
            'tipo_arquivo' => $this->faker->fileExtension,
            'modelo_arquivo' => $this->faker->fileExtension,
            'anexo' => $this->faker->filePath(),
            'data_inicio' => $this->faker->date(),
            'data_fim' => $this->faker->date(),
        ];
    }
}
