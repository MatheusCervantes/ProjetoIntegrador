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
                    <div class="modal fade" id="firstpasswordModal" tabindex="-1" role="dialog"
                        aria-labelledby="firstpasswordModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="firstpasswordModalLabel">Aviso(s)</h5>
                                </div>
                                <div class="modal-body">
                                    @if (session('warn') != '.')
                                        {{ session('warn') }}
                                        <br>
                                    @endif
                                    @if (session('warn2'))
                                        {{ session('warn2') }}
                                    @endif
                                </div>
                                <div class="modal-footer">
                                    @if (session('warn') != '.')
                                        <button type="button" class="btn btn-primary" id="btn_mudar_senha_medico"
                                            data-dismiss="modal" data-toggle="modal"
                                            data-target="#modalEditarAcesso">Alterar
                                            Senha</button>
                                    @endif
                                    @if (session('warn2'))
                                        <button type="button" class="btn btn-primary" id="btn_cadastrar_informacao"
                                            data-dismiss="modal" data-toggle="modal" data-target="#modalInfos">Cadastrar
                                            Informações</button>
                                    @endif
                                    <button type="button" class="btn btn-secondary" id="btn_fechar_warn"
                                        data-dismiss="modal">Fechar</button>
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
                    <div class="alert alert-danger alert-dismissible fade show text-center d-flex justify-content-center align-items-center align-middle"
                        role="alert">
                        <h4 class="pt-1">{{ session('error') }}</h4>
                        <button type="button" class="btn-close align-middle" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show text-center d-flex justify-content-center align-items-center"
                        role="alert">
                        <h4 class="pt-2">{{ session('success') }}</h4>
                        <button type="button" class="btn-close pt-1" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session('error_senha'))
                    <script>
                        $(document).ready(function() {
                            $('#modalEditarAcesso').modal('show');
                        });
                    </script>
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
