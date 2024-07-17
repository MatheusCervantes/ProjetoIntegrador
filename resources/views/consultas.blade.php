@extends('layouts.menu-medico')

@section('title', 'Painel Médico')

@section('content')
<div class="container mt-4">
    <div class="d-flex flex-column">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-3">
                <div>
                    <h1 class="h3 mb-0 text-gray-800 me-3">Consultas</h1>
                    <h6 id="data-calendario-consulta" class="text-uppercase text-secondary mt-2"></h6>
                </div>
                <div class="d-flex align-items-center">
                    <form class="form-inline mr-auto my-2 my-md-0 me-3">
                        <div class="input-group shadow-sm">
                            <input type="date" id="data-consulta" class="form-control bg-light">
                        </div>
                    </form>
                    <form class="form-inline mr-auto my-2 my-md-0">
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm mb-5">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col text-primary fw-semibold">Data</div>
                                <div class="col text-primary fw-semibold">Hora</div>
                                <div class="col text-primary fw-semibold">Paciente</div>
                                <div class="col-2 text-primary fw-semibold">Ações</div>
                            </div>
                        </div>
                        <div class="card-body py-0 ps-3 border-bottom hscroll">
                            <div class="row pt-3 pb-3 border-bottom">
                                <div class="col data-coluna-consulta"></div>
                                <div class="col">10:00</div>
                                <div class="col">João da Silva</div>
                                <div class="col-2">
                                    <div class="d-flex flex-row">
                                        <button type="button" class="btn btn-sm btn-secondary me-2 d-flex justify-content-center align-items-center btnDetalhesConsulta" data-toggle="tooltip" title="Exibir Detalhes da Consulta">
                                            <ion-icon name="information-circle-outline" class="fs-5"></ion-icon>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-warning me-2 d-flex justify-content-center align-items-center btnEditarConsulta" data-toggle="tooltip" title="Editar Consulta">
                                            <ion-icon name="create-outline" class="fs-5"></ion-icon>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-3 pb-3">
                                <div class="col data-coluna-consulta"></div>
                                <div class="col">10:30</div>
                                <div class="col">Maria Oliveira</div>
                                <div class="col-2">
                                    <div class="d-flex flex-row">
                                        <button type="button" class="btn btn-sm btn-success me-2 d-flex justify-content-center align-items-center btnIniciarConsulta">
                                            Iniciar Consulta
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
    @include('components.modals.consulta.modal-iniciar-consulta')
    @include('components.modals.consulta.modal-editar-consulta')
    @include('components.modals.consulta.modal-detalhes-consulta')
</div>
@endsection