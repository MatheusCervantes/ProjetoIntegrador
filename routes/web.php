<?php

use App\Http\Controllers\RecepcionistaController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\admin\FinanceiroController;
use App\Http\Controllers\admin\RelatorioController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ConsultaController;
use App\Models\recepcionista\Recepcionista;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

//Criando rota de login
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);
Route::get('/cadastraradm', [UserController::class, 'cadastraradmin']);

//Middleware para verificar se o tipo de usuário é admin
Route::middleware(['auth', 'check.user.type:admin'])->group(function () {
    //OBS, o método index foi removido, pois o método search já supri sua função
    Route::get('/painel-adm', [DashboardController::class, 'index_adm']);

    //Rotas painel-adm gestão recepcionista
    Route::post('/recepcionista/insert', [RecepcionistaController::class, 'store']);

    Route::get('/painel-adm/gestao-recepcionista/{id}', [RecepcionistaController::class, 'show']);

    Route::put('/painel-adm/gestao-recepcionista/edit/{id}', [RecepcionistaController::class, 'update_recepcionista']);

    Route::delete('/painel-adm/gestao-recepcionista/delete/{id}', [RecepcionistaController::class, 'delete_recepcionista']);

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

    Route::get('/painel-adm/relatorio', function () {
        return view('relatorio');
    })->name('relatorio');
});

//Middleware para verificar se o tipo de usuário é medico
Route::middleware(['auth', 'check.user.type:medico'])->group(function () {
    Route::get('/painel-medico', [DashboardController::class, 'index_medico']);

    Route::get('/painel-medico/usuario_logado', [DashboardController::class, 'usuario_logado']);

    Route::get('/painel-medico/meu-perfil', [MedicoController::class, 'perfil_medico'])->name('meu-perfil');

    Route::get('/painel-medico/obter-perfil', [MedicoController::class, 'obterPerfil']);

    Route::put('/painel-medico/salvar-perfil', [MedicoController::class, 'salvarPerfil'])->name('salvarPerfil');

    Route::post('/medico/insert/info', [MedicoController::class, 'salvarinformacao']);

    Route::get('/medico/info/preencher', [MedicoController::class, 'listarinformacao']);

    //Altera senha medico
    Route::put('/painel-medico/alterar_senha', [UserController::class, 'alterar_usuario_medico']);
});

//Middleware para verificar se o tipo de usuário é medico
Route::middleware(['auth', 'check.user.type:recepcionista'])->group(function () {
    //Rotas painel recepcionista 
    Route::get('/painel-recepcionista/consultas-agendar/mostrarpacientes', [ConsultaController::class, 'show_pacientes']);

    Route::get('/painel-recepcionista/consultas-agendar', [ConsultaController::class, 'listar_medicos_disponivel']);

    Route::get('/painel-recepcionista/consultas-agendar/{id}', [ConsultaController::class, 'horariosDisponiveis']);

    Route::get('/dias-disponiveis/{id}', [ConsultaController::class, 'getDiasDisponiveisPorMedicoId']);

    Route::get('/horarios-disponiveis/{id}/{dia}/{data}', [ConsultaController::class, 'horariosDisponiveis']);

    Route::post('/marcar_consulta', [ConsultaController::class, 'marcarConsulta']);

    Route::get('/painel-recepcionista/consultas-agendar', [ConsultaController::class, 'listar_medicos_disponivel']);

    Route::get('/painel-recepcionista/consultas-gerenciar', [ConsultaController::class, 'listar_nomes_medico']);

    Route::get('/listar_consulta/{id}/{data}', [ConsultaController::class, 'listarConsultas']);

    Route::get('/listar_consulta_pesquisa/{id}/{data}', [ConsultaController::class, 'listarConsultasPesquisa']);

    Route::post('/reagendarConsulta/{id}', [ConsultaController::class, 'reagendarConsulta']);

    Route::post('/cancelarConsulta/{id}', [ConsultaController::class, 'cancelarConsulta']);

    Route::get('/confirmarConsulta/{id}', [ConsultaController::class, 'confirmarConsulta']);

    //Gestão paciente painel recepcionista
    Route::post('/paciente/recepcionista/insert', [PacienteController::class, 'store_recepcionista']);

    Route::get('/painel-recepcionista/gestao-paciente/{id}', [PacienteController::class, 'show']);

    Route::put('/painel-recepcionista/gestao-paciente/edit/{id}', [PacienteController::class, 'update_paciente_recepcionista']);

    Route::get('/painel-recepcionista/gestao-paciente', [PacienteController::class, 'search_recepcionista']);

    //Perfil recepcionista
    Route::get('/painel-recepcionista/usuario_logado', [DashboardController::class, 'usuario_logado']);

    Route::get('/painel-recepcionista/meu-perfil', [RecepcionistaController::class, 'perfil_recepcionista'])->name('meu-perfil');

    Route::get('/painel-recepcionista/obter-perfil', [RecepcionistaController::class, 'obterPerfil']);

    Route::put('/painel-recepcionista/salvar-perfil', [RecepcionistaController::class, 'salvarPerfil'])->name('salvarPerfil');

    // Dashboard recepcionista
    Route::get('/painel-recepcionista', function () {
        return view('painel-recepcionista');
    })->name('painel-recepcionista');

    //Altera senha recepcionista
    Route::put('/painel-recepcionista/alterar_senha', [UserController::class, 'alterar_usuario_recepcionista']);
});

Route::get('/painel-medico/agenda', function () {
    return view('agenda');
})->name('agenda');

Route::get('/painel-medico/pacientes', function () {
    return view('pacientes');
})->name('pacientes');

Route::get('/painel-medico/consultas', function () {
    return view('consultas');
})->name('consultas');
