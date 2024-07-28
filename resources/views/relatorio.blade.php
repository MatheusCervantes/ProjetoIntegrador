@extends('layouts.menu-adm')

@section('title', 'Painel Administrador')

@section('content')
<div class="container mt-4">
    <div class="d-flex flex-column">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800 me-3">Relatórios</h1>
            </div>
            <div class="row">
                <div class="col-5">
                    <form id="formRelatorioFinanceiro" action="{{ route('relatorio.financeiro') }}" method="GET">
                        <div class="card shadow-sm">
                            <div class="card-header p-3">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div>
                                        <h5 class="mb-0 font-nome-agenda">Relatório Financeiro</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-3">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row p-2 d-flex justify-content-center align-items-center">
                                            <div class="col-xxl-7 col-xl-auto col-lg-4 col-md-6 col-sm-12 col-12">
                                                <div class="form-group mb-3">
                                                    <label for="periodo-relatorio-dados" class="pb-2">Período<span class="required-field">*</span></label>
                                                    <div id="periodoDataRelatorioDados" class="btn border bg-white me-3 form-control">
                                                        <ion-icon name="calendar-clear-outline" class="fs-5 text-body pe-1 align-middle"></ion-icon>
                                                        <span class="align-middle"></span>
                                                        <ion-icon name="caret-down" class="fs-5 align-middle"></ion-icon>
                                                    </div>
                                                    <input type="hidden" id="startDate" name="startDate">
                                                    <input type="hidden" id="endDate" name="endDate">
                                                </div>
                                            </div>
                                            <div class="col-xxl-auto col-xl-auto col-lg-auto col-md-6 col-sm-6 col-6 pt-2 ps-1">
                                                <div class="form-group mt-2">
                                                    <button type="submit" class="btn btn-primary shadow-sm">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <ion-icon name="open-outline" class="fs-5 pe-2"></ion-icon>
                                                            <span class="me-2">Gerar Relatório</span>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-7">
                    <form id="formRelatorioConsultas">
                        <div class="card shadow-sm">
                            <div class="card-header p-3">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div>
                                        <h5 class="mb-0 font-nome-agenda">Relatório de Consultas</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row p-2 d-flex justify-content-around align-items-center">
                                            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 flex-grow-1">
                                                <div class="form-group mb-3">
                                                    <label for="relatorio-consultas" class="form-label">Médico</label>
                                                    <select id="relatorio-consultas" name="relatorio-consultas" class="form-select" required>
                                                        <option disabled selected>Selecione...</option>
                                                        <option value="...">...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xxl-5 col-xl-auto col-lg-4 col-md-6 col-sm-12 col-12">
                                                <div class="form-group mb-3">
                                                    <label for="periodo-relatorio-consultas" class="pb-2">Período<span class="required-field">*</span></label>
                                                    <div id="periodoDataRelatorioConsultas" class="btn border bg-white me-3 form-control">
                                                        <ion-icon name="calendar-clear-outline" class="fs-5 text-body pe-1 align-middle"></ion-icon>
                                                        <span class="align-middle"></span>
                                                        <ion-icon name="caret-down" class="fs-5 align-middle"></ion-icon>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-auto col-xl-auto col-lg-auto col-md-6 col-sm-6 col-6 pt-2">
                                                <div class="form-group mt-2">
                                                    <button type="button" class="btn btn-primary shadow-sm">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <ion-icon name="open-outline" class="fs-5 pe-2"></ion-icon>
                                                            <span class="me-2">Gerar Relatório</span>
                                                        </div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection