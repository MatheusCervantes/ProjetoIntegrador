<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recepcionista extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
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

    /**
     * Relationships
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}