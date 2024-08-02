@extends('layouts.menu-medico')

@section('title', 'Painel Médico')

@section('content')
    <div class="container mt-4">
        <div class="d-flex flex-column">
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800 me-3">Pacientes</h1>
                    <div class="d-flex align-items-center">
                        <form class="form-inline mr-auto my-2 my-md-0">
                            <div class="input-group shadow-sm">
                                <input type="text" class="form-control bg-light" placeholder="Pesquisar..."
                                    aria-label="Search">
                                <div class="input-group-prepend">
                                    <button class="btn btn-light border" type="button">
                                        <ion-icon name="search-outline" class="fs-5 align-middle"></ion-icon>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow-sm mb-5">
                            <div class="card-header py-3">
                                <div class="row">
                                    <div class="col text-primary fw-semibold">Nome Completo</div>
                                    <div class="col text-primary fw-semibold">Plano de Saúde</div>
                                    <div class="col text-primary fw-semibold">Última Consulta</div>
                                    <div class="col-2 text-primary fw-semibold">Ação</div>
                                </div>
                            </div>
                            <div class="card-body py-0 ps-3 dados2 border-bottom hscroll">
                                <div id="listaPacientes">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('components.modals.paciente.modal-prontuario-paciente')
    </div>

    <script>
        $(document).ready(function() {
            $.ajax({
                url: '/listar-pacientes',
                type: 'GET',
                success: function(response) {
                    let pacientes = response;
                    let pacientesHtml = '';

                    pacientes.forEach(function(paciente) {
                        let planoSaude = paciente.plano_saude ? paciente.plano_saude : '----';
                        pacientesHtml += '<div class="row pt-3 pb-3 border-bottom">';
                        pacientesHtml += '<div class="col">' + paciente.nome_paciente +
                            '</div>';
                        pacientesHtml += '<div class="col">' + planoSaude + '</div>';
                        pacientesHtml += '<div class="col">' + paciente.ultima_consulta +
                            '</div>';
                        pacientesHtml += '<div class="col-2">';
                        pacientesHtml += '<div class="d-flex flex-row">';
                        pacientesHtml +=
                            '<button type="button" class="btn btn-primary shadow-sm border small me-3 d-flex justify-content-center align-items-center btnProntuarioPaciente" data-id="' +
                            paciente.paciente_id +
                            '" data-toggle="tooltip" title="Abrir Prontuário do Paciente">';
                        pacientesHtml += 'Prontuário';
                        pacientesHtml += '</button>';
                        pacientesHtml += '</div>';
                        pacientesHtml += '</div>';
                        pacientesHtml += '</div>';
                    });

                    $('#listaPacientes').html(pacientesHtml);
                },
                error: function(xhr, status, error) {
                    console.error('Erro na requisição:', error);
                }
            });
        });

        $(document).on('click', '.btnProntuarioPaciente', function() {
            var pacienteId = $(this).data('id');
            $.ajax({
                url: '/prontuario/' + pacienteId,
                type: 'GET',
                success: function(response) {
                    // Processa a resposta aqui
                    var paciente = response.paciente;
                    var consultasCount = response.consultas_count;
                    var consultas = response.consultas;
                    var dataNascimentoFormatada = moment(paciente.data_nascimento).format('DD/MM/YYYY');
                    var data_primeira_consulta = moment(response.data_primeira_consulta).format(
                        'DD/MM/YYYY');

                    var nomeCompleto = paciente.nome_completo;
                    var nomes = nomeCompleto.split(" ");
                    if (nomes.length >= 1) {
                        var primeiroNome = nomes[0];
                        var sobrenome = nomes[nomes.length - 1]; // Último nome é o sobrenome
                        var iniciais = primeiroNome.charAt(0).toUpperCase() + sobrenome.charAt(0)
                            .toUpperCase();
                    }

                    $('#modalProntuarioPaciente').modal('show');

                    console.log(response);

                    $('#nome').val(paciente.nome_completo);
                    $('#cpf').val(paciente.cpf);
                    $('#sexo').val(paciente.sexo);
                    $('#rg').val(paciente.rg);
                    $('#email').val(paciente.email);
                    $('#tel').val(paciente.telefone);
                    $('#rua').val(paciente.rua);
                    $('#num').val(paciente.numero);
                    $('#complemento').val(paciente.complemento);
                    $('#estado').val(paciente.estado);
                    $('#cidade').val(paciente.cidade);
                    $('#cep').val(paciente.cep);
                    $('#data-nasc').val(dataNascimentoFormatada);
                    $('#nome_completo').text(paciente.nome_completo);
                    $('#idade').text(response.idade + ' anos');
                    $('#atendimentos').text('Atendimentos:' + response.consultas_count);
                    $('#primeira_consulta').text('Primeira Consulta: ' + data_primeira_consulta);
                    $("#iniciais").text(iniciais);
                    if (paciente.plano) {
                        $("#plano-sim-detalhes").prop("checked", true);
                        $('#detalhe-nome-plano').val(paciente.plano_saude.nome_plano);
                        $('#detalhe-numero-cartao').val(paciente.plano_saude.nro_plano);
                        $('#info-plano-saude-detalhes').show();
                        $('#plano').text('Plano de Saúde: ' + paciente.plano_saude.nome_plano);
                    } else {
                        $("#plano-nao-detalhes").prop("checked", true);
                        $('#detalhe-nome-plano').val('');
                        $('#detalhe-numero-cartao').val('');
                        $('#info-plano-saude-detalhes').hide();
                        $('#plano').text('Plano de Saúde: --');
                    }

                    var consultasHtml = '';

                    $.each(consultas, function(index, consulta) {
                        consultasHtml += `
                    <div class="col-9 mx-auto">
                        <div class="card mb-2">
                            <div class="card-header d-flex justify-content-between align-items-center" id="headingOne">
                                <div class="me-3">
                                    ${moment(consulta.data_consulta).format('DD/MM/YYYY')}
                                </div>
                                <div>
                                    Médico: ${consulta.medico.nome_completo}
                                </div>
                                <div>
                                    <a href="{{ route('consultas') }}"
                                        class="btn btn-light shadow-sm border small me-3" type="button"
                                        data-id="${consulta.id}"
                                        data-toggle="tooltip" title="Abrir Consulta">
                                        <span class="material-symbols-outlined align-middle fs-4">tab_move</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    `;
                    });

                    $('#accordion-consultas').html(consultasHtml);
                },
                error: function(xhr, status, error) {
                    console.error('Erro na requisição:', error);
                }
            });
        });
    </script>
@endsection
