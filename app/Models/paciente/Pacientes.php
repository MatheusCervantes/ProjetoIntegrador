<?php

namespace App\Models\paciente;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\paciente\Plano_saude;

class Pacientes extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_completo',
        'sexo',
        'cpf',
        'rg',
        'data_nascimento',
        'email',
        'telefone',
        'rua',
        'numero',
        'complemento',
        'cidade',
        'estado',
        'cep',
        'plano',
    ];

    public function planoSaude()
    {
        return $this->hasOne(Plano_saude::class, 'paciente_id', 'id');
    }
}
