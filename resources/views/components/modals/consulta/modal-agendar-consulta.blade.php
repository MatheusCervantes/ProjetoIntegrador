<div class="modal fade modal-md" data-bs-backdrop="static" data-bs-keyboard="false" id="modalAgendarConsulta" tabindex="-1"
    aria-labelledby="modalAgendarConsultaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:700px; width: 100%;">
        <div class="modal-content">
            <div class="modal-header bg-body-tertiary">
                <div class="d-flex justify-content-center align-items-center flex-grow-1">
                    <h4 class="modal-title fw-bold text-primary ms-3" id="modalAgendarConsultaLabel">Agendar Consulta
                    </h4>
                </div>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                    aria-label="Fechar"></button>
            </div>
            <div class="modal-body m-5 mb-2 mt-0 py-4 pt-3">
                <form id="formAgendarConsulta" method="POST" action="/marcar_consulta">
                    @csrf
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h5 class="fw-semibold mb-0">Informações do Paciente</h5>
                        <div class="d-flex flex-column align-items-center pt-2">
                            <button class="btn btn-light shadow-sm border small d-flex align-items-center"
                                type="button" data-bs-target="#modalPesquisarPaciente" data-bs-toggle="modal">
                                <div>Pesquisar Paciente</div>
                                <ion-icon name="search-outline" class="ms-2"></ion-icon>
                            </button>
                        </div>
                    </div>
                    <div class="form-check form-switch pt-1 pb-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Primeira Consulta</label>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome Completo</label>
                                <input type="text" class="form-control" id="nome" name="nome_paciente" required
                                    readonly>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="telefone" class="form-label">Telefone</label>
                                <input type="tel" class="form-control tel" id="telefone" name="telefone_paciente"
                                    required readonly>
                            </div>
                        </div>
                        <input type="hidden" id="id_paciente_consulta" name="paciente_consulta">
                        <input type="hidden" id="id_medico_consulta" name="medico_consulta">
                    </div>
                    <br>
                    <div>
                        <h5 class="mb-3 fw-semibold">Data e Hora</h5>
                    </div>
                    <div class="card">
                        <input type="text" id="data_cadastrar_consulta" name="data_selecionada"
                            class="btn btn-light border bg-light" readonly
                            title="Selecione uma Data para visualizar os horários disponíveis">

                        </input>
                        <div id="horarios_disponiveis"> </div>
                        <input type="hidden" id="hora_selecionado" name="hora_selecionado">
                    </div>
            </div>
            <div class="modal-footer bg-body-tertiary">
                <button type="button" class="btn btn-secondary" id="btn_cancelar_agendamento"
                    data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" form="formAgendarConsulta">Salvar</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Pesquisar Paciente-->
<div class="modal fade modal-lg" data-bs-backdrop="static" data-bs-keyboard="false" id="modalPesquisarPaciente"
    tabindex="-1" aria-labelledby="modalPesquisarPacienteLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-body-tertiary">
                <div class="d-flex justify-content-center align-items-center flex-grow-1">
                    <h4 class="modal-title fw-bold text-primary" id="modalPesquisarPacienteLabel">Pesquisar Paciente
                    </h4>
                </div>
            </div>
            <div class="modal-body m-5 mb-1 mt-0 py-4 pt-4">
                <div class="d-flex align-items-center justify-content-center pb-3">
                    <form id="searchForm" class="form-inline w-75">
                        <div class="input-group shadow-sm">
                            <input type="text" class="form-control bg-light" placeholder="Pesquisar..."
                                aria-label="Search" id="searchInput">
                            <div class="input-group-prepend">
                                <button class="btn btn-light border" type="button" id="searchButton">
                                    <ion-icon name="search-outline" class="fs-5 align-middle"></ion-icon>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow-sm mb-1">
                            <div class="card-header py-3">
                                <div class="row">
                                    <div class="col text-primary fw-semibold">Nome Completo</div>
                                    <div class="col text-primary fw-semibold">CPF</div>
                                    <div class="col text-primary fw-semibold">Telefone</div>
                                    <div class="col-2 text-primary fw-semibold">Ação</div>
                                </div>
                            </div>
                            <div class="card-body py-0 ps-3 dados2 border-bottom hscroll">
                                <div id="pacientesList">
                                    <!-- Pacientes serão carregados aqui via AJAX -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-body-tertiary">
                <button type="button" class="btn btn-secondary" data-bs-target="#modalAgendarConsulta"
                    data-bs-toggle="modal">Voltar</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Prevenir o envio do formulário ao pressionar Enter
        $('#searchForm').on('submit', function(event) {
            event.preventDefault();
        });

        $('#searchButton').on('click', function() {
            var search = $('#searchInput').val();

            $.ajax({
                url: '/painel-recepcionista/consultas-agendar/mostrarpacientes',
                type: 'GET',
                data: {
                    search: search
                },
                success: function(response) {
                    $('#pacientesList').html(
                        ''); // Limpa a lista antes de adicionar novos resultados
                    if (response.pacientes && response.pacientes.length > 0) {
                        $.each(response.pacientes, function(index, paciente) {
                            $('#pacientesList').append(
                                '<div class="row pt-3 pb-3 border-bottom">' +
                                '<div class="col">' + paciente.nome_completo +
                                '</div>' +
                                '<div class="col">' + paciente.cpf + '</div>' +
                                '<div class="col">' + paciente.telefone +
                                '</div>' +
                                '<div class="col-2">' +
                                '<div class="d-flex flex-row">' +
                                '<button type="button" class="btn btn-sm btn-primary shadow-sm border small me-3 d-flex justify-content-center align-items-center btn-select-paciente" ' +
                                'data-id="' + paciente.id + '" ' +
                                'data-nome="' + paciente.nome_completo + '" ' +
                                'data-telefone="' + paciente.telefone + '">' +
                                'Selecionar' +
                                '</button>' +
                                '</div>' +
                                '</div>' +
                                '</div>'
                            );
                        });
                    } else {
                        $('#pacientesList').html(
                            '<p class="text-center text-muted my-4">Nenhum paciente encontrado.</p>'
                        );
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Erro na requisição AJAX:', error);
                    $('#pacientesList').html(
                        '<p class="text-center text-muted my-4">Erro ao buscar pacientes.</p>'
                    );
                }
            });
        });
    });

    $(document).on('click', '.btn-select-paciente', function() {
        var pacienteId = $(this).data('id');
        var pacienteNome = $(this).data('nome');
        var pacienteTelefone = $(this).data('telefone'); // Adicione outros dados conforme necessário

        // Preenche os campos do modal com os dados do paciente
        $('#nome').val(pacienteNome).prop('readonly', true);
        $('#telefone').val(pacienteTelefone).prop('readonly', true);
        $('#flexSwitchCheckDefault').prop('disabled', true); // Desabilita a opção "Primeira Consulta"
        $('#id_paciente_consulta').val(pacienteId);

        // Abre o modal de agendamento
        $('#modalAgendarConsulta').modal('show');
        $('#modalPesquisarPaciente').modal('hide');
    });

    $('#btn_cancelar_agendamento').on('click', function() {
        $('#modalAgendarConsulta').modal('hide');
        $('#nome').val('').prop('readonly', true);
        $('#telefone').val('').prop('readonly', true);
        $('#flexSwitchCheckDefault').prop('disabled', false);
        $('#id_paciente_consulta').val('');
    });
</script>

<style>
    .daterangepicker {
        display: block;
    }
</style>
