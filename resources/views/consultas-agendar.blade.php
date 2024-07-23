@extends('layouts.menu-recepcionista')

@section('title', 'Painel Recepcionista')

@section('content')
<div class="container mt-4">
    <div class="d-flex flex-column">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800 me-3">Agendar Consulta</h1>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="card-header p-3">
                            <div class="d-flex align-items-center">
                                <div class="d-flex justify-content-center align-items-center rounded-circle bg-dark-subtle text-white avatar-md" style="width: 4.2rem; height: 4.2rem">
                                    <div class="fs-4">LC</div>
                                </div>
                                <div class="flex-1 ms-3">
                                    <h5 class="mb-0 font-nome-agenda">Luzia Campos</h5>
                                    <span class="text-muted mb-0">Cardiologista</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-4 ps-4">
                            <div>
                                <div class="d-flex align-items-center">
                                    <i class="fa-regular fa-address-card pe-2 me-1"></i>
                                    <p class="text-muted mb-0"> CRM: 0000000/SP</p>
                                </div>
                                <div class="d-flex align-items-center mt-2">
                                    <ion-icon name="information-circle-outline" class="align-middle fs-5 pe-2"></ion-icon>
                                    <p class="badge badge-soft-danger mb-0 font-resumo cursor" data-toggle="tooltip" data-bs-placement="bottom" title="Valor da consulta: R$ 400,00">Apenas consultas particulares</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end gap-2 pt-4">
                                <button type="button" class="btn btn-outline-primary btnAgendarConsulta">
                                    <ion-icon name="calendar-outline" class="align-middle font-nome-agenda pe-1 pb-1"></ion-icon> Agendar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="card-header p-3">
                            <div class="d-flex align-items-center">
                                <div class="d-flex justify-content-center align-items-center rounded-circle bg-dark-subtle text-white" style="width: 4.2rem; height: 4.2rem">
                                    <div class="fs-4">MA</div>
                                </div>
                                <div class="flex-1 ms-3">
                                    <h5 class="mb-0 font-nome-agenda">Marcelo Alves</h5>
                                    <span class="text-muted mb-0">Oftalmologista</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-4 ps-4">
                            <div>
                                <div class="d-flex align-items-center">
                                    <i class="fa-regular fa-address-card pe-2 me-1"></i>
                                    <p class="text-muted mb-0"> CRM: 1111111/SP</p>
                                </div>
                                <div class="d-flex align-items-center mt-2">
                                    <ion-icon name="information-circle-outline" class="align-middle fs-5 pe-2"></ion-icon>
                                    <p class="badge badge-soft-success mb-0 font-resumo cursor" data-toggle="tooltip" data-bs-placement="bottom" title="Unimed, Bensaúde, Amil, Hapvida">Aceita planos de saúde</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end gap-2 pt-4">
                                <button type="button" class="btn btn-outline-primary btnAgendarConsulta">
                                    <ion-icon name="calendar-outline" class="align-middle font-nome-agenda pe-1 pb-1"></ion-icon> Agendar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="card-header p-3">
                            <div class="d-flex align-items-center">
                                <div class="d-flex justify-content-center align-items-center rounded-circle bg-dark-subtle text-white avatar-md" style="width: 4.2rem; height: 4.2rem">
                                    <div class="fs-4">GA</div>
                                </div>
                                <div class="flex-1 ms-3">
                                    <h5 class="mb-0 font-nome-agenda">Guilherme Fernandes Araújo</h5>
                                    <span class="text-muted mb-0">Dermatologista</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-4 ps-4">
                            <div>
                                <div class="d-flex align-items-center">
                                    <i class="fa-regular fa-address-card pe-2 me-1"></i>
                                    <p class="text-muted mb-0"> CRM: 2222222/SP</p>
                                </div>
                                <div class="d-flex align-items-center mt-2">
                                    <ion-icon name="information-circle-outline" class="align-middle fs-5 pe-2"></ion-icon>
                                    <p class="badge badge-soft-success mb-0 font-resumo cursor" data-toggle="tooltip" data-bs-placement="bottom" title="Unimed">Aceita planos de saúde</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end gap-2 pt-4">
                                <button type="button" class="btn btn-outline-primary btnAgendarConsulta">
                                    <ion-icon name="calendar-outline" class="align-middle font-nome-agenda pe-1 pb-1"></ion-icon> Agendar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.modals.consulta.modal-agendar-consulta')
</div>
@endsection
