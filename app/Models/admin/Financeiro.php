<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financeiro extends Model
{
    use HasFactory;

    protected $table = 'financeiro';

    protected $fillable = [
        'data_hora',
        'movimentacao',
        'valor',
        'tipo',
    ];
}
