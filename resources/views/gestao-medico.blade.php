@extends('layouts.menu-adm')

@section('title', 'Painel Administrador')

@section('content')
<div class="container mt-4">
    <div class="d-flex flex-column">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800 me-3">Médicos</h1>
                <div class="d-flex align-items-center">
                    <button class="btn btn-light shadow-sm border small me-3 btnList" type="button" data-toggle="tooltip" title="Exibir Lista de Médicos">
                        <ion-icon name="list-outline" class="fs-5 align-middle"></ion-icon>
                    </button>
                    <form class="form-inline mr-auto my-2 my-md-0 me-3">
                        <div class="input-group shadow-sm">
                            <input type="text" class="form-control bg-light" placeholder="Pesquisar..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-prepend">
                                <button class="btn btn-light border" type="button">
                                    <ion-icon name="search-outline" class="fs-5 align-middle"></ion-icon>
                                </button>
                            </div>
                        </div>
                    </form>
                    <button type="button" class="btn btn-primary shadow-sm btnNovoMedico">
                        <div class="d-flex align-items-center">
                            <ion-icon name="person-add-outline" class="fs-5"></ion-icon>
                            <span class="ms-2">Adicionar Médico</span>
                        </div>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm mb-5">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col text-primary fw-semibold">Nome Completo</div>
                                <div class="col text-primary fw-semibold">CRM</div>
                                <div class="col text-primary fw-semibold">Especialidade</div>
                                <div class="col-2 text-primary fw-semibold">Ações</div>
                            </div>
                        </div>
                        <div class="card-body py-0 ps-3 dados border-bottom hscroll" style="display: none;">
                            <div class="row pt-3 pb-3 border-bottom">
                                <div class="col">José de Andrade</div>
                                <div class="col">123456/SP</div>
                                <div class="col">Dermatologia</div>
                                <div class="col-2">
                                    <div class="d-flex flex-row">
                                        <button type="button" class="btn btn-sm btn-secondary me-2 d-flex justify-content-center align-items-center btnDetalhesMedico" data-toggle="tooltip" title="Exibir Detalhes do Médico">
                                            <ion-icon name="information-circle-outline" class="fs-5"></ion-icon>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-warning me-2 d-flex justify-content-center align-items-center btnEditarMedico" data-toggle="tooltip" title="Editar Médico">
                                            <ion-icon name="create-outline" class="fs-5"></ion-icon>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-danger d-flex justify-content-center align-items-center btnExcluirMedico" data-toggle="tooltip" title="Excluir Médico">
                                            <ion-icon name="trash-outline" class="fs-5"></ion-icon>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-3 pb-3">
                                <div class="col">Luzia Campos</div>
                                <div class="col">654321/MG</div>
                                <div class="col">Cardiologia</div>
                                <div class="col-2">
                                    <div class="d-flex flex-row">
                                        <button type="button" class="btn btn-sm btn-secondary me-2 d-flex justify-content-center align-items-center btnDetalhesMedico" data-toggle="tooltip" title="Exibir Detalhes do Médico">
                                            <ion-icon name="information-circle-outline" class="fs-5"></ion-icon>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-warning me-2 d-flex justify-content-center align-items-center btnEditarMedico" data-toggle="tooltip" title="Editar Médico">
                                            <ion-icon name="create-outline" class="fs-5"></ion-icon>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-danger d-flex justify-content-center align-items-center btnExcluirMedico" data-toggle="tooltip" title="Excluir Médico">
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
    @include('components.modals.medico.modal-novo-medico')
    @include('components.modals.medico.modal-detalhes-medico')
    @include('components.modals.medico.modal-editar-medico')
    @include('components.modals.medico.modal-excluir-medico')
</div>
@endsection