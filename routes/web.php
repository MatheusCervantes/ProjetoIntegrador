<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});

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

Route::get('/painel-adm/financeiro', function () {
    return view('financeiro');
})->name('financeiro');

Route::get('/painel-adm/relatorio', function () {
    return view('relatorio');
})->name('relatorio');