<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vagas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('modelo_formulario_id')->constrained()->onDelete('cascade');
            $table->year('ano');
            $table->string('titulo');
            $table->text('descricao')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('local')->nullable();
            $table->string('cargo')->nullable();
            $table->string('perfil')->nullable();
            $table->string('dre')->nullable();
            $table->string('image')->nullable();
            $table->string('anexo1')->nullable();
            $table->date('data_inicio')->nullable();
            $table->date('data_fim')->nullable();
            $table->string('status')->nullable();
            $table->string('etapa')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vagas');
    }
};
