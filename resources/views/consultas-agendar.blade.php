@extends('layouts.menu-recepcionista')

@section('title', 'Painel Recepcionista')

@section('content')
    <div class="container mt-4">
        <div class="d-flex flex-column">
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800 me-3">Agendar Consulta</h1>
                </div>
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
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    @foreach ($medicos as $medico)
                        <div class="col">
                            <div class="card shadow-sm">
                                <div class="card-header p-3">
                                    <div class="d-flex align-items-center">
                                        @if ($medico->foto == null)
                                            @php
                                                $nome_completo = $medico->nome_completo;
                                                $nome_array = explode(' ', $nome_completo);
                                                $iniciais =
                                                    strtoupper(substr($nome_array[0], 0, 1)) .
                                                    strtoupper(substr(end($nome_array), 0, 1));
                                            @endphp
                                            <div class="d-flex justify-content-center align-items-center rounded-circle bg-dark-subtle text-white avatar-md"
                                                style="width: 4.2rem; height: 4.2rem">
                                                <div class="fs-4">{{ $iniciais }}</div>
                                            </div>
                                        @else
                                            @php
                                                $caminho_imagem = $medico->foto
                                                    ? asset('img/perfil/' . $medico->foto)
                                                    : asset('img/default-avatar.png');
                                            @endphp
                                            <div class="d-flex justify-content-center align-items-center rounded-circle bg-dark-subtle text-white avatar-md"
                                                style="width: 4.2rem; height: 4.2rem">
                                                <div class="fs-4">
                                                    <img src="{{ $caminho_imagem }}" class="rounded-circle"
                                                        style="width: 4.2rem; height: 4.2rem; object-fit: cover;"
                                                        alt="Foto de {{ $medico->nome_completo }}">
                                                </div>
                                            </div>
                                        @endif
                                        <div class="flex-1 ms-3">
                                            <h5 class="mb-0 font-nome-agenda">{{ $medico->nome_completo }}</h5>
                                            <span
                                                class="text-muted mb-0">{{ $medico->informacaoProfissional->atuacao }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-4 ps-4">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <i class="fa-regular fa-address-card pe-2 me-1"></i>
                                            <p class="text-muted mb-0"> CRM: {{ $medico->informacaoProfissional->crm }}</p>
                                        </div>
                                        @if ($medico->informacaoProfissional->plano_saude != null)
                                            <div class="d-flex align-items-center mt-2">
                                                <ion-icon name="information-circle-outline"
                                                    class="align-middle fs-5 pe-2"></ion-icon>
                                                <p class="badge badge-soft-success mb-0 font-resumo cursor"
                                                    data-toggle="tooltip" data-bs-placement="bottom"
                                                    title="{{ $medico->informacaoProfissional->plano_saude }}">Aceita planos
                                                    de saúde</p>
                                            </div>
                                        @else
                                            <div class="d-flex align-items-center mt-2">
                                                <ion-icon name="information-circle-outline"
                                                    class="align-middle fs-5 pe-2"></ion-icon>
                                                <p class="badge badge-soft-danger mb-0 font-resumo cursor"
                                                    data-toggle="tooltip" data-bs-placement="bottom"
                                                    title="Valor da consulta: R$ {{ $medico->informacaoProfissional->valor_consulta }}">
                                                    Apenas
                                                    consultas particulares</p>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="d-flex justify-content-end gap-2 pt-4">
                                        <button type="button" class="btn btn-outline-primary btnAgendarConsulta"
                                            data-medico="{{ $medico->id }}">
                                            <ion-icon name="calendar-outline"
                                                class="align-middle font-nome-agenda pe-1 pb-1"></ion-icon> Agendar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @include('components.modals.consulta.modal-agendar-consulta')
    </div>
@endsection
