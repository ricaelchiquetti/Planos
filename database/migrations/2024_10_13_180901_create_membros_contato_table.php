<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\TipoContatoMembroFamilia;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('membros_contato', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('membro_id'); 
            $table->smallInteger('tipo'); 
            $table->string('valor');
            
            $table->foreign('membro_id') 
                  ->references('id')
                  ->on('membros_familias') 
                  ->onDelete('cascade');
            
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('membros_contato');
    }
};
