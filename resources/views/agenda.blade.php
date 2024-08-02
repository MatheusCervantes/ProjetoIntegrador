@extends('layouts.menu-medico')

@section('title', 'Painel Médico')

@section('content')
    <div class="container mt-4">
        <div class="d-flex flex-column">
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800 me-3">Agenda</h1>
                </div>
                <div class="row">
                    <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-6 col-sm-12 col-xs-12">
                        <div class="card shadow-sm">
                            <div class="card-header text-center text-primary py-3">
                                <h5 id="data-atual" class="text-uppercase fw-semibold"></h5>
                                <h6 id="dia-semana-atual" class="text-capitalize"></h6>
                                <form class="form-inline d-flex justify-content-center pt-1 ps-2">
                                    <input type="text" class="form-control" style="width: 16rem;"
                                        placeholder="Pesquisar..." aria-label="Search" id="pequisarconsultaagenda">
                                    <button class="btn bg-white border" type="button" id="btnPesquisarConsultaAgenda">
                                        <ion-icon name="search-outline" class="fs-5 align-middle"></ion-icon>
                                    </button>
                                </form>
                            </div>
                            <div class="card-body py-0 ps-3 border-bottom">
                                <div id="listarConsultaAgenda"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="card shadow-sm mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 text-primary">Calendário</h6>
                            </div>
                            <div class="card-body pt-0 pb-3">
                                <div id="calendario-agenda"></div>
                                <input type="hidden" id="data-selecionada-hidden" name="data-selecionada-hidden">
                            </div>
                        </div>
                        <div class="card shadow-sm mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 text-primary">Resumo do Dia</h6>
                            </div>
                            <div class="card-body py-3">
                                <div class="row">
                                    <div class="col">
                                        <div>Atendimentos</div>
                                    </div>
                                    <div class="col-auto">
                                        <div id="total_atendimentos"></div>
                                    </div>
                                </div>
                                <div class="row pt-2 ms-1">
                                    <div class="col d-flex align-items-center">
                                        <ion-icon name="ellipse" class="text-primary me-2 font-bullet"></ion-icon>
                                        <div class="text-primary font-resumo">Confirmados</div>
                                    </div>
                                    <div class="col-auto">
                                        <div id="confirmados"></div>
                                    </div>
                                </div>
                                <div class="row pt-2 ms-1">
                                    <div class="col d-flex align-items-center">
                                        <ion-icon name="ellipse" class="text-warning me-2 font-bullet"></ion-icon>
                                        <div class="text-warning font-resumo">Reagendados</div>
                                    </div>
                                    <div class="col-auto">
                                        <div id="reagendados"></div>
                                    </div>
                                </div>
                                <div class="row pt-2 ms-1">
                                    <div class="col d-flex align-items-center">
                                        <ion-icon name="ellipse" class="text-success me-2 font-bullet"></ion-icon>
                                        <div class="text-success font-resumo">Concluídos</div>
                                    </div>
                                    <div class="col-auto">
                                        <div id="concluidos"></div>
                                    </div>
                                </div>
                                <div class="row pt-2 ms-1">
                                    <div class="col d-flex align-items-center">
                                        <ion-icon name="ellipse" class="text-danger me-2 font-bullet"></ion-icon>
                                        <div class="text-danger font-resumo">Cancelados</div>
                                    </div>
                                    <div class="col-auto">
                                        <div id="cancelados"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
