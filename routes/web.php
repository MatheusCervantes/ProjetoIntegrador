<?php

use App\Http\Controllers\admin\RecepcionistaController;
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

Route::get('/painel-adm', function () {
    return view('painel-adm');
})->name('painel-adm');

Route::get('/painel-adm/gestao-paciente', function () {
    return view('gestao-paciente');
})->name('gestao-paciente');

Route::get('/painel-adm/gestao-medico', function () {
    return view('gestao-medico');
})->name('gestao-medico');

Route::get('/painel-adm/gestao-recepcionista', function () {
    return view('gestao-recepcionista');
})->name('gestao-recepcionista');

Route::post('/recepcionista/insert', [RecepcionistaController::class, 'store']);

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
