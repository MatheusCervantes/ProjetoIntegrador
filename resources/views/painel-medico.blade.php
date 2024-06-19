@extends('layouts.menu-medico')

@section('title', 'Painel Médico')

@section('content')
<div class="container mt-4">
    <div class="d-flex flex-column">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>
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
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-2">
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
                <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-2">
                    <div class="card shadow-sm mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 text-primary">Atendimentos por Plano de Saúde</h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-pie">
                                <canvas id="grafico-medico-atendimentos"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-2">
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