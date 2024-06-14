@extends('layouts.menu-adm')

@section('title', 'Painel Administrador')

@section('content')
<div class="container mt-4">
    <div class="d-flex flex-column">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Financeiro</h1>
            </div>
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card bg-success-subtle shadow-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="text-xs text-success text-uppercase">Entrada Mensal</div>
                                    <div class="h5 mb-0 text-gray-800">R$ 8750,00</div>
                                </div>
                                <div class="col-auto">
                                    <ion-icon name="add-outline" class="fs-3 text-success mt-1"></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-danger-subtle shadow-sm mt-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col me-2">
                                    <div class="text-xs text-danger text-uppercase">Saída Mensal</div>
                                    <div class="h5 mb-0 text-gray-800">R$ 5465,00</div>
                                </div>
                                <div class="col-auto">
                                    <ion-icon name="remove-outline" class="fs-3 text-danger mt-1"></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-secondary-subtle shadow-sm mt-3 mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col me-2">
                                    <div class="text-xs text-secondary text-uppercase">Total Geral Mensal</div>
                                    <div class="h5 mb-0 text-gray-800">R$ 3285,00</div>
                                </div>
                                <div class="col-auto">
                                    <ion-icon name="reorder-two-outline" class="fs-3 text-secondary mt-1"></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card shadow-sm mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 text-primary">Gastos Mensais por Tipo de Despesa</h6>
                        </div>
                        <div class="card-body pt-0 pb-3">
                            <div class="chart-pie">
                                <canvas id="grafico-financeiro-despesas"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card shadow-sm mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 text-primary">Entradas e Saídas Mensais</h6>
                        </div>
                        <div class="card-body pt-0 pb-3">
                            <div class="chart-area">
                                <canvas id="grafico-financeiro-entradas"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-xxl-12">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4 hscroll">
                        <div class="d-flex align-items-center">
                            <button class="btn btn-light shadow-sm border small me-3 btnList" type="button" data-toggle="tooltip" title="Exibir Lista de Movimentações Financeiras">
                                <ion-icon name="list-outline" class="fs-5 align-middle"></ion-icon>
                            </button>
                            <button type="button" class="btn btn-primary shadow-sm btnNovoFinanceiro" data-toggle="tooltip" title="Adicionar Movimentação Financeira">
                                <div class="d-flex align-items-center">
                                    <ion-icon name="add-outline" class="fs-5"></ion-icon>
                                </div>
                            </button>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="checkbox" id="filtro-despesa-fixa" name="filtro-despesa-fixa" value="fixa">
                                <label class="form-check-label" for="filtro-despesa-fixa">Despesa Fixa</label>
                            </div>
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" name="filtro-movimentacao" id="filtro-entrada" value="entrada">
                                <label class="form-check-label" for="filtro-entrada">Entrada</label>
                            </div>
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" name="filtro-movimentacao" id="filtro-saida" value="saida">
                                <label class="form-check-label" for="filtro-saida">Saída</label>
                            </div>
                            <div id="filtroDataFinanceiro" class="btn btn-light border bg-light me-3">
                                <ion-icon name="calendar-clear-outline" class="fs-5 text-body pe-1 align-middle"></ion-icon>
                                <span class="align-middle"></span>
                                <ion-icon name="caret-down" class="fs-5 align-middle"></ion-icon>
                            </div>
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
                    <div class="col-xxl-12">
                        <div class="card shadow-sm mb-5">
                            <div class="card-header py-3">
                                <div class="row">
                                    <div class="col-2 text-primary fw-semibold">Data</div>
                                    <div class="col-2 text-primary fw-semibold">Tipo</div>
                                    <div class="col-2 text-primary fw-semibold">Detalhes</div>
                                    <div class="col-2 text-primary fw-semibold">Movimentação</div>
                                    <div class="col-2 text-primary fw-semibold">Valor</div>
                                    <div class="col-2 text-primary fw-semibold">Ações</div>
                                </div>
                            </div>
                            <div class="card-body py-0 ps-3 dados border-bottom hscroll" style="display: none;">
                                <div class="row pt-3 pb-3 border-bottom border-left-success">
                                    <div class="col-2">
                                        <div>28/04/2024</div>
                                    </div>
                                    <div class="col-2">
                                        <div>CONSULTA</div>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-light shadow-sm border small ms-2 btnDetalhesFinanceiro" type="button" data-toggle="tooltip" title="Exibir Detalhes da Movimentação Financeira">
                                            <ion-icon name="information-circle-outline" class="fs-5 align-middle"></ion-icon>
                                        </button>
                                    </div>
                                    <div class="col-2">
                                        <div class="d-flex align-items-center">
                                            <ion-icon name="arrow-forward-circle-outline" class="fs-4 me-2 text-success"></ion-icon>
                                            <div>Entrada</div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div>R$ 300,00</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="d-flex flex-row">
                                            <button type="button" class="btn btn-sm btn-warning me-2 d-flex justify-content-center align-items-center btnEditarFinanceiro" data-toggle="tooltip" title="Editar Movimentação Financeira">
                                                <ion-icon name="create-outline" class="fs-5"></ion-icon>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-danger d-flex justify-content-center align-items-center btnExcluirFinanceiro" data-toggle="tooltip" title="Excluir Movimentação Financeira">
                                                <ion-icon name="trash-outline" class="fs-5"></ion-icon>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-3 pb-3 border-bottom border-left-danger">
                                    <div class="col-2">
                                        <div>30/04/2024</div>
                                    </div>
                                    <div class="col-2">
                                        <div>SALÁRIO</div>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-light shadow-sm border small ms-2 btnDetalhesFinanceiro" type="button" data-toggle="tooltip" title="Exibir Detalhes da Movimentação Financeira">
                                            <ion-icon name="information-circle-outline" class="fs-5 align-middle"></ion-icon>
                                        </button>
                                    </div>
                                    <div class="col-2 text-center">
                                        <div class="d-flex align-items-center">
                                            <ion-icon name="arrow-back-circle-outline" class="fs-4 me-2 text-danger"></ion-icon>
                                            <div>Saída</div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div>R$ 2500,00</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="d-flex flex-row">
                                            <button type="button" class="btn btn-sm btn-warning me-2 d-flex justify-content-center align-items-center btnEditarFinanceiro" data-toggle="tooltip" title="Editar Movimentação Financeira">
                                                <ion-icon name="create-outline" class="fs-5"></ion-icon>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-danger d-flex justify-content-center align-items-center btnExcluirFinanceiro" data-toggle="tooltip" title="Excluir Movimentação Financeira">
                                                <ion-icon name="trash-outline" class="fs-5"></ion-icon>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-3 pb-3 border-left-danger">
                                    <div class="col-2">
                                        <div>01/05/2024</div>
                                    </div>
                                    <div class="col-2">
                                        <div>ALUGUEL</div>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-light shadow-sm border small ms-2 btnDetalhesFinanceiro" type="button" data-toggle="tooltip" title="Exibir Detalhes da Movimentação Financeira">
                                            <ion-icon name="information-circle-outline" class="fs-5 align-middle"></ion-icon>
                                        </button>
                                    </div>
                                    <div class="col-2">
                                        <div class="d-flex align-items-center">
                                            <ion-icon name="arrow-back-circle-outline" class="fs-4 me-2 text-danger"></ion-icon>
                                            <div>Saída</div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div>R$ 3300,00</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="d-flex flex-row">
                                            <button type="button" class="btn btn-sm btn-warning me-2 d-flex justify-content-center align-items-center btnEditarFinanceiro" data-toggle="tooltip" title="Editar Movimentação Financeira">
                                                <ion-icon name="create-outline" class="fs-5"></ion-icon>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-danger d-flex justify-content-center align-items-center btnExcluirFinanceiro" data-toggle="tooltip" title="Excluir Movimentação Financeira">
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
    </div>
    @include('components.modals.financeiro.modal-novo-financeiro')
    @include('components.modals.financeiro.modal-detalhes-financeiro')
    @include('components.modals.financeiro.modal-editar-financeiro')
    @include('components.modals.financeiro.modal-excluir-financeiro')
</div>
@endsection