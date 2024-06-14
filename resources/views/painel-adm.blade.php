@extends('layouts.menu-adm')

@section('title', 'Painel Administrador')

@section('content')
<div class="container mt-4">
    <div class="d-flex flex-column">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-4">
                    <div class="card border-left-primary shadow-sm h-100 py-2">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="text-primary text-uppercase mb-1">Pacientes Cadastrados</div>
                                    <div class="h5 mb-0 text-gray-800">32</div>
                                </div>
                                <div class="col-auto">
                                    <ion-icon name="person-outline" class="fs-2 text-secondary mt-1"></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-4">
                    <div class="card border-left-primary shadow-sm h-100 py-2">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="text-primary text-uppercase mb-1">Médicos Cadastrados</div>
                                    <div class="h5 mb-0 text-gray-800">5</div>
                                </div>
                                <div class="col-auto">
                                    <ion-icon name="medkit-outline" class="fs-2 text-secondary mt-1"></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-auto col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-4">
                    <div class="card border-left-primary shadow-sm h-100 py-2">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="text-primary text-uppercase mb-1">Recepcionistas Cadastrados</div>
                                    <div class="h5 mb-0 text-gray-800">3</div>
                                </div>
                                <div class="col-auto">
                                    <ion-icon name="desktop-outline" class="fs-2 text-secondary mt-2"></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-auto col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-4">
                    <div class="card border-left-warning shadow-sm h-100 py-2">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="text-warning text-uppercase mb-1">Relatórios Gerados</div>
                                    <div class="h5 mb-0 text-gray-800">8</div>
                                </div>
                                <div class="col-auto">
                                    <ion-icon name="document-text-outline" class="fs-2 text-secondary mt-2"></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 text-primary">Resumo Financeiro dos Últimos 30 Dias</h6>
                        </div>
                        <div class="card-body">
                            <div class="row mt-2">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                                    <div class="card bg-success-subtle">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col me-2">
                                                    <div class="text-success text-uppercase mb-1">Entradas</div>
                                                    <div class="h5 mb-0 text-gray-800">R$ 8750,00</div>
                                                </div>
                                                <div class="col-auto">
                                                    <ion-icon name="add-outline" class="fs-2 text-success mt-1"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                                    <div class="card bg-danger-subtle">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col me-2">
                                                    <div class="text-danger text-uppercase mb-1">Saídas</div>
                                                    <div class="h5 mb-0 text-gray-800">R$ 5465,00</div>
                                                </div>
                                                <div class="col-auto">
                                                    <ion-icon name="remove-outline" class="fs-2 text-danger mt-1"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row d-flex align-items-center justify-content-center">
                                <div class="col-xl-12 col-md-12 mb-2 pb-1">
                                    <div class="card bg-secondary-subtle">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col me-2">
                                                    <div class="text-secondary text-uppercase mb-1">Total Geral</div>
                                                    <div class="h5 mb-0 text-gray-800">R$ 3285,00</div>
                                                </div>
                                                <div class="col-auto">
                                                    <ion-icon name="reorder-two-outline" class="fs-2 text-secondary mt-1"></ion-icon>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-4">
                    <div class="card shadow-sm mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 text-primary">Consultas por Mês</h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-bar">
                                <canvas id="grafico-consultas"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection