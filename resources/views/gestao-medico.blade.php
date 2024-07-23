@extends('layouts.menu-adm')

@section('title', 'Painel Administrador')

@section('content')
<div class="container mt-4">
    <div class="d-flex flex-column">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800 me-3">Médicos</h1>
                <div class="d-flex align-items-center">
                    <form class="form-inline mr-auto my-2 my-md-0 me-3" action="{{ route('medicos.search') }}" method="GET">
                        <div class="input-group shadow-sm">
                            <input type="text" class="form-control bg-light" placeholder="Pesquisar..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-prepend">
                                <button class="btn btn-light border" type="submit">
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
                            @if ($medicos->count() > 0)
                            @foreach ($medicos as $medico)
                            <div class="row pt-3 pb-3 recepcionista-item">
                                <div class="col">{{ $medico->nome_completo }}</div>
                                <div class="col">{{ $medico->cpf }}</div>
                                <div class="col">{{ $medico->telefone }}</div>
                                <div class="col-2">
                                    <div class="d-flex flex-row">
                                        <button type="button" class="btn btn-sm btn-secondary me-2 d-flex justify-content-center align-items-center btnDetalhesMedico" data-toggle="modal" data-target="#modalDetalhesMedico" data-id="{{ $medico->id }}" title="Exibir Detalhes do Médico">
                                            <ion-icon name="information-circle-outline" class="fs-5"></ion-icon>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-warning me-2 d-flex justify-content-center align-items-center btnEditarMedico" data-toggle="modal" data-target="#modalEditarMedico" data-id="{{ $medico->id }}" title="Editar Médico">
                                            <ion-icon name="create-outline" class="fs-5"></ion-icon>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-danger d-flex justify-content-center align-items-center btnExcluirMedico" data-toggle="modal" data-target="#modalExcluirMedico" data-id="{{ $medico->id }}" title="Excluir Médico">
                                            <ion-icon name="trash-outline" class="fs-5"></ion-icon>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <p class="text-center text-muted my-4">Nenhum médico encontrado</p>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-4 pb-3">
                        <div class="col">
                            <button class="btn btn-outline-primary">Carregar mais</button>
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