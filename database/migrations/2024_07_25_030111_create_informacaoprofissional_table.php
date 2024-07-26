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
        Schema::create('informacaoprofissional', function (Blueprint $table) {
            $table->id();
            $table->foreignId('medico_id')->unique()->constrained('medicos')->onDelete('cascade');

            $table->string('crm')->unique();
            $table->string('especialidades');
            $table->string('atuacao');
            $table->integer('duracao_consulta');
            $table->integer('intevalo_consulta');
            $table->double('valor_consulta');
            $table->string('plano_saude')->nullable();

            $table->boolean('domingo')->nullable();
            $table->time('domingo_inicio')->nullable();
            $table->time('domingo_fim')->nullable();
            $table->time('domingo_almoco_inicio')->nullable();
            $table->time('domingo_almoco_fim')->nullable();

            $table->boolean('segunda')->nullable();
            $table->time('segunda_inicio')->nullable();
            $table->time('segunda_fim')->nullable();
            $table->time('segunda_almoco_inicio')->nullable();
            $table->time('segunda_almoco_fim')->nullable();

            $table->boolean('terca')->nullable();
            $table->time('terca_inicio')->nullable();
            $table->time('terca_fim')->nullable();
            $table->time('terca_almoco_inicio')->nullable();
            $table->time('terca_almoco_fim')->nullable();

            $table->boolean('quarta')->nullable();
            $table->time('quarta_inicio')->nullable();
            $table->time('quarta_fim')->nullable();
            $table->time('quarta_almoco_inicio')->nullable();
            $table->time('quarta_almoco_fim')->nullable();

            $table->boolean('quinta')->nullable();
            $table->time('quinta_inicio')->nullable();
            $table->time('quinta_fim')->nullable();
            $table->time('quinta_almoco_inicio')->nullable();
            $table->time('quinta_almoco_fim')->nullable();

            $table->boolean('sexta')->nullable();
            $table->time('sexta_inicio')->nullable();
            $table->time('sexta_fim')->nullable();
            $table->time('sexta_almoco_inicio')->nullable();
            $table->time('sexta_almoco_fim')->nullable();

            $table->boolean('sabado')->nullable();
            $table->time('sabado_inicio')->nullable();
            $table->time('sabado_fim')->nullable();
            $table->time('sabado_almoco_inicio')->nullable();
            $table->time('sabado_almoco_fim')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('informacaoprofissional');
    }
};
