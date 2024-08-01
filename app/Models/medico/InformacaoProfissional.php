<?php

namespace App\Models\medico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class InformacaoProfissional extends Model
{
    use HasFactory;

    protected $table = 'informacaoprofissional';

    protected $fillable = [
        'medico_id',
        'crm',
        'especialidades',
        'atuacao',
        'duracao_consulta',
        'intevalo_consulta',
        'valor_consulta',
        'plano_saude',
        'domingo',
        'domingo_inicio',
        'domingo_fim',
        'domingo_almoco_inicio',
        'domingo_almoco_fim',
        'segunda',
        'segunda_inicio',
        'segunda_fim',
        'segunda_almoco_inicio',
        'segunda_almoco_fim',
        'terca',
        'terca_inicio',
        'terca_fim',
        'terca_almoco_inicio',
        'terca_almoco_fim',
        'quarta',
        'quarta_inicio',
        'quarta_fim',
        'quarta_almoco_inicio',
        'quarta_almoco_fim',
        'quinta',
        'quinta_inicio',
        'quinta_fim',
        'quinta_almoco_inicio',
        'quinta_almoco_fim',
        'sexta',
        'sexta_inicio',
        'sexta_fim',
        'sexta_almoco_inicio',
        'sexta_almoco_fim',
        'sabado',
        'sabado_inicio',
        'sabado_fim',
        'sabado_almoco_inicio',
        'sabado_almoco_fim'
    ];

    protected $casts = [
        'duracao_consulta' => 'integer',
        'intevalo_consulta' => 'integer',
        'valor_consulta' => 'double',
        'domingo' => 'boolean',
        'segunda' => 'boolean',
        'terca' => 'boolean',
        'quarta' => 'boolean',
        'quinta' => 'boolean',
        'sexta' => 'boolean',
        'sabado' => 'boolean',
    ];

    // Define a relationship with the Medico model
    public function medico()
    {
        return $this->belongsTo(Medicos::class);
    }

    public function gerarHorarios($dia)
    {
        $diaSemana = strtolower($dia);
        if (!$this->$diaSemana) {
            return [];
        }

        $horaInicio = Carbon::parse($this->{$diaSemana . '_inicio'});
        $horaFim = Carbon::parse($this->{$diaSemana . '_fim'});
        $almocoInicio = Carbon::parse($this->{$diaSemana . '_almoco_inicio'});
        $almocoFim = Carbon::parse($this->{$diaSemana . '_almoco_fim'});

        $duracaoConsulta = $this->duracao_consulta;
        $intervaloConsulta = $this->intevalo_consulta;

        $horarios = [];

        while ($horaInicio->addMinutes($duracaoConsulta + $intervaloConsulta)->lessThanOrEqualTo($horaFim)) {
            if ($horaInicio->between($almocoInicio, $almocoFim)) {
                $horaInicio = $almocoFim;
            }
            $horarios[] = $horaInicio->format('H:i');
            $horaInicio->addMinutes($duracaoConsulta + $intervaloConsulta);
        }

        return $horarios;
    }
}
