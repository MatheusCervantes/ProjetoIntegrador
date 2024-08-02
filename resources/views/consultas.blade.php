@extends('layouts.menu-medico')

@section('title', 'Painel Médico')

@section('content')
    <div class="container mt-4">
        <div class="d-flex flex-column">
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-3">
                    <div>
                        <h1 class="h3 mb-0 text-gray-800 me-3">Consultas</h1>
                        <h6 id="data-calendario-consulta" class="text-uppercase text-secondary mt-2"></h6>
                    </div>
                    <div class="d-flex align-items-center">
                        <form class="form-inline mr-auto my-2 my-md-0 me-3">
                            <div class="input-group shadow-sm">
                                <input type="date" id="data_consulta" name="data_consulta" class="form-control bg-light"
                                    title="Clique em pesquisar para alterar o dia">
                            </div>
                        </form>
                        <form class="form-inline mr-auto my-2 my-md-0">
                            <div class="input-group shadow-sm">
                                <input type="text" class="form-control bg-light" placeholder="Pesquisar..."
                                    aria-label="Search" id="pesquisa_consulta_medico">
                                <div class="input-group-prepend">
                                    <button class="btn btn-light border" type="button"
                                        id="btnPesquisaConsulta_Consulta_Medico">
                                        <ion-icon name="search-outline" class="fs-5 align-middle"></ion-icon>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow-sm mb-5">
                            <div class="card-header py-3">
                                <div class="row">
                                    <div class="col text-primary fw-semibold">Data</div>
                                    <div class="col text-primary fw-semibold">Hora</div>
                                    <div class="col text-primary fw-semibold">Paciente</div>
                                    <div class="col-2 text-primary fw-semibold">Ações</div>
                                </div>
                            </div>
                            <div class="card-body py-0 ps-3 border-bottom hscroll">
                                <div id="listaconsultas"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('components.modals.consulta.modal-iniciar-consulta')
        @include('components.modals.consulta.modal-editar-consulta')
        @include('components.modals.consulta.modal-detalhes-consulta')
        <script>
            $(document).ready(function() {
                moment.locale('pt-br');

                function atualizarDataPorExtenso(data) {
                    var dataPorExtenso = moment(data).format('dddd, D [de] MMMM [de] YYYY');
                    $('#data-calendario-consulta').text(dataPorExtenso);
                }

                var hoje = moment().format('YYYY-MM-DD');
                $('#data_consulta').val(hoje);
                atualizarDataPorExtenso(hoje);

                function listarConsultas(data) {
                    $.ajax({
                        url: '/consultas/listar_consulta/' + data,
                        type: 'GET',
                        success: function(response) {
                            var consultas = response.consultas;
                            var listaconsultas = $('#listaconsultas');

                            listaconsultas.empty();

                            if (consultas.length === 0) {
                                $('#listaconsultas').html(
                                    '<p class="text-center pt-3">Não há consultas confirmadas para esta data.</p>'
                                );
                                return;
                            }

                            consultas.forEach(function(consulta) {
                                console.log(consulta);
                                var row = $('<div class="row pt-3 pb-3 border-bottom"></div>');
                                var dataColuna = $('<div class="col data-coluna-consulta"></div>')
                                    .text(
                                        moment(consulta.data_consulta).format('DD/MM/YYYY'));
                                var horario = $('<div class="col"></div>').text(moment(consulta
                                    .hora_consulta, 'HH:mm:ss').format('HH:mm'));
                                var paciente = $('<div class="col"></div>').text(consulta
                                    .nome_paciente);
                                var botoes = $('<div class="col-2"></div>');

                                var botoesContainer = $('<div class="d-flex flex-row"></div>');

                                if (consulta.status === 'confirmado') {
                                    botoesContainer.append(
                                        $('<button type="button" class="btn btn-sm btn-success me-2 d-flex justify-content-center align-items-center btnIniciarConsulta" data-id_consulta="' +
                                            consulta.id + '" data-plano="' + consulta
                                            .plano_saude + '" data-nome="' + consulta
                                            .nome_paciente + '">Iniciar Consulta</button>')
                                    );
                                } else if (consulta.status === 'concluido') {
                                    botoesContainer.append(
                                        $('<button type="button" class="btn btn-sm btn-warning me-2 d-flex justify-content-center align-items-center btnEditarConsulta" data-id_consulta="' +
                                            consulta.id + '" data-plano="' + consulta
                                            .plano_saude + '" data-nome="' + consulta
                                            .nome_paciente +
                                            '" data-toggle="tooltip" title="Editar Consulta"><ion-icon name="create-outline" class="fs-5"></ion-icon></button>'
                                        ),
                                        $('<button type="button" class="btn btn-sm btn-secondary me-2 d-flex justify-content-center align-items-center btnDetalhesConsulta" data-id_consulta="' +
                                            consulta.id + '" data-plano="' + consulta
                                            .plano_saude + '" data-nome="' + consulta
                                            .nome_paciente +
                                            '" data-toggle="tooltip" title="Exibir Detalhes da Consulta"><ion-icon name="information-circle-outline" class="fs-5"></ion-icon></button>'
                                        )
                                    );
                                }

                                botoes.append(botoesContainer);
                                row.append(dataColuna, horario, paciente, botoes);
                                listaconsultas.append(row);
                            });
                        }
                    });
                }

                listarConsultas(hoje);

                $('#btnPesquisaConsulta_Consulta_Medico').on('click', function() {
                    var search = $('#pesquisa_consulta_medico').val();
                    var data = $('#data_consulta').val();

                    atualizarDataPorExtenso(data);

                    var link = search === '' ?
                        '/consultas/listar_consulta/' + data :
                        '/painel-medico/consultas/listar_consulta/pesquisa/' + data + '/' + search;

                    $.ajax({
                        url: link,
                        type: 'GET',
                        success: function(response) {
                            var consultas = response.consultas;
                            var listaconsultas = $('#listaconsultas');

                            listaconsultas.empty();

                            if (consultas.length === 0) {
                                $('#listaconsultas').html(
                                    '<p class="text-center pt-3">Não há consultas confirmadas para esta data.</p>'
                                );
                                return;
                            }

                            consultas.forEach(function(consulta) {
                                console.log(consulta);
                                var row = $(
                                    '<div class="row pt-3 pb-3 border-bottom"></div>');
                                var dataColuna = $(
                                        '<div class="col data-coluna-consulta"></div>')
                                    .text(
                                        moment(consulta.data_consulta).format('DD/MM/YYYY')
                                    );
                                var horario = $('<div class="col"></div>').text(moment(
                                    consulta.hora_consulta, 'HH:mm:ss').format(
                                    'HH:mm'));
                                var paciente = $('<div class="col"></div>').text(consulta
                                    .nome_paciente);
                                var botoes = $('<div class="col-2"></div>');

                                var botoesContainer = $(
                                    '<div class="d-flex flex-row"></div>');

                                if (consulta.status === 'confirmado') {
                                    botoesContainer.append(
                                        $('<button type="button" class="btn btn-sm btn-success me-2 d-flex justify-content-center align-items-center btnIniciarConsulta" data-id_consulta="' +
                                            consulta.id + '" data-plano="' + consulta
                                            .plano_saude + '" data-nome="' + consulta
                                            .nome_paciente +
                                            '">Iniciar Consulta</button>')
                                    );
                                } else if (consulta.status === 'concluido') {
                                    botoesContainer.append(
                                        $('<button type="button" class="btn btn-sm btn-warning me-2 d-flex justify-content-center align-items-center btnEditarConsulta" data-id_consulta="' +
                                            consulta.id + '" data-plano="' + consulta
                                            .plano_saude + '" data-nome="' + consulta
                                            .nome_paciente +
                                            '" data-toggle="tooltip" title="Editar Consulta"><ion-icon name="create-outline" class="fs-5"></ion-icon></button>'
                                        ),
                                        $('<button type="button" class="btn btn-sm btn-secondary me-2 d-flex justify-content-center align-items-center btnDetalhesConsulta" data-id_consulta="' +
                                            consulta.id + '" data-plano="' + consulta
                                            .plano_saude + '" data-nome="' + consulta
                                            .nome_paciente +
                                            '" data-toggle="tooltip" title="Exibir Detalhes da Consulta"><ion-icon name="information-circle-outline" class="fs-5"></ion-icon></button>'
                                        )
                                    );
                                }

                                botoes.append(botoesContainer);
                                row.append(dataColuna, horario, paciente, botoes);
                                listaconsultas.append(row);
                            });
                        }
                    });
                });

                $('#data_consulta').on('change', function() {
                    var data = $('#data_consulta').val();

                    atualizarDataPorExtenso(data);

                    $.ajax({
                        url: '/consultas/listar_consulta/' + data,
                        type: 'GET',
                        success: function(response) {
                            var consultas = response.consultas;
                            var listaconsultas = $('#listaconsultas');

                            listaconsultas.empty();

                            if (consultas.length === 0) {
                                $('#listaconsultas').html(
                                    '<p class="text-center pt-3">Não há consultas confirmadas para esta data.</p>'
                                );
                                return;
                            }

                            consultas.forEach(function(consulta) {
                                console.log(consulta);
                                var row = $(
                                    '<div class="row pt-3 pb-3 border-bottom"></div>');
                                var dataColuna = $(
                                        '<div class="col data-coluna-consulta"></div>')
                                    .text(
                                        moment(consulta.data_consulta).format('DD/MM/YYYY')
                                    );
                                var horario = $('<div class="col"></div>').text(moment(
                                    consulta.hora_consulta, 'HH:mm:ss').format(
                                    'HH:mm'));
                                var paciente = $('<div class="col"></div>').text(consulta
                                    .nome_paciente);
                                var botoes = $('<div class="col-2"></div>');

                                var botoesContainer = $(
                                    '<div class="d-flex flex-row"></div>');

                                if (consulta.status === 'confirmado') {
                                    botoesContainer.append(
                                        $('<button type="button" class="btn btn-sm btn-success me-2 d-flex justify-content-center align-items-center btnIniciarConsulta" data-id_consulta="' +
                                            consulta.id + '" data-plano="' + consulta
                                            .plano_saude + '" data-nome="' + consulta
                                            .nome_paciente +
                                            '">Iniciar Consulta</button>')
                                    );
                                } else if (consulta.status === 'concluido') {
                                    botoesContainer.append(
                                        $('<button type="button" class="btn btn-sm btn-warning me-2 d-flex justify-content-center align-items-center btnEditarConsulta" data-id_consulta="' +
                                            consulta.id + '" data-plano="' + consulta
                                            .plano_saude + '" data-nome="' + consulta
                                            .nome_paciente +
                                            '" data-toggle="tooltip" title="Editar Consulta"><ion-icon name="create-outline" class="fs-5"></ion-icon></button>'
                                        ),
                                        $('<button type="button" class="btn btn-sm btn-secondary me-2 d-flex justify-content-center align-items-center btnDetalhesConsulta" data-id_consulta="' +
                                            consulta.id + '" data-plano="' + consulta
                                            .plano_saude + '" data-nome="' + consulta
                                            .nome_paciente +
                                            '" data-toggle="tooltip" title="Exibir Detalhes da Consulta"><ion-icon name="information-circle-outline" class="fs-5"></ion-icon></button>'
                                        )
                                    );
                                }

                                botoes.append(botoesContainer);
                                row.append(dataColuna, horario, paciente, botoes);
                                listaconsultas.append(row);
                            });
                        }
                    });
                });

                $(document).on('click', '.btnIniciarConsulta', function() {
                    var consultaId = $(this).data('id_consulta');
                    var plano = $(this).data('plano');
                    var nome = $(this).data('nome');

                    function getIniciais(nome) {
                        var nomes = nome.split(' ');
                        if (nomes.length > 1) {
                            return nomes[0][0] + nomes[nomes.length - 1][0];
                        } else {
                            return nomes[0][0];
                        }
                    }

                    var iniciais = getIniciais(nome);

                    $('#modalIniciarConsulta').modal('show');
                    $('#id_consulta_inserir').val(consultaId);
                    $('#convenio').text(plano);
                    $('#nome_paciente').text(nome);
                    $('#iniciais').text(iniciais);

                });

                $(document).on('click', '.btnDetalhesConsulta', function() {
                    var consultaId = $(this).data('id_consulta');
                    var plano = $(this).data('plano');
                    var nome = $(this).data('nome');

                    if (plano === null) {
                        plano = 'Particular';
                    }

                    var iniciais = getIniciais(nome);

                    function getIniciais(nome) {
                        var nomes = nome.split(' ');
                        if (nomes.length > 1) {
                            return nomes[0][0] + nomes[nomes.length - 1][0];
                        } else {
                            return nomes[0][0];
                        }
                    }

                    $('#modalDetalhesConsulta').modal('show');
                    $('#convenio_detalhes').text(plano);
                    $('#nome_paciente_detalhes').text(nome);
                    $('#iniciais_detalhes').text(iniciais);

                    $.ajax({
                        url: '/detalhes/consulta/iniciar_consulta/' +
                            consultaId,
                        type: 'GET',
                        success: function(response) {
                            console.log(response);
                            $('#peso_detalhes').val(response.peso_paciente);
                            $('#altura_detalhes').val(response.altura_paciente);
                            if (response.alergia) {
                                $('#detalhes-alergia-sim').prop('checked', true);
                                $('#detalhes-alergias_detalhes').val(response.alergia);
                                $('#info-detalhes-alergia-medicamentos').show();
                            } else {
                                $('#detalhes-alergia-nao').prop('checked', true);
                            }
                            if (response.cirurgia) {
                                $('#detalhes-cirurgia-sim').prop('checked', true);
                                $('#detalhes-cirurgias_detalhes').val(response.cirurgia);
                                $('#info-detalhes-cirurgia').show();
                            } else {
                                $('#detalhes-cirurgia-nao').prop('checked', true);
                            }
                            if (response.medicamento) {
                                $('#detalhes-medicamento-sim').prop('checked', true);
                                $('#detalhes-medicamentos_detalhes').val(response.medicamento);
                                $('#info-detalhes-medicamento-regular').show();
                            } else {
                                $('#detalhes-medicamento-nao').prop('checked', true);
                            }
                            if (response.condicao_saude) {
                                $('#detalhes-condicao-sim').prop('checked', true);
                                $('#detalhes-condicoes_detalhes').val(response.condicao_saude);
                                $('#info-detalhes-condicao-preexistente').show();
                            } else {
                                $('#detalhes-condicao-nao').prop('checked', true);
                            }
                            if (response.atividade_fisica) {
                                $('#detalhes-atividade-sim').prop('checked', true);
                            } else {
                                $('#detalhes-atividade-nao').prop('checked', true);
                            }
                            if (response.vicio) {
                                $('#detalhes-vicio-sim').prop('checked', true);
                                $('#detalhes-vicios_detalhes').val(response.vicio);
                                $('#info-detalhes-vicio').show();
                            } else {
                                $('#detalhes-vicio-nao').prop('checked', true);
                            }
                            if (response.anamnese) {
                                $('#anamneseDetalhesEditor .ql-editor').html(response.anamnese);
                            }
                            $('#detalhes-primeiro-cid').val(response.cid);
                            $('#detalhes-segundo-cid').val(response.cid_opc);
                            if (response.diagnostico) {
                                $('#diagnosticoDetalhesEditor .ql-editor').html(response
                                    .diagnostico);
                            }
                            if (response.prescricao) {
                                $('#prescricoesDetalhesEditor .ql-editor').html(response
                                    .prescricao);
                            }
                            if (response.exames) {
                                $('#examesDetalhesEditor .ql-editor').html(response.exames);
                            }
                            if (response.atestado) {
                                $('#atestadosDetalhesEditor .ql-editor').html(response.atestado);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Erro na requisição:', status,
                                error);
                        }
                    });
                });

                $(document).on('click', '.btnEditarConsulta', function() {
                    var consultaId = $(this).data('id_consulta');
                    var plano = $(this).data('plano');
                    var nome = $(this).data('nome');

                    if (plano === null) {
                        plano = 'Particular';
                    }

                    var iniciais = getIniciais(nome);

                    function getIniciais(nome) {
                        var nomes = nome.split(' ');
                        if (nomes.length > 1) {
                            return nomes[0][0] + nomes[nomes.length - 1][0];
                        } else {
                            return nomes[0][0];
                        }
                    }

                    $('#modalEditarConsulta').modal('show');
                    $('#id_consulta_editar').val(consultaId);
                    $('#convenio_edit').text(plano);
                    $('#nome_paciente_edit').text(nome);
                    $('#iniciais_edit').text(iniciais);

                    $.ajax({
                        url: '/detalhes/consulta/iniciar_consulta/' +
                            consultaId,
                        type: 'GET',
                        success: function(response) {
                            console.log(response);
                            $('#peso_edit').val(response.peso_paciente);
                            $('#altura_edit').val(response.altura_paciente);
                            if (response.alergia) {
                                $('#editar-alergia-sim').prop('checked', true);
                                $('#editar-alergias').val(response.alergia);
                                $('#info-editar-alergia-medicamentos').show();
                            } else {
                                $('#editar-alergia-nao').prop('checked', true);
                                $('#editar-alergias').val(' ');
                            }
                            if (response.cirurgia) {
                                $('#editar-cirurgia-sim').prop('checked', true);
                                $('#editar-cirurgias').val(response.cirurgia);
                                $('#info-editar-cirurgia').show();
                            } else {
                                $('#editar-cirurgia-nao').prop('checked', true);
                                $('#editar-cirurgias').val(' ');
                            }
                            if (response.medicamento) {
                                $('#editar-medicamento-sim').prop('checked', true);
                                $('#editar-medicamentos').val(response.medicamento);
                                $('#info-editar-medicamento-regular').show();
                            } else {
                                $('#editar-medicamento-nao').prop('checked', true);
                                $('#editar-medicamentos').val('');
                            }
                            if (response.condicao_saude) {
                                $('#editar-condicao-sim').prop('checked', true);
                                $('#editar-condicoes').val(response.condicao_saude);
                                $('#info-editar-condicao-preexistente').show();
                            } else {
                                $('#editar-condicao-nao').prop('checked', true);
                                $('#editar-condicoes').val('');
                            }
                            if (response.atividade_fisica) {
                                $('#editar-atividade-sim').prop('checked', true);
                            } else {
                                $('#editar-atividade-nao').prop('checked', true);
                            }
                            if (response.vicio) {
                                $('#editar-vicio-sim').prop('checked', true);
                                $('#editar-vicios').val(response.vicio);
                                $('#info-editar-vicio').show();
                            } else {
                                $('#editar-vicio-nao').prop('checked', true);
                                $('#editar-vicios').val('');
                            }
                            if (response.anamnese) {
                                $('#anamneseEditarEditor .ql-editor').html(response.anamnese);
                            }
                            $('#editar-primeiro-cid').val(response.cid);
                            $('#editar-segundo-cid').val(response.cid_opc);
                            if (response.diagnostico) {
                                $('#diagnosticoEditarEditor .ql-editor').html(response
                                    .diagnostico);
                            }
                            if (response.prescricao) {
                                $('#prescricoesEditarEditor .ql-editor').html(response
                                    .prescricao);
                            }
                            if (response.exames) {
                                $('#examesEditarEditor .ql-editor').html(response.exames);
                            }
                            if (response.atestado) {
                                $('#atestadosEditarEditor .ql-editor').html(response.atestado);
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Erro na requisição:', status,
                                error);
                        }
                    });
                });

            });

            $('#btnSalvarIniciarConsulta').on('click', function() {
                var anamnese = $('#anamneseEditor .ql-editor').html();
                $('#anamnese').val(anamnese);

                var diagnostico = $('#diagnosticoEditor .ql-editor').html();
                $('#diagnostico').val(diagnostico);

                var prescricoes = $('#prescricoesEditor .ql-editor').html();
                $('#prescricoes').val(prescricoes);

                var exames = $('#examesEditor .ql-editor').html();
                $('#exames').val(exames);

                var atestados = $('#atestadosEditor .ql-editor').html();
                $('#atestados').val(atestados);
            });

            $('#btnSalvarEdicaoPaciente').on('click', function() {
                var anamnese = $('#anamneseEditarEditor .ql-editor').html();
                $('#anamnese_edit').val(anamnese);

                var diagnostico = $('#diagnosticoEditarEditor .ql-editor').html();
                $('#diagnostico_edit').val(diagnostico);

                var prescricoes = $('#prescricoesEditarEditor .ql-editor').html();
                $('#prescricoes_edit').val(prescricoes);

                var exames = $('#examesEditarEditor .ql-editor').html();
                $('#exames_edit').val(exames);

                var atestados = $('#atestadosEditarEditor .ql-editor').html();
                $('#atestados_edit').val(atestados);
            });
        </script>
    </div>
@endsection
