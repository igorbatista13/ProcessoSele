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
        Schema::create('perfil', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
        //Dados pessoais
            $table->string('nome');
            $table->string('cpf')->nullable();
            $table->string('rg')->nullable();
            $table->string('pcd')->nullable();
            $table->string('sexo')->nullable();
            $table->string('escolaridade')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->string('email')->nullable();                    
            $table->string('orgao')->nullable();
            $table->string('cargo')->nullable();
            $table->string('telefone')->nullable();
        // Endereço pessoal
            $table->string('endereco')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('CEP')->nullable();
        
        // Rede Social
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('site')->nullable();
        
        // Imagem    
            $table->string('image')->nullable();
        
            $table->string('tipo')->nullable(); // ???
        // Pontos GPE
            $table->string('pontos')->nullable();
            
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfil');
    }
};
