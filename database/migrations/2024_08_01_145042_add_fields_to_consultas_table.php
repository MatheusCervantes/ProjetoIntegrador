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
        Schema::table('consultas', function (Blueprint $table) {
            $table->string('plano_saude')->nullable();
            $table->string('peso_paciente')->nullable();
            $table->string('altura_paciente')->nullable();
            $table->string('alergia')->nullable();
            $table->string('cirurgia')->nullable();
            $table->string('medicamento')->nullable();
            $table->string('condicao_saude')->nullable();
            $table->boolean('atividade_fisica')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('consultas', function (Blueprint $table) {
            $table->dropColumn([
                'plano_saude',
                'peso_paciente',
                'altura_paciente',
                'alergia',
                'cirurgia',
                'medicamento',
                'condicao_saude',
                'atividade_fisica',
            ]);
        });
    }
};
