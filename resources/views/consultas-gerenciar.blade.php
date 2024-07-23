@extends('layouts.menu-recepcionista')

@section('title', 'Painel Recepcionista')

@section('content')
<div class="container mt-4">
    <div class="d-flex flex-column">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-3">
                <div>
                    <div class="d-flex align-items-center justify-content-center">
                        <h1 class="h3 mb-0 text-gray-800">Gerenciar Consultas</h1>
                        <form>
                            <div class="ps-3 pt-1">
                                <select name="medico" id="medico" class="form-select">
                                    <option value="" disabled selected>Selecione o médico...</option>
                                    <option value="">...</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <h6 id="data-calendario-consulta2" class="text-uppercase text-secondary mt-2"></h6>
                </div>
                <div class="d-flex align-items-center">
                    <form class="form-inline mr-auto my-2 my-md-0 me-3">
                        <div class="input-group shadow-sm">
                            <input type="date" id="data-consulta2" class="form-control bg-light">
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
                                <div class="col text-primary fw-semibold">Telefone</div>
                                <div class="col text-primary fw-semibold">Status</div>
                                <div class="col-2 text-primary fw-semibold">Ações</div>
                            </div>
                        </div>
                        <div class="card-body py-0 ps-3 border-bottom hscroll">
                            <div class="row pt-3 pb-3 border-bottom">
                                <div class="col data-coluna-consulta2"></div>
                                <div class="col">10:00</div>
                                <div class="col">João da Silva</div>
                                <div class="col">(11) 99999-9999</div>
                                <div class="col">
                                    <div class="d-flex align-items-center">
                                        <ion-icon name="ellipse" class="text-danger me-2 font-bullet"></ion-icon>
                                        <div class="text-danger font-resumo">Cancelado</div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="d-flex flex-row">
                                        <button type="button" class="btn btn-sm btn-primary me-2 d-flex justify-content-center align-items-center" data-toggle="tooltip" title="Confirmar Consulta">
                                            <ion-icon name="checkmark-outline" class="fs-5"></ion-icon>
                                        </button>
                                        <a href="{{ route('consultas-agendar') }}" type="button" class="btn btn-sm text-white btn-warning me-2 d-flex justify-content-center align-items-center" data-toggle="tooltip" title="Reagendar Consulta">
                                            <ion-icon name="calendar-outline" class="fs-5"></ion-icon>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-danger me-2 d-flex justify-content-center align-items-center btnCancelarConsulta" data-toggle="tooltip" title="Cancelar Consulta">
                                            <ion-icon name="close-outline" class="fs-5"></ion-icon>
                                        </button>
                                        <a href="{{ route('gestao-paciente') }}" type="button" class="btn btn-sm btn-secondary me-2 d-flex justify-content-center align-items-center" data-toggle="tooltip" title="Efetuar Cadastro do Paciente">
                                            <ion-icon name="person-add-outline" class="fs-5"></ion-icon>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-3 pb-3 border-bottom">
                                <div class="col data-coluna-consulta2"></div>
                                <div class="col">10:30</div>
                                <div class="col">Maria Oliveira</div>
                                <div class="col">(11) 88888-8888</div>
                                <div class="col">
                                    <div class="d-flex align-items-center">
                                        <ion-icon name="ellipse" class="text-warning me-2 font-bullet"></ion-icon>
                                        <div class="text-warning font-resumo">Reagendado</div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="d-flex flex-row">
                                        <button type="button" class="btn btn-sm btn-primary me-2 d-flex justify-content-center align-items-center" data-toggle="tooltip" title="Confirmar Consulta">
                                            <ion-icon name="checkmark-outline" class="fs-5"></ion-icon>
                                        </button>
                                        <a href="{{ route('consultas-agendar') }}" type="button" class="btn btn-sm text-white btn-warning me-2 d-flex justify-content-center align-items-center" data-toggle="tooltip" title="Reagendar Consulta">
                                            <ion-icon name="calendar-outline" class="fs-5"></ion-icon>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-danger me-2 d-flex justify-content-center align-items-center btnCancelarConsulta" data-toggle="tooltip" title="Cancelar Consulta">
                                            <ion-icon name="close-outline" class="fs-5"></ion-icon>
                                        </button>
                                        <a href="{{ route('gestao-paciente') }}" type="button" class="btn btn-sm btn-secondary me-2 d-flex justify-content-center align-items-center" data-toggle="tooltip" title="Efetuar Cadastro do Paciente">
                                            <ion-icon name="person-add-outline" class="fs-5"></ion-icon>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-3 pb-3 border-bottom">
                                <div class="col data-coluna-consulta2"></div>
                                <div class="col">11:00</div>
                                <div class="col">Marco Ferreira</div>
                                <div class="col">(11) 77777-7777</div>
                                <div class="col">
                                    <div class="d-flex align-items-center">
                                        <ion-icon name="ellipse" class="text-primary me-2 font-bullet"></ion-icon>
                                        <div class="text-primary font-resumo">Confirmado</div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="d-flex flex-row">
                                        <button type="button" class="btn btn-sm btn-primary me-2 d-flex justify-content-center align-items-center" data-toggle="tooltip" title="Confirmar Consulta">
                                            <ion-icon name="checkmark-outline" class="fs-5"></ion-icon>
                                        </button>
                                        <a href="{{ route('consultas-agendar') }}" type="button" class="btn btn-sm text-white btn-warning me-2 d-flex justify-content-center align-items-center" data-toggle="tooltip" title="Reagendar Consulta">
                                            <ion-icon name="calendar-outline" class="fs-5"></ion-icon>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-danger me-2 d-flex justify-content-center align-items-center btnCancelarConsulta" data-toggle="tooltip" title="Cancelar Consulta">
                                            <ion-icon name="close-outline" class="fs-5"></ion-icon>
                                        </button>
                                        <a href="{{ route('gestao-paciente') }}" type="button" class="btn btn-sm btn-secondary me-2 d-flex justify-content-center align-items-center" data-toggle="tooltip" title="Efetuar Cadastro do Paciente">
                                            <ion-icon name="person-add-outline" class="fs-5"></ion-icon>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-3 pb-3">
                                <div class="col data-coluna-consulta2"></div>
                                <div class="col">11:30</div>
                                <div class="col">Rodrigo Mendes</div>
                                <div class="col">(11) 66666-6666</div>
                                <div class="col">
                                    <div class="d-flex align-items-center">
                                        <ion-icon name="ellipse" class="me-2 font-bullet"></ion-icon>
                                        <div class="font-resumo">Pendente</div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="d-flex flex-row">
                                        <button type="button" class="btn btn-sm btn-primary me-2 d-flex justify-content-center align-items-center" data-toggle="tooltip" title="Confirmar Consulta">
                                            <ion-icon name="checkmark-outline" class="fs-5"></ion-icon>
                                        </button>
                                        <a href="{{ route('consultas-agendar') }}" type="button" class="btn btn-sm text-white btn-warning me-2 d-flex justify-content-center align-items-center" data-toggle="tooltip" title="Reagendar Consulta">
                                            <ion-icon name="calendar-outline" class="fs-5"></ion-icon>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-danger me-2 d-flex justify-content-center align-items-center btnCancelarConsulta" data-toggle="tooltip" title="Cancelar Consulta">
                                            <ion-icon name="close-outline" class="fs-5"></ion-icon>
                                        </button>
                                        <a href="{{ route('gestao-paciente') }}" type="button" class="btn btn-sm btn-secondary me-2 d-flex justify-content-center align-items-center" data-toggle="tooltip" title="Efetuar Cadastro do Paciente">
                                            <ion-icon name="person-add-outline" class="fs-5"></ion-icon>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.modals.consulta.modal-cancelar-consulta')
</div>
@endsection