@extends('layouts.menu-recepcionista')

@section('title', 'Painel Recepcionista')

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
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body p-4 pb-2">
                                    <div class="d-flex align-items-center">
                                        <div class="mb-3">
                                            <div class="rounded-circle border border-secondary d-flex align-items-center justify-content-center mx-auto"
                                                style="width: 4rem; height: 4rem;">
                                                <ion-icon name="alert-outline"
                                                    class="fs-1 align-middle text-warning"></ion-icon>
                                            </div>
                                        </div>
                                        <div class="ms-3">
                                            <p class="fw-bold mb-1 h6">Atenção</p>
                                            <p>{{ session('warn') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-secondary" id="btn_fechar_warn"
                                        data-bs-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-sm btn-primary" id="btn_mudar_senha_recepcionista"
                                        data-dismiss="modal" data-toggle="modal" data-target="#modalEditarAcesso">Editar
                                        Senha</button>
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
                @if (session('error_senha'))
                    <script>
                        $(document).ready(function() {
                            $.ajax({
                                url: '/painel-recepcionista/usuario_logado',
                                method: 'GET',
                                success: function(response) {
                                    if (response.usuario) {
                                        $('#modalEditarAcesso').modal('show');
                                        $('#nome-usuario').val(response.usuario);
                                        $('#formEditarAcesso').attr('action', '/painel-recepcionista/alterar_senha');
                                    } else {
                                        console.error('Resposta inesperada da API:', response);
                                    }
                                },
                                error: function(xhr, status, error) {
                                    console.error('Erro ao buscar dados do usuário:', error);
                                }
                            });
                        });
                    </script>
                @endif
                <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-6 col-sm-6 col-xs-12 mb-4">
                        <div class="card shadow-sm">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 text-primary">Agenda Médica do Dia</h6>
                            </div>
                            <div class="card-body p-0">
                                <div class="dx-viewport demo-container">
                                    <div id="scheduler"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
