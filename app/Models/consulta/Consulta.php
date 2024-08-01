<?php

namespace App\Models\Consulta;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Medico\Medicos;
use App\Models\Paciente\Pacientes;

class Consulta extends Model
{
    use HasFactory;

    protected $fillable = [
        'medico_id',
        'paciente_id',
        'nome_paciente',
        'telefone_paciente',
        'data_consulta',
        'hora_consulta',
        'status',
        'anamnese',
        'diagnostico',
        'prescricao',
        'exames',
        'atestado',
    ];

    /**
     * Get the medico associated with the consulta.
     */
    public function medico()
    {
        return $this->belongsTo(Medicos::class); // Atualize o nome da classe se necessário
    }

    /**
     * Get the paciente associated with the consulta.
     */
    public function paciente()
    {
        return $this->belongsTo(Pacientes::class); // Atualize o nome da classe se necessário
    }
}
