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
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('medico_id')->constrained('medicos');
            $table->foreignId('paciente_id')->constrained('pacientes')->nullable();
            $table->string('nome_paciente');
            $table->string('telefone_paciente');           
            $table->date('data_consulta');
            $table->time('hora_consulta');
            $table->string('status');
            $table->string('anamnese')->nullable();
            $table->string('diagnostico')->nullable();
            $table->string('prescricao')->nullable();
            $table->string('exames')->nullable();
            $table->string('atestado')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultas');
    }
};
