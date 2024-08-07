<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespInscTable extends Migration
{
    public function up(): void
    {
        Schema::create('resp_insc', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inscricaos_id')->constrained('inscricaos')->onDelete('cascade');
           // $table->unsignedBigInteger('questoes_id');
            $table->string('bancodetalentos')->nullable();
            $table->string('anexo')->nullable();
            $table->string('areadisciplina')->nullable();
            $table->string('outros')->nullable();
            
            $table->timestamps();
        
         
        });        
    }

    public function down(): void
    {
        Schema::dropIfExists('resp_insc');
    }
}
