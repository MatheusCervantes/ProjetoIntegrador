<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\medico\Medicos;
use App\Models\paciente\Pacientes;
use App\Models\Recepcionista;

class DashboardController extends Controller
{
    public function index()
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
}
