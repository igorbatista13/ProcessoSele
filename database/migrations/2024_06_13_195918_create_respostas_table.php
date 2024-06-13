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
            $table->foreignId('inscricaos_id')->constrained()->onDelete('cascade');
            $table->foreignId('questoes_id')->constrained()->onDelete('cascade');
            $table->text('resposta');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('respostas');
    }
}
