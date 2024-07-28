@extends('layouts.menu-adm')

@section('title', 'Painel Administrador')

@section('content')
<div class="container mt-4">
    <div class="d-flex flex-column">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>
            @if (session('warn'))
            <div class="modal fade" id="firstpasswordModal" tabindex="-1" role="dialog" aria-labelledby="firstpasswordModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body p-4 pb-2">
                            <div class="d-flex align-items-center">
                                <div class="mb-3">
                                    <div class="rounded-circle border border-secondary d-flex align-items-center justify-content-center mx-auto" style="width: 4rem; height: 4rem;">
                                        <ion-icon name="alert-outline" class="fs-1 align-middle text-warning"></ion-icon>
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <p class="fw-bold mb-1 h6">Atenção</p>
                                    <p>{{ session('warn') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-secondary" id="btn_fechar_warn" data-bs-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-sm btn-primary" id="btn_mudar_senha" data-dismiss="modal">Editar Senha</button>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#firstpasswordModal').modal('show');
                });
                $('#btn_fechar_warn').click(function() {
                    $('#firstpasswordModal').modal('hide');
                });
            </script>
            @endif
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
            <div class="row">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-4">
                    <div class="card border-left-primary shadow-sm h-100 py-2">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="text-primary text-uppercase mb-1">Pacientes Cadastrados</div>
                                    <div class="h5 mb-0 text-gray-800">{{ $countPacientes }}</div>
                                </div>
                                <div class="col-auto">
                                    <ion-icon name="person-outline" class="fs-2 text-secondary mt-1"></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 mb-4">
                    <div class="card border-left-primary shadow-sm h-100 py-2">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="text-primary text-uppercase mb-1">Médicos Cadastrados</div>
                                    <div class="h5 mb-0 text-gray-800">{{ $countMedicos }}</div>
                                </div>
                                <div class="col-auto">
                                    <ion-icon name="medkit-outline" class="fs-2 text-secondary mt-1"></ion-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4">
                    <div class="card border-left-primary shadow-sm h-100 py-2">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="text-primary text-uppercase mb-1">Recepcionistas Cadastrados</div>
                                    <div class="h5 mb-0 text-gray-800">{{ $countRecepcionistas }}</div>
                                </div>
                                <div class="col-auto">
                                    <ion-icon name="desktop-outline" class="fs-2 text-secondary mt-2"></ion-icon>
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
                                                    <ion-icon name="add-outline" class="fs-3 text-success mt-2"></ion-icon>
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
                                                    <ion-icon name="remove-outline" class="fs-3 text-danger mt-2"></ion-icon>
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
                                                    <ion-icon name="reorder-two-outline" class="fs-3 text-secondary mt-2"></ion-icon>
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
                            <h6 class="m-0 text-primary">Total de Consultas por Mês</h6>
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