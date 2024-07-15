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
        Schema::create('medicos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('nome_completo');
            $table->string('sexo');
            $table->string('cpf')->unique();
            $table->string('rg')->unique();
            $table->date('data_nascimento');
            $table->string('email')->unique();
            $table->string('telefone');
            $table->string('rua');
            $table->integer('numero');
            $table->string('complemento')->nullable();
            $table->string('cidade');
            $table->string('estado');
            $table->string('cep');
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicos');
    }
};
