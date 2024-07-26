<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\medico\Medicos;
use App\Models\paciente\Pacientes;
use Illuminate\Support\Facades\Auth;
use App\Models\recepcionista\Recepcionista;

class DashboardController extends Controller
{
    public function index_adm()
    {
        $countMedicos = Medicos::count();
        $countPacientes = Pacientes::count();
        $countRecepcionistas = Recepcionista::count();
        return view('painel-adm', [
            'countMedicos' => $countMedicos,
            'countPacientes' => $countPacientes,
            'countRecepcionistas' => $countRecepcionistas
        ]);
    }

    public function index_medico()
    {
        return view('painel-medico');
    }

    public function usuario_logado()
    {
        $usuario = Auth::user();
        return response()->json(['usuario' => $usuario->username]);
    }
}
