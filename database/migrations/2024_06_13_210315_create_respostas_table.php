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
           // $table->unsignedBigInteger('questoes_id');
            $table->string('bancodetalentos');
            $table->string('anexo');
            $table->string('areadisciplina');
            $table->string('outros');
            
            $table->timestamps();
        
         
        });        
    }

    public function down(): void
    {
        Schema::dropIfExists('respostas');
    }
}
