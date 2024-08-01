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
                                    <select name="medico" id="lista_medicos" class="form-select">
                                        <option value="" disabled selected>Selecione o médico...</option>
                                        @foreach ($medicos as $medico)
                                            <option value="{{ $medico->id }}">{{ $medico->nome_completo }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </form>
                        </div>
                        <h6 id="data-calendario-consulta2" class="text-uppercase text-secondary mt-2"></h6>
                    </div>
                    <div class="d-flex align-items-center">
                        <form class="form-inline mr-auto my-2 my-md-0 me-3">
                            <div class="input-group shadow-sm">
                                <input type="date" id="data-consulta" class="form-control bg-light">
                            </div>
                        </form>
                        <form class="form-inline mr-auto my-2 my-md-0">
                            <div class="input-group shadow-sm">
                                <input type="text" class="form-control bg-light" id="pesquisar_consulta"  placeholder="Pesquisar..."
                                    aria-label="Search">
                                <div class="input-group-prepend">
                                    <button class="btn btn-light border" type="button" id="btnPesquisarConsulta" title="Pesquisa referente ao nome do paciente">
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
                                <div id="consulta-list">
                                    <p class="text-center pt-3">Selecione um médico</p>
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
