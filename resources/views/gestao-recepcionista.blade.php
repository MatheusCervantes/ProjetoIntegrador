@extends('layouts.menu-adm')

@section('title', 'Painel Administrador')

@section('content')
<div class="container mt-4">
    <div class="d-flex flex-column">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800 me-3">Recepcionistas</h1>
                <div class="d-flex align-items-center">
                    <form class="form-inline mr-auto my-2 my-md-0 me-3" action="{{ route('recepcionistas.search') }}" method="GET">
                        <div class="input-group shadow-sm">
                            <input type="text" class="form-control bg-light" name="search" placeholder="Pesquisar..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-prepend">
                                <button class="btn btn-light border" type="submit">
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
                    @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show text-center d-flex justify-content-center align-items-center align-middle" role="alert">
                        <h4 class="pt-1">{{ session('error') }}</h4>
                        <button type="button" class="btn-close align-middle" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show text-center d-flex justify-content-center align-items-center" role="alert">
                        <h4 class="pt-2">{{ session('success') }}</h4>
                        <button type="button" class="btn-close pt-1" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
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
                            @if ($recepcionistas->count() > 0)
                            @foreach ($recepcionistas as $recepcionista)
                            <div class="row pt-3 pb-3 recepcionista-item">
                                <div class="col">{{ $recepcionista->nome_completo }}</div>
                                <div class="col">{{ $recepcionista->cpf }}</div>
                                <div class="col">{{ $recepcionista->telefone }}</div>
                                <div class="col-2">
                                    <div class="d-flex flex-row">
                                        <button type="button" class="btn btn-sm btn-secondary me-2 d-flex justify-content-center align-items-center btnDetalhesRecepcionista" data-toggle="modal" data-target="#modalDetalhesRecepcionista" data-id="{{ $recepcionista->id }}" title="Exibir Detalhes do Recepcionista">
                                            <ion-icon name="information-circle-outline" class="fs-5"></ion-icon>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-warning me-2 d-flex justify-content-center align-items-center btnEditarRecepcionista" data-toggle="modal" data-target="#modalEditarRecepcionista" data-id="{{ $recepcionista->id }}" title="Editar Recepcionista">
                                            <ion-icon name="create-outline" class="fs-5"></ion-icon>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-danger d-flex justify-content-center align-items-center btnExcluirRecepcionista" data-toggle="modal" data-target="#modalExcluirRecepcionista" data-id="{{ $recepcionista->id }}" title="Excluir Recepcionista">
                                            <ion-icon name="trash-outline" class="fs-5"></ion-icon>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <p class="text-center text-muted my-4">Nenhum recepcionista encontrado</p>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-4 pb-3">
                        <div class="col">
                            <button type="submit" class="btn btn-outline-primary">Carregar mais</button>
                        </div>
                    </div>
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