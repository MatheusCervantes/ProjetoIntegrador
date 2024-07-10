@extends('layouts.menu-adm')

@section('title', 'Painel Administrador')

@section('content')
<div class="container mt-4">
    <div class="d-flex flex-column">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800 me-3">Relatórios</h1>
            </div>
            <form id="formRelatorioDados">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow-sm bg-light p-3 py-4">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="row p-2 align-items-center">
                                            <div class="col-xxl-4 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                                <div class="form-group mb-3">
                                                    <label for="relatorio-dados" class="form-label font-resumo">Relatório de Dados Cadastrados</label>
                                                    <select id="relatorio-dados" name="relatorio-dados" class="form-select" required>
                                                        <option disabled selected>Selecione o relatório...</option>
                                                        <option value="pacientes">Pacientes</option>
                                                        <option value="medicos">Médicos</option>
                                                        <option value="recepcionistas">Recepcionistas</option>
                                                        <option value="financeiro">Financeiro</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-auto col-lg-4 col-md-6 col-sm-12 col-12">
                                                <div class="form-group mb-3">
                                                    <label for="periodo-relatorio-dados" class="pb-2">Período<span class="required-field">*</span></label>
                                                    <div id="periodoDataRelatorioDados" class="btn border bg-white me-3 form-control">
                                                        <ion-icon name="calendar-clear-outline" class="fs-5 text-body pe-1 align-middle"></ion-icon>
                                                        <span class="align-middle"></span>
                                                        <ion-icon name="caret-down" class="fs-5 align-middle"></ion-icon>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-auto col-lg-4 col-md-6 col-sm-6 col-6">
                                                <div class="form-group mb-3">
                                                    <label for="tipo-relatorio-dados" class="form-label">Tipo<span class="required-field">*</span></label>
                                                    <ion-icon name="help-circle-outline" class="ps-2 cursor custom-tooltip" data-toggle="tooltip" data-placement="top" title="O tipo simples possui apenas alguns dados, enquanto o tipo completo inclui todos os dados."></ion-icon>
                                                    <select id="tipo-relatorio-dados" name="tipo-relatorio-dados" class="form-select" required>
                                                        <option disabled selected>Selecione o tipo...</option>
                                                        <option value="simples">Simples</option>
                                                        <option value="completo">Completo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xxl-2 col-xl-auto col-lg-auto col-md-6 col-sm-6 col-6 pt-2 ps-4">
                                                <div class="form-group mt-2">
                                                    <button type="button" class="btn btn-primary shadow-sm btnGerarRelatorioDados">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <ion-icon name="download-outline" class="fs-5 pe-2"></ion-icon>
                                                            <span class="me-2">Gerar Relatório</span>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
            <form id="formRelatorioConsultas" class="mt-5">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow-sm bg-light p-3 py-4">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="row p-2 align-items-center">
                                            <div class="col-xxl-4 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                                <div class="form-group mb-3">
                                                    <label for="relatorio-consultas" class="form-label">Relatório de Consultas</label>
                                                    <select id="relatorio-consultas" name="relatorio-consultas" class="form-select" required>
                                                        <option disabled selected>Selecione o médico...</option>
                                                        <option value="...">...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-auto col-lg-4 col-md-6 col-sm-12 col-12">
                                                <div class="form-group mb-3">
                                                    <label for="periodo-relatorio-consultas" class="pb-2">Período<span class="required-field">*</span></label>
                                                    <div id="periodoDataRelatorioConsultas" class="btn border bg-white me-3 form-control">
                                                        <ion-icon name="calendar-clear-outline" class="fs-5 text-body pe-1 align-middle"></ion-icon>
                                                        <span class="align-middle"></span>
                                                        <ion-icon name="caret-down" class="fs-5 align-middle"></ion-icon>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-auto col-lg-4 col-md-6 col-sm-6 col-6">
                                                <div class="form-group mb-3">
                                                    <label for="tipo-relatorio-consultas" class="form-label">Tipo<span class="required-field">*</span></label>
                                                    <ion-icon name="help-circle-outline" class="ps-2 cursor custom-tooltip" data-toggle="tooltip" data-placement="top" title="O tipo simples possui apenas alguns dados, enquanto o tipo completo inclui todos os dados."></ion-icon>
                                                    <select id="tipo-relatorio-consultas" name="tipo-relatorio-consultas" class="form-select" required>
                                                        <option disabled selected>Selecione o tipo...</option>
                                                        <option value="simples">Simples</option>
                                                        <option value="completo">Completo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xxl-2 col-xl-auto col-lg-auto col-md-6 col-sm-6 col-6 pt-2 ps-4">
                                                <div class="form-group mt-2">
                                                    <button type="button" class="btn btn-primary shadow-sm btnGerarRelatorioConsultas">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <ion-icon name="download-outline" class="fs-5 pe-2"></ion-icon>
                                                            <span class="me-2">Gerar Relatório</span>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection