<?php

use App\Http\Controllers\admin\RecepcionistaController;
use App\Http\Controllers\admin\PacienteController;
use App\Http\Controllers\admin\MedicoController;
use App\Http\Controllers\admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/painel-medico/meu-perfil', function () {
    return view('meu-perfil');
})->name('meu-perfil');

Route::get('/painel-medico/meu-perfil', function () {
    return view('meu-perfil');
})->name('meu-perfil');

Route::get('/painel-adm/gestao-paciente', function () {
    return view('gestao-paciente');
})->name('gestao-paciente');

Route::get('/painel-adm/gestao-medico', function () {
    return view('gestao-medico');
})->name('gestao-medico');

//Rota dashboard painel-adm
Route::get('/painel-adm', [DashboardController::class, 'index']);

//Rotas painel-adm gestão recepcionista
Route::get('/painel-adm/gestao-recepcionista', [RecepcionistaController::class, 'index']);

Route::post('/recepcionista/insert', [RecepcionistaController::class, 'store']);

Route::get('/painel-adm/gestao-recepcionista/{id}', [RecepcionistaController::class, 'show']);

Route::put('/painel-adm/gestao-recepcionista/edit/{id}', [RecepcionistaController::class, 'update_repcionista']);

Route::delete('/painel-adm/gestao-recepcionista/delete/{id}', [RecepcionistaController::class, 'delete_repcionista']);

Route::get('/painel-adm/gestao-recepcionista', [RecepcionistaController::class, 'search'])->name('recepcionistas.search');

//Rotas painel-adm gestão paciente
Route::get('/painel-adm/gestao-paciente', [PacienteController::class, 'index']);

Route::post('/paciente/insert', [PacienteController::class, 'store']);

Route::get('/painel-adm/gestao-paciente/{id}', [PacienteController::class, 'show']);

Route::put('/painel-adm/gestao-paciente/edit/{id}', [PacienteController::class, 'update_paciente']);

Route::delete('/painel-adm/gestao-paciente/delete/{id}', [PacienteController::class, 'delete_paciente']);

Route::get('/painel-adm/gestao-paciente', [PacienteController::class, 'search'])->name('pacientes.search');

//Rotas painel-adm gestão medico
Route::get('/painel-adm/gestao-medico', [MedicoController::class, 'index']);

Route::post('/medico/insert', [MedicoController::class, 'store']);

Route::get('/painel-adm/gestao-medico/{id}', [MedicoController::class, 'show']);

Route::put('/painel-adm/gestao-medico/edit/{id}', [MedicoController::class, 'update_medico']);

Route::delete('/painel-adm/gestao-medico/delete/{id}', [MedicoController::class, 'delete_medico']);

Route::get('/painel-adm/gestao-medico', [MedicoController::class, 'search'])->name('medicos.search');

Route::get('/painel-adm/financeiro', function () {
    return view('financeiro');
})->name('financeiro');

Route::get('/painel-adm/relatorio', function () {
    return view('relatorio');
})->name('relatorio');

Route::get('/painel-medico', function () {
    return view('painel-medico');
})->name('painel-medico');

Route::get('/painel-medico/agenda', function () {
    return view('agenda');
})->name('agenda');

Route::get('/painel-medico/pacientes', function () {
    return view('pacientes');
})->name('pacientes');

Route::get('/painel-medico/consultas', function () {
    return view('consultas');
})->name('consultas');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
