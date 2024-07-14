<?php

namespace App\Models\paciente;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plano_saude extends Model
{
    use HasFactory;

    protected $fillable = [
        'paciente_id',
        'nome_plano',
        'nro_plano',
    ];

    public function paciente()
    {
        return $this->belongsTo(Pacientes::class);
    }
}
