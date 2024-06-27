<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespostasTable extends Migration
{
    public function up(): void
    {
        Schema::create('respostas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inscricaos_id')->constrained('inscricaos')->onDelete('cascade');
            $table->unsignedBigInteger('questoes_id');
            $table->text('resposta');
            $table->timestamps();
        
            // Adicionando chaves estrangeiras para questoes_pagina1 e questoes_pagina2
        //    $table->foreign('questoes_id')->references('id')->on('questoes_pagina1')->onDelete('cascade');
         //   $table->foreign('questoes_id')->references('id')->on('questoes_pagina2')->onDelete('cascade');
            // $table->foreign('questoes_id')->references('id')->on('questoes_pagina3')->onDelete('cascade');
            // $table->foreign('questoes_id')->references('id')->on('questoes_pagina4')->onDelete('cascade');
            // $table->foreign('questoes_id')->references('id')->on('questoes_pagina5')->onDelete('cascade');
        });        
    }

    public function down(): void
    {
        Schema::dropIfExists('respostas');
    }
}
