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
        Schema::create('modelo_formularios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('descricao')->nullable();
            $table->date('inicio')->nullable();
            $table->date('fim')->nullable();
            $table->timestamps();

            //     $table->foreignId('user_id')->constrained()->onDelete('cascade');
            //     $table->foreignId('vaga_id')->constrained()->onDelete('cascade');
            //  $table->string('cpf');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modelo_formularios');
    }
};
