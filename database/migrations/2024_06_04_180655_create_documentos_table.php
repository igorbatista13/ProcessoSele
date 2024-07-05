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
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
      //      $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('vagas_id')->constrained()->onDelete('cascade');
            $table->string('nome');
            $table->string('tipo_arquivo')->nullable();
            $table->string('modelo_arquivo')->nullable();
            $table->string('anexo')->nullable();
            $table->date('data_inicio')->nullable();
            $table->date('data_fim')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentos');
    }
};
