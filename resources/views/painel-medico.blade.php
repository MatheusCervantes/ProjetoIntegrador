@extends('layouts.menu-medico')

@section('title', 'Painel Médico')

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
                                    <ul class="ps-3">
                                        @if (session('warn') != '.')
                                        <li>{{ session('warn') }}</li>
                                        @endif
                                        @if (session('warn2'))
                                        <li>{{ session('warn2') }}</li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-secondary" id="btn_fechar_warn" data-bs-dismiss="modal">Fechar</button>
                            @if (session('warn2'))
                            <button type="button" class="btn btn-sm btn-primary" id="btn_cadastrar_informacao" data-dismiss="modal" data-toggle="modal" data-target="#modalInfos">Cadastrar Informações</button>
                            @endif
                            @if (session('warn') != '.')
                            <button type="button" class="btn btn-sm btn-primary" id="btn_mudar_senha_medico" data-dismiss="modal" data-toggle="modal" data-target="#modalEditarAcesso">Editar Senha</button>
                            @endif

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
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-6 col-sm-6 col-xs-12 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 text-primary">Resumo da Agenda</h6>
                        </div>
                        <div class="card-body">
                            <div id="calendario-dashboard"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-2">
                    <div class="card shadow-sm mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 text-primary">Perfil dos Pacientes</h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-pie">
                                <canvas id="grafico-medico-pacientes"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-2">
                    <div class="card shadow-sm mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 text-primary">Consultas por Mês</h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-bar">
                                <canvas id="grafico-medico-consultas"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection