<?php

use App\Http\Controllers\admin\RecepcionistaController;
use App\Http\Controllers\admin\PacienteController;
use App\Http\Controllers\admin\MedicoController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\FinanceiroController;
use App\Http\Controllers\admin\RelatorioController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/painel-medico/meu-perfil', function () {
    return view('meu-perfil');
})->name('meu-perfil');

Route::get('/painel-recepcionista/meu-perfil', function () {
    return view('meu-perfil');
})->name('meu-perfil');

Route::get('/painel-adm/gestao-paciente', function () {
    return view('gestao-paciente');
})->name('gestao-paciente');

Route::get('/painel-recepcionista/gestao-paciente', function () {
    return view('gestao-paciente');
})->name('gestao-paciente');

Route::get('/painel-adm/gestao-medico', function () {
    return view('gestao-medico');
})->name('gestao-medico');

Route::get('/painel-recepcionista/consultas-agendar', function () {
    return view('consultas-agendar');
})->name('consultas-agendar');

Route::get('/painel-recepcionista/consultas-gerenciar', function () {
    return view('consultas-gerenciar');
})->name('consultas-gerenciar');

//Criando rota de login
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);

//Middleware para verificar se o tipo de usuário é admin
Route::middleware(['auth', 'check.user.type:admin'])->group(function () {
    //OBS, o método index foi removido, pois o método search já supri sua função
    Route::get('/painel-adm', [DashboardController::class, 'index']);

    //Rotas painel-adm gestão recepcionista
    Route::post('/recepcionista/insert', [RecepcionistaController::class, 'store']);

    Route::get('/painel-adm/gestao-recepcionista/{id}', [RecepcionistaController::class, 'show']);

    Route::put('/painel-adm/gestao-recepcionista/edit/{id}', [RecepcionistaController::class, 'update_repcionista']);

    Route::delete('/painel-adm/gestao-recepcionista/delete/{id}', [RecepcionistaController::class, 'delete_repcionista']);

    Route::get('/painel-adm/gestao-recepcionista', [RecepcionistaController::class, 'search'])->name('recepcionistas.search');

    //Rotas painel-adm gestão paciente
    Route::post('/paciente/insert', [PacienteController::class, 'store']);

    Route::get('/painel-adm/gestao-paciente/{id}', [PacienteController::class, 'show']);

    Route::put('/painel-adm/gestao-paciente/edit/{id}', [PacienteController::class, 'update_paciente']);

    Route::delete('/painel-adm/gestao-paciente/delete/{id}', [PacienteController::class, 'delete_paciente']);

    Route::get('/painel-adm/gestao-paciente', [PacienteController::class, 'search'])->name('pacientes.search');

    //Rotas painel-adm gestão medico
    Route::post('/medico/insert', [MedicoController::class, 'store']);

    Route::get('/painel-adm/gestao-medico/{id}', [MedicoController::class, 'show']);

    Route::put('/painel-adm/gestao-medico/edit/{id}', [MedicoController::class, 'update_medico']);

    Route::delete('/painel-adm/gestao-medico/delete/{id}', [MedicoController::class, 'delete_medico']);

    Route::get('/painel-adm/gestao-medico', [MedicoController::class, 'search'])->name('medicos.search');

    //Altera senha adm
    Route::put('/painel-adm/alterar_senha', [UserController::class, 'alterar_senha_adm']);

    //Rotas painel-adm financeiro
    Route::post('/financeiro/insert', [FinanceiroController::class, 'store']);

    Route::get('/painel-adm/financeiro/{id}', [FinanceiroController::class, 'show']);

    Route::put('/painel-adm/financeiro/edit/{id}', [FinanceiroController::class, 'update_financeiro']);

    Route::delete('/painel-adm/financeiro/delete/{id}', [FinanceiroController::class, 'delete_financeiro']);

    Route::get('/painel-adm/financeiro', [FinanceiroController::class, 'search'])->name('financeiro.search');

    Route::get('/api/financeiro-dados', [FinanceiroController::class, 'dadosParaGrafico']);

    Route::get('/relatorio/financeiro', [RelatorioController::class, 'relatorio_financeiro'])->name('relatorio.financeiro');

    Route::get('/painel-adm/gerar-relatorio');
});

//Middleware para verificar se o tipo de usuário é medico
Route::middleware(['auth', 'check.user.type:medico'])->group(function () {
});

//Middleware para verificar se o tipo de usuário é medico
Route::middleware(['auth', 'check.user.type:recepcionista'])->group(function () {
});

Route::get('/painel-adm/relatorio', function () {
    return view('relatorio');
})->name('relatorio');

Route::get('/painel-medico', function () {
    return view('painel-medico');
})->name('painel-medico');

Route::get('/painel-recepcionista', function () {
    return view('painel-recepcionista');
})->name('painel-recepcionista');

Route::get('/painel-medico/agenda', function () {
    return view('agenda');
})->name('agenda');

Route::get('/painel-medico/pacientes', function () {
    return view('pacientes');
})->name('pacientes');

Route::get('/painel-medico/consultas', function () {
    return view('consultas');
})->name('consultas');