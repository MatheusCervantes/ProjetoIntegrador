<?php

namespace App\Models\medico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Medicos extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
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
        'foto',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
