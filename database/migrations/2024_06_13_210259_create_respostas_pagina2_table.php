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
        Schema::create('respostas_pagina2', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inscricao_id')->constrained('inscricaos')->onDelete('cascade');
            $table->foreignId('questao_id')->constrained('questoes_pagina2')->onDelete('cascade');
            $table->text('resposta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respostas_pagina2');
    }
};
