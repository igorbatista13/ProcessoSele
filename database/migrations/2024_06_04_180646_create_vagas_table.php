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
            $table->year('ano');
                        //$table->integer('ano', 4);            
            $table->string('titulo');
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('local')->nullable();
            $table->string('cargo')->nullable();
            $table->string('perfil')->nullable();
            $table->text('descricao')->nullable();
            $table->string('image')->nullable();
            $table->string('anexo1')->nullable();
            $table->date('data_inicio')->nullable();
            $table->date('data_fim')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vagas');
    }
};
