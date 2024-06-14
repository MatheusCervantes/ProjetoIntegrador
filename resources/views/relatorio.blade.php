@extends('layouts.menu-adm')

@section('title', 'Painel Administrador')

@section('content')
<div class="container mt-4">
    <div class="d-flex flex-column">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800 me-3">Relatórios</h1>
            </div>
            <form id="formRelatorio">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow-sm bg-light p-3 py-4">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="card h-100">
                                            <div class="card-body ms-3">
                                                <div class="row p-2 align-items-center">
                                                    <div class="col-xxl-5 col-xl-5 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="form-group mb-3">
                                                            <label for="relatorio" class="form-label">Relatório</label>
                                                            <select id="relatorio" class="form-select" required>
                                                                <option disabled selected>Selecione...</option>
                                                                <option value="pacientes">Pacientes</option>
                                                                <option value="medicos">Médicos</option>
                                                                <option value="recepcionistas">Recepcionistas</option>
                                                                <option value="consultas">Consultas</option>
                                                                <option value="financeiro">Financeiro</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="form-group mb-3">
                                                            <label for="periodo-relatorio" class="pb-2">Período</label>
                                                            <div id="periodoDataRelatorio" class="btn btn-light border bg-light me-3 form-control">
                                                                <ion-icon name="calendar-clear-outline" class="fs-5 text-body pe-1 align-middle"></ion-icon>
                                                                <span class="align-middle"></span>
                                                                <ion-icon name="caret-down" class="fs-5 align-middle"></ion-icon>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group mb-3 mt-2">
                                                            <button type="button" class="btn btn-primary shadow-sm btnGerarRelatorio w-100 mt-4">
                                                                <div class="d-flex justify-content-center align-items-center">
                                                                    <ion-icon name="download-outline" class="fs-5"></ion-icon>
                                                                    <span class="ms-2">Gerar Relatório</span>
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
                    </div>
                </div>
            </form>
            <div class="row mt-5">
                <div class="d-sm-flex align-items-center mb-4">
                    <div class="d-flex align-items-center">
                        <button class="btn btn-light shadow-sm border small me-3 btnList" type="button" data-toggle="tooltip" title="Exibir Lista de Relatório">
                            <ion-icon name="list-outline" class="fs-5 align-middle"></ion-icon>
                        </button>
                        <div id="filtroDataRelatorio" class="btn btn-light border bg-light me-3">
                            <ion-icon name="calendar-clear-outline" class="fs-5 text-body pe-1 align-middle"></ion-icon>
                            <span class="align-middle"></span>
                            <ion-icon name="caret-down" class="fs-5 align-middle"></ion-icon>
                        </div>
                        <form class="form-inline mr-auto my-2 my-md-0 me-3">
                            <div class="input-group shadow-sm">
                                <input type="text" class="form-control bg-light" placeholder="Pesquisar..." aria-label="Search">
                                <div class="input-group-prepend">
                                    <button class="btn btn-light border" type="button">
                                        <ion-icon name="search-outline" class="fs-5 align-middle"></ion-icon>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card shadow-sm mb-5">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col text-primary fw-semibold">Data</div>
                                <div class="col text-primary fw-semibold">Relatório</div>
                                <div class="col text-primary fw-semibold">Período</div>
                                <div class="col-2 text-primary fw-semibold">Ações</div>
                            </div>
                        </div>
                        <div class="card-body py-0 ps-3 dados border-bottom hscroll" style="display: none;">
                            <div class="row pt-3 pb-3 border-bottom">
                                <div class="col">30/04/2024</div>
                                <div class="col">Pacientes</div>
                                <div class="col">01/04/2024 - 30/04/2024</div>
                                <div class="col-2">
                                    <div class="d-flex flex-row">
                                        <button type="button" class="btn btn-sm btn-secondary me-2 d-flex justify-content-center align-items-center btnAbrirRelatorio" data-toggle="tooltip" title="Abrir Relatório">
                                            <ion-icon name="open-outline" class="fs-5"></ion-icon>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-danger d-flex justify-content-center align-items-center btnExcluirRelatorio" data-toggle="tooltip" title="Excluir Relatório">
                                            <ion-icon name="trash-outline" class="fs-5"></ion-icon>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-3 pb-3">
                                <div class="col">01/05/2024</div>
                                <div class="col">Financeiro</div>
                                <div class="col">24/04/2024 - 30/04/2024</div>
                                <div class="col-2">
                                    <div class="d-flex flex-row">
                                        <button type="button" class="btn btn-sm btn-secondary me-2 d-flex justify-content-center align-items-center btnAbrirRelatorio" data-toggle="tooltip" title="Abrir Relatório">
                                            <ion-icon name="open-outline" class="fs-5"></ion-icon>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-danger d-flex justify-content-center align-items-center btnExcluirRelatorio" data-toggle="tooltip" title="Excluir Relatório">
                                            <ion-icon name="trash-outline" class="fs-5"></ion-icon>
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
    @include('components.modals.relatorio.modal-excluir-relatorio')
</div>
@endsection