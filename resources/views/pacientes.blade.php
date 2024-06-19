@extends('layouts.menu-medico')

@section('title', 'Painel Médico')

@section('content')
<div class="container mt-4">
    <div class="d-flex flex-column">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800 me-3">Pacientes</h1>
                <div class="d-flex align-items-center">
                    <button class="btn btn-light shadow-sm border small me-3 btnList2" type="button" data-toggle="tooltip" title="Exibir Lista de Pacientes">
                        <ion-icon name="list-outline" class="fs-5 align-middle"></ion-icon>
                    </button>
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
                                <div class="col text-primary fw-semibold">Nome Completo</div>
                                <div class="col text-primary fw-semibold">Plano de Saúde</div>
                                <div class="col text-primary fw-semibold">Última Consulta</div>
                                <div class="col-2 text-primary fw-semibold">Ações</div>
                            </div>
                        </div>
                        <div class="card-body py-0 ps-3 dados2 border-bottom hscroll" style="display: none;">
                            <div class="row pt-3 pb-3 border-bottom">
                                <div class="col">João da Silva</div>
                                <div class="col">123.456.789-00</div>
                                <div class="col">(11) 98765-4321</div>
                                <div class="col-2">
                                    <div class="d-flex flex-row">
                                        <button type="button" class="btn btn-primary shadow-sm border small me-3 d-flex justify-content-center align-items-center btnProntuarioPaciente" data-toggle="tooltip" title="Abrir Prontuário do Paciente">
                                            Prontuário
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-3 pb-3">
                                <div class="col">Maria Oliveira</div>
                                <div class="col">987.654.321-00</div>
                                <div class="col">(11) 12345-6789</div>
                                <div class="col-2">
                                    <div class="d-flex flex-row">
                                        <button type="button" class="btn btn-primary shadow-sm border small me-3 d-flex justify-content-center align-items-center btnProntuarioPaciente" data-toggle="tooltip" title="Abrir Prontuário do Paciente">
                                            Prontuário
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
    @include('components.modals.paciente.modal-prontuario-paciente')
</div>
@endsection