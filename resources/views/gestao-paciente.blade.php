@extends('layouts.menu-adm')

@section('title', 'Painel Administrador')

@section('content')
<div class="container mt-4">
    <div class="d-flex flex-column">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800 me-3">Pacientes</h1>
                <div class="d-flex align-items-center">
                    <form class="form-inline mr-auto my-2 my-md-0 me-3" action="{{ route('pacientes.search') }}" method="GET">
                        <div class="input-group shadow-sm">
                            <input type="text" class="form-control bg-light" placeholder="Pesquisar..." aria-label="Search" aria-describedby="basic-addon2" name="search">
                            <div class="input-group-prepend">
                                <button class="btn btn-light border" type="submit">
                                    <ion-icon name="search-outline" class="fs-5 align-middle"></ion-icon>
                                </button>
                            </div>
                        </div>
                    </form>
                    <button type="button" class="btn btn-primary shadow-sm btnNovoPaciente">
                        <div class="d-flex align-items-center">
                            <ion-icon name="person-add-outline" class="fs-5"></ion-icon>
                            <span class="ms-2">Adicionar Paciente</span>
                        </div>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    @if (session('error'))
                    <div class="message-box message-box-error">
                        <i class="fa fa-ban fa-1x"></i>
                        <span class="message-text"><strong>{{ session('error') }}</strong></span>
                        <i class="fa fa-times fa-1x exit-button cursor"></i>
                    </div>
                    @endif
                    @if (session('success'))
                    <div class="message-box message-box-success">
                        <i class="fa fa-check fa-1x"></i>
                        <span class="message-text"><strong>{{ session('success') }}</strong></span>
                        <i class="fa fa-times fa-1x exit-button cursor"></i>
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
                            @if ($pacientes->count() > 0)
                            @foreach ($pacientes as $paciente)
                            <div class="row pt-3 pb-3 border-bottom">
                                <div class="col">{{ $paciente->nome_completo }}</div>
                                <div class="col">{{ $paciente->cpf }}</div>
                                <div class="col">{{ $paciente->telefone }}</div>
                                <div class="col-2">
                                    <div class="d-flex flex-row">
                                        <button type="button" class="btn btn-sm btn-secondary me-2 d-flex justify-content-center align-items-center btnDetalhesPaciente" data-toggle="tooltip" data-target="#modalDetalhesPaciente" data-id="{{ $paciente->id }}" title="Exibir Detalhes do Paciente">
                                            <ion-icon name="information-circle-outline" class="fs-5"></ion-icon>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-warning me-2 d-flex justify-content-center align-items-center btnEditarPaciente" data-toggle="tooltip" data-target="#modalEditarPaciente" data-id="{{ $paciente->id }}" title="Editar Paciente">
                                            <ion-icon name="create-outline" class="fs-5"></ion-icon>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-danger d-flex justify-content-center align-items-center btnExcluirPaciente" data-toggle="tooltip" data-target="#modalExcluirPaciente" data-id="{{ $paciente->id }}" title="Excluir Paciente">
                                            <ion-icon name="trash-outline" class="fs-5"></ion-icon>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <p class="text-center text-muted my-4">Nenhum paciente encontrado.</p>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="mt-4 pt-2 col-lg-12">
                            <nav aria-label="Page navigation example">
                                <div class="pagination job-pagination mb-0 justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" tabindex="-1" href="#"><ion-icon name="chevron-back-outline" class="align-middle font-infos"></ion-icon></a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><ion-icon name="chevron-forward-outline" class="align-middle font-nome-agenda"></ion-icon></a>
                                    </li>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.modals.paciente.modal-novo-paciente')
    @include('components.modals.paciente.modal-detalhes-paciente')
    @include('components.modals.paciente.modal-editar-paciente')
    @include('components.modals.paciente.modal-excluir-paciente')
</div>
@endsection