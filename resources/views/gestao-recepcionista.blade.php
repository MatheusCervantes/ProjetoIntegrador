@extends('layouts.menu-adm')

@section('title', 'Painel Administrador')

@section('content')
<div class="container mt-4">
    <div class="d-flex flex-column">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800 me-3">Recepcionistas</h1>
                <div class="d-flex align-items-center">
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
                    <button type="button" class="btn btn-primary shadow-sm btnNovoRecepcionista">
                        <div class="d-flex align-items-center">
                            <ion-icon name="person-add-outline" class="fs-5"></ion-icon>
                            <span class="ms-2">Adicionar Recepcionista</span>
                        </div>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shadow-sm mb-4">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col text-primary fw-semibold">Nome Completo</div>
                                <div class="col text-primary fw-semibold">CPF</div>
                                <div class="col text-primary fw-semibold">Telefone</div>
                                <div class="col-2 text-primary fw-semibold">Ações</div>
                            </div>
                        </div>
                        <div class="card-body py-0 ps-3 dados border-bottom hscroll">
                            <div class="row pt-3 pb-3 border-bottom">
                                <div class="col">Fernanda Amadeu</div>
                                <div class="col">000.000.000-00</div>
                                <div class="col">(17) 99999-9999</div>
                                <div class="col-2">
                                    <div class="d-flex flex-row">
                                        <button type="button" class="btn btn-sm btn-secondary me-2 d-flex justify-content-center align-items-center btnDetalhesRecepcionista" data-toggle="tooltip" title="Exibir Detalhes do Recepcionista">
                                            <ion-icon name="information-circle-outline" class="fs-5"></ion-icon>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-warning me-2 d-flex justify-content-center align-items-center btnEditarRecepcionista" data-toggle="tooltip" title="Editar Recepcionista">
                                            <ion-icon name="create-outline" class="fs-5"></ion-icon>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-danger d-flex justify-content-center align-items-center btnExcluirRecepcionista" data-toggle="tooltip" title="Excluir Recepcionista">
                                            <ion-icon name="trash-outline" class="fs-5"></ion-icon>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-3 pb-3">
                                <div class="col">Paulo Costa</div>
                                <div class="col">111.111.111-11</div>
                                <div class="col">(17) 98888-8888</div>
                                <div class="col-2">
                                    <div class="d-flex flex-row">
                                        <button type="button" class="btn btn-sm btn-secondary me-2 d-flex justify-content-center align-items-center btnDetalhesRecepcionista" data-toggle="tooltip" title="Exibir Detalhes do Recepcionista">
                                            <ion-icon name="information-circle-outline" class="fs-5"></ion-icon>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-warning me-2 d-flex justify-content-center align-items-center btnEditarRecepcionista" data-toggle="tooltip" title="Editar Recepcionista">
                                            <ion-icon name="create-outline" class="fs-5"></ion-icon>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-danger d-flex justify-content-center align-items-center btnExcluirRecepcionista" data-toggle="tooltip" title="Excluir Recepcionista">
                                            <ion-icon name="trash-outline" class="fs-5"></ion-icon>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4 pb-3">
                <div class="col">
                    <button class="btn btn-outline-primary">Carregar mais</button>
                </div>
            </div>
        </div>
    </div>
    @include('components.modals.recepcionista.modal-novo-recepcionista')
    @include('components.modals.recepcionista.modal-detalhes-recepcionista')
    @include('components.modals.recepcionista.modal-editar-recepcionista')
    @include('components.modals.recepcionista.modal-excluir-recepcionista')
</div>
@endsection