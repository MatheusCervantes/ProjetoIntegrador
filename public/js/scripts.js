$(document).ready(function () {
    $('.cpf').mask('000.000.000-00', { reverse: true });
    $('.rg').mask('00.000.000-0');
    $('.tel').mask('(00) 00000-0000');
    $('.cep').mask('00000-000');

    $('.btnNovoPaciente').click(function () {
        $('#modalNovoPaciente').modal('show');
    });

    $('.btnNovoMedico').click(function () {
        $('#modalNovoMedico').modal('show');
    });

    $('.btnExcluirMedico').click(function () {
        $('#modalExcluirMedico').modal('show');
    });

    $('.btnNovoRecepcionista').click(function () {
        $('#modalNovoRecepcionista').modal('show');
    });

    $('.btnExcluirRecepcionista').click(function () {
        $('#modalExcluirRecepcionista').modal('show');
    });

    $('.btnExcluirPaciente').click(function () {
        $('#modalExcluirPaciente').modal('show');
    });

    $('.btnNovoFinanceiro').click(function () {
        $('#modalNovoFinanceiro').modal('show');
    });

    $('.btnExcluirFinanceiro').click(function () {
        $('#modalExcluirFinanceiro').modal('show');
    });

    $('.btnEditarSenha').click(function () {
        $('#modalEditarSenha').modal('show');
    });

    $('#btn_mudar_senha').click(function () {
        $('#firstpasswordModal').modal('hide');
        $('#modalEditarSenha').modal('show');
    });

    $('input[name="dias-semana"]').on('click', function () {
        let dia = $(this).attr('id');
        let divPeriodos = $('#' + dia + '-periodos');
        if ($(this).is(':checked')) {
            divPeriodos.show();
        } else {
            divPeriodos.hide();
        }
    });

    $('input[name="dias-semana-editar"]').on('click', function () {
        let dia = $(this).attr('id');
        let divPeriodos = $('#' + dia + '-periodos-editar');
        if ($(this).is(':checked')) {
            divPeriodos.show();
        } else {
            divPeriodos.hide();
        }
    });

    $('#despesa-fixa').change(function () {
        if ($(this).is(':checked')) {
            $('#recorrencia-despesa').removeClass('d-none');
        } else {
            $('#recorrencia-despesa').addClass('d-none');
        }
    });
    $('#despesa-fixa-editar').change(function () {
        if ($(this).is(':checked')) {
            $('#recorrencia-despesa-editar').removeClass('d-none');
        } else {
            $('#recorrencia-despesa-editar').addClass('d-none');
        }
    });
});

//JS painel-adm gestão paciente
$('.btnDetalhesPaciente').on('click', function () {
    var id = $(this).data('id');

    $.ajax({
        url: '/painel-adm/gestao-paciente/' + id,
        method: 'GET',
        success: function (data) {
            $('#nome_paciente').val(data.nome_completo);
            $('#sexo_paciente').val(data.sexo);
            $('#cpf_paciente').val(data.cpf);
            $('#rg_paciente').val(data.rg);
            $('#data-nasc_paciente').val(data.data_nascimento);
            $('#email_paciente').val(data.email);
            $('#tel_paciente').val(data.telefone);
            $('#rua_paciente').val(data.rua);
            $('#num_paciente').val(data.numero);
            $('#complemento_paciente').val(data.complemento);
            $('#cidade_paciente').val(data.cidade);
            $('#estado_paciente').val(data.estado).change();
            $('#cep_paciente').val(data.cep);
            if (data.plano_saude) {
                $('#plano-sim-detalhes_paciente').prop('checked', true);
                $('#detalhe-nome-plano_paciente').val(data.plano_saude.nome_plano);
                $('#detalhe-numero-cartao_paciente').val(data.plano_saude.nro_plano);

            } else {
                $('#plano-nao-detalhes_paciente').prop('checked', true);
                $('#detalhe-nome-plano_paciente').val('');
                $('#detalhe-numero-cartao_paciente').val('');
            }
            $('#modalDetalhesPaciente').modal('show');
        },
        error: function (xhr, status, error) {
            console.error('Erro ao carregar dados:', error);
            $('#modalDetalhesPaciente .modal-body').html('Erro ao carregar dados.');
            $('#modalDetalhesPaciente').modal('show');
        }
    });
});

$('.btnEditarPaciente').on('click', function () {
    var id_edição = $(this).data('id');

    $.ajax({
        url: '/painel-adm/gestao-paciente/' + id_edição,
        method: 'GET',
        success: function (data) {
            console.log(data);
            $('#formEditarPaciente').attr('action', '/painel-adm/gestao-paciente/edit/' + id_edição);
            $('#nome_paciente_edit').val(data.nome_completo);
            $('#sexo_paciente_edit').val(data.sexo).change();
            $('#cpf_paciente_edit').val(data.cpf);
            $('#rg_paciente_edit').val(data.rg);
            $('#data-nasc_paciente_edit').val(data.data_nascimento);
            $('#email_paciente_edit').val(data.email);
            $('#tel_paciente_edit').val(data.telefone);
            $('#rua_paciente_edit').val(data.rua);
            $('#num_paciente_edit').val(data.numero);
            $('#complemento_paciente_edit').val(data.complemento);
            $('#cidade_paciente_edit').val(data.cidade);
            $('#estado_paciente_edit').val(data.estado).change();
            $('#cep_paciente_edit').val(data.cep);
            if (data.plano_saude) {
                $('#plano-sim-editar_paciente_edit').prop('checked', true);
                $('#nome-plano_paciente_edit').val(data.plano_saude.nome_plano);
                $('#numero-cartao_paciente_edit').val(data.plano_saude.nro_plano);
            } else {
                $('#plano-nao-editar_paciente_edit').prop('checked', true);
                $('#detalhe-nome-plano_paciente').val('');
                $('#detalhe-numero-cartao_paciente').val('');
            }
            $('#modalEditarPaciente').modal('show');
        },
        error: function (xhr, status, error) {
            console.error('Erro ao carregar dados:', error);
            $('#modalEditarPaciente .modal-body').html('Erro ao carregar dados.');
            $('#modalEditarPaciente').modal('show');
        }
    });
});

$('.btnExcluirPaciente').on('click', function () {
    var pacienteId = $(this).data('id');
    var formAction = $('#formExcluirPaciente').data('action') + pacienteId;
    $('#formExcluirPaciente').attr('action', formAction);
});
// Fim gestão paciente

// JS painel gestão medico
$('.btnDetalhesMedico').on('click', function () {
    var id = $(this).data('id');

    $.ajax({
        url: '/painel-adm/gestao-medico/' + id,
        method: 'GET',
        success: function (data) {
            $('#nome_medico').val(data.nome_completo);
            $('#sexo_medico').val(data.sexo);
            $('#cpf_medico').val(data.cpf);
            $('#rg_medico').val(data.rg);
            $('#data-nasc_medico').val(data.data_nascimento);
            $('#email_medico').val(data.email);
            $('#tel_medico').val(data.telefone);
            $('#rua_medico').val(data.rua);
            $('#num_medico').val(data.numero);
            $('#complemento_medico').val(data.complemento);
            $('#cidade_medico').val(data.cidade);
            $('#estado_medico').val(data.estado).change();
            $('#cep_medico').val(data.cep);
            $('#modalDetalhesMedico').modal('show');
        },
        error: function (xhr, status, error) {
            console.error('Erro ao carregar dados:', error);
            $('#modalDetalhesMedico .modal-body').html('Erro ao carregar dados.');
            $('#modalDetalhesMedico').modal('show');
        }
    });
});

$('.btnEditarMedico').on('click', function () {
    var id_edição = $(this).data('id');

    $.ajax({
        url: '/painel-adm/gestao-medico/' + id_edição,
        method: 'GET',
        success: function (data) {
            $('#formEditarMedico').attr('action', '/painel-adm/gestao-medico/edit/' + id_edição);
            $('#nome_medico_edit').val(data.nome_completo);
            $('#sexo_medico_edit').val(data.sexo).change();
            $('#cpf_medico_edit').val(data.cpf);
            $('#rg_medico_edit').val(data.rg);
            $('#data-nasc_medico_edit').val(data.data_nascimento);
            $('#email_medico_edit').val(data.email);
            $('#tel_medico_edit').val(data.telefone);
            $('#rua_medico_edit').val(data.rua);
            $('#num_medico_edit').val(data.numero);
            $('#complemento_medico_edit').val(data.complemento);
            $('#cidade_medico_edit').val(data.cidade);
            $('#estado_medico_edit').val(data.estado).change();
            $('#cep_medico_edit').val(data.cep);
            $('#modalEditarMedico').modal('show');
        },
        error: function (xhr, status, error) {
            console.error('Erro ao carregar dados:', error);
            $('#modalEditarMedico .modal-body').html('Erro ao carregar dados.');
            $('#modalEditarMedico').modal('show');
        }
    });
});

$('.btnExcluirMedico').on('click', function () {
    var medicoId = $(this).data('id');
    var formAction = $('#formExcluirMedico').data('action') + medicoId;
    $('#formExcluirMedico').attr('action', formAction);
});

// Fim gestão medico

// JS painel gestão recepcionista
$('.btnDetalhesRecepcionista').on('click', function () {
    var id = $(this).data('id');

    $.ajax({
        url: '/painel-adm/gestao-recepcionista/' + id,
        method: 'GET',
        success: function (data) {
            $('#nome_recepcionista').val(data.nome_completo);
            $('#sexo_recepcionista').val(data.sexo);
            $('#cpf_recepcionista').val(data.cpf);
            $('#rg_recepcionista').val(data.rg);
            $('#data-nasc_recepcionista').val(data.data_nascimento);
            $('#email_recepcionista').val(data.email);
            $('#tel_recepcionista').val(data.telefone);
            $('#rua_recepcionista').val(data.rua);
            $('#num_recepcionista').val(data.numero);
            $('#complemento_recepcionista').val(data.complemento);
            $('#cidade_recepcionista').val(data.cidade);
            $('#estado_recepcionista').val(data.estado).change();
            $('#cep_recepcionista').val(data.cep);
            $('#modalDetalhesRecepcionista').modal('show');
        },
        error: function (xhr, status, error) {
            console.error('Erro ao carregar dados:', error);
            $('#modalDetalhesRecepcionista .modal-body').html('Erro ao carregar dados.');
            $('#modalDetalhesRecepcionista').modal('show');
        }
    });
});

$('.btnEditarRecepcionista').on('click', function () {
    var id_edição = $(this).data('id');

    $.ajax({
        url: '/painel-adm/gestao-recepcionista/' + id_edição,
        method: 'GET',
        success: function (data) {
            $('#formEditarRecepcionista').attr('action', '/painel-adm/gestao-recepcionista/edit/' + id_edição);
            $('#nome_recepcionista_edit').val(data.nome_completo);
            $('#sexo_recepcionista_edit').val(data.sexo).change();
            $('#cpf_recepcionista_edit').val(data.cpf);
            $('#rg_recepcionista_edit').val(data.rg);
            $('#data-nasc_recepcionista_edit').val(data.data_nascimento);
            $('#email_recepcionista_edit').val(data.email);
            $('#tel_recepcionista_edit').val(data.telefone);
            $('#rua_recepcionista_edit').val(data.rua);
            $('#num_recepcionista_edit').val(data.numero);
            $('#complemento_recepcionista_edit').val(data.complemento);
            $('#cidade_recepcionista_edit').val(data.cidade);
            $('#estado_recepcionista_edit').val(data.estado).change();
            $('#cep_recepcionista_edit').val(data.cep);
            $('#modalEditarRecepcionista').modal('show');
        },
        error: function (xhr, status, error) {
            console.error('Erro ao carregar dados:', error);
            $('#modalEditarRecepcionista .modal-body').html('Erro ao carregar dados.');
            $('#modalEditarRecepcionista').modal('show');
        }
    });
});

$('.btnExcluirRecepcionista').on('click', function () {
    var recepcionistaId = $(this).data('id');
    var formAction = $('#formExcluirRecepcionista').data('action') + recepcionistaId;
    $('#formExcluirRecepcionista').attr('action', formAction);
});

// Fim gestão recepcionista

// Js painel financeiro
$('.btnDetalhesFinanceiro').on('click', function () {
    var id = $(this).data('id');

    $.ajax({
        url: '/painel-adm/financeiro/' + id,
        method: 'GET',
        success: function (data) {
            $('#data-hora_financeiro').val(data.data_hora);
            $('#movimentacao_financeiro').val(data.movimentacao);
            $('#valor_financeiro').val(data.valor);
            $('#tipo_financeiro').val(data.tipo);
            $('#modalDetalhesFinanceiro').modal('show');
        },
        error: function (xhr, status, error) {
            console.error('Erro ao carregar dados:', error);
            $('#modalDetalhesFinanceiro .modal-body').html('Erro ao carregar dados.');
            $('#modalDetalhesFinanceiro').modal('show');
        }
    });
});

$('.btnEditarFinanceiro').on('click', function () {
    var id_edição = $(this).data('id');

    $.ajax({
        url: '/painel-adm/financeiro/' + id_edição,
        method: 'GET',
        success: function (data) {
            $('#formEditarFinanceiro').attr('action', '/painel-adm/financeiro/edit/' + id_edição);
            $('#data-hora_financeiro_edit').val(data.data_hora);
            $('#movimentacao_financeiro_edit').val(data.movimentacao);
            $('#valor_financeiro_edit').val(data.valor);
            $('#tipo_financeiro_edit').val(data.tipo);
            $('#modalEditarFinanceiro').modal('show');
        },
        error: function (xhr, status, error) {
            console.error('Erro ao carregar dados:', error);
            $('#modalEditarFinanceiro .modal-body').html('Erro ao carregar dados.');
            $('#modalEditarFinanceiro').modal('show');
        }
    });
});

$('.btnExcluirFinanceiro').on('click', function () {
    var financeiroId = $(this).data('id');
    var formAction = '/painel-adm/financeiro/delete/' + financeiroId;
    $('#formExcluirFinanceiro').attr('action', formAction);
});
//Fim painel financeiro

$(document).ready(function () {
    $('.crm').mask('0000000/AA');

    $('.btnIniciarConsulta').click(function () {
        $('#modalIniciarConsulta').modal('show');
    });

    $('.btnDetalhesConsulta').click(function () {
        $('#modalDetalhesConsulta').modal('show');
    });

    $('.btnEditarConsulta').click(function () {
        $('#modalEditarConsulta').modal('show');
    });

    $('.btnProntuarioPaciente').click(function () {
        $('#modalProntuarioPaciente').modal('show');
    });

    $('.btnEditarAcesso').click(function () {
        $('#modalEditarAcesso').modal('show');
    });

    $('.btnInfos').click(function () {
        $('#modalInfos').modal('show');
    });
});

document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll('.form-check-input').forEach(checkbox => {
        checkbox.addEventListener('change', function () {
            const inputs = this.closest('.day-row').querySelectorAll('input[type="time"]');
            inputs.forEach(input => {
                input.disabled = !this.checked;
            });
        });
    });
});

$(document).ready(function () {
    $('.btnCancelarConsulta').click(function () {
        $('#modalCancelarConsulta').modal('show');
    });

    $('.btnAgendarConsulta').click(function () {
        $('#modalAgendarConsulta').modal('show');
    });
});

document.addEventListener("DOMContentLoaded", function () {
    document.getElementById('flexSwitchCheckDefault').addEventListener('change', function () {
        var isChecked = this.checked;
        document.getElementById('nome').disabled = !isChecked;
        document.getElementById('telefone').disabled = !isChecked;
    });
});

$(document).ready(function () {
    moment.locale('pt');

    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#filtroDataFinanceiro span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
        $('#periodoDataRelatorioDados span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
        $('#periodoDataRelatorioConsultas span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
        $('#filtroDataRelatorio span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));

        $('#startDate').val(start.format('YYYY-MM-DD'));
        $('#endDate').val(end.format('YYYY-MM-DD'));
    }

    $('#filtroDataFinanceiro, #periodoDataRelatorioDados, #periodoDataRelatorioConsultas, #filtroDataRelatorio').daterangepicker({
        startDate: start,
        endDate: end,
        locale: {
            format: 'DD/MM/YYYY',
            separator: ' - ',
            applyLabel: 'Aplicar',
            cancelLabel: 'Cancelar',
            fromLabel: 'De',
            toLabel: 'Para',
            customRangeLabel: 'Data Personalizada',
            weekLabel: 'W',
            daysOfWeek: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'],
            monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
            firstDay: 1
        },
        ranges: {
            'Hoje': [moment(), moment()],
            'Ontem': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Últimos 7 Dias': [moment().subtract(6, 'days'), moment()],
            'Últimos 30 Dias': [moment().subtract(29, 'days'), moment()],
            'Este Mês': [moment().startOf('month'), moment().endOf('month')],
            'Mês Passado': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);

    // Inicializa o daterangepicker e atualiza os campos ocultos
    cb(start, end);
});



$(document).ready(function () {
    var ctx = $("#grafico-consultas");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
            datasets: [{
                label: "Consultas",
                backgroundColor: "#4e73df",
                hoverBackgroundColor: "#2e59d9",
                borderColor: "#4e73df",
                data: [560, 475, 649, 591, 33],
            }],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 22,
                    top: 2,
                    bottom: 8
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 6
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 15000,
                        maxTicksLimit: 5,
                        padding: 10
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10
            },
        }
    });
});

$(document).ready(function () {
    var ctx = $("#grafico-medico-consultas");
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
            datasets: [{
                label: "Consultas",
                backgroundColor: "#4e73df",
                hoverBackgroundColor: "#2e59d9",
                borderColor: "#4e73df",
                data: [114, 121, 167, 192, 79],
            }],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 22,
                    top: 2,
                    bottom: 8
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'month'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 6
                    },
                    maxBarThickness: 25,
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 15000,
                        maxTicksLimit: 5,
                        padding: 10
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10
            },
        }
    });
});

$(document).ready(function () {
    var ctx = $("#grafico-financeiro-despesas");
    var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Despesa Fixa", "Despesa Variável"],
            datasets: [{
                data: [60, 40],
                backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
                hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });
});

$(document).ready(function () {
    var ctx = $("#grafico-medico-pacientes");
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Homem", "Mulher"],
            datasets: [{
                data: [46, 54],
                backgroundColor: ['#abdbe3', '#e3abdb'],
                hoverBackgroundColor: ['#9ac5cc', '#cc9ac5'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });
});

$(document).ready(function () {
    $.ajax({
        url: '/api/financeiro-dados',
        method: 'GET',
        success: function (data) {
            var ctx = document.getElementById('grafico-financeiro-entradas').getContext('2d');

            var myLineChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
                    datasets: [{
                        label: "Entradas",
                        lineTension: 0.3,
                        backgroundColor: "#4e73df",
                        borderColor: "#4e73df",
                        pointRadius: 3,
                        pointBackgroundColor: "rgba(78, 115, 223, 1)",
                        pointBorderColor: "rgba(78, 115, 223, 1)",
                        data: data.entradas,
                    },
                    {
                        label: "Saídas",
                        lineTension: 0.3,
                        backgroundColor: "#e74a3b",
                        borderColor: "#e74a3b",
                        pointRadius: 3,
                        pointBackgroundColor: "rgba(255, 99, 132, 1)",
                        pointBorderColor: "rgba(255, 99, 132, 1)",
                        data: data.saidas,
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    layout: {
                        padding: {
                            left: 10,
                            right: 25,
                            top: 6,
                            bottom: 2
                        }
                    },
                    scales: {
                        xAxes: [{
                            time: {
                                unit: 'date'
                            },
                            gridLines: {
                                display: false,
                                drawBorder: false
                            },
                            ticks: {
                                maxTicksLimit: 7
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                maxTicksLimit: 5,
                                padding: 10,
                                callback: function (value, index, values) {
                                    return '$' + number_format(value);
                                }
                            },
                            gridLines: {
                                color: "rgb(234, 236, 244)",
                                zeroLineColor: "rgb(234, 236, 244)",
                                drawBorder: false,
                                borderDash: [2],
                                zeroLineBorderDash: [2]
                            }
                        }]
                    },
                    legend: {
                        display: false
                    },
                    tooltips: {
                        backgroundColor: "rgb(255,255,255)",
                        bodyFontColor: "#858796",
                        titleMarginBottom: 10,
                        titleFontColor: '#6e707e',
                        titleFontSize: 14,
                        borderColor: '#dddfeb',
                        borderWidth: 1,
                        xPadding: 15,
                        yPadding: 15,
                        displayColors: false,
                        intersect: false,
                        mode: 'index',
                        caretPadding: 10,
                        callbacks: {
                            label: function (tooltipItem, chart) {
                                var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                                return datasetLabel + ': $' + number_format(tooltipItem.yLabel);
                            }
                        }
                    }
                }
            });
        },
        error: function (xhr, status, error) {
            console.error("Erro na requisição:", error);
        }
    });
});

function number_format(number) {
    return new Intl.NumberFormat().format(number);
}

$(document).ready(function () {
    moment.updateLocale('pt-br', {
        weekdaysMin: ["D", "Seg", "Ter", "Qua", "Qui", "Sex", "S"]
    });

    var currentDate = moment();

    $('#calendario-agenda').datetimepicker({
        inline: true,
        sideBySide: true,
        locale: 'pt-br',
        format: 'DD/MM/YYYY',
        icons: {
            next: 'fa fa-angle-right',
            previous: 'fa fa-angle-left'
        },
        defaultDate: currentDate
    });

    var currentDateElement = document.getElementById("data-atual");
    var currentDayOfWeekElement = document.getElementById("dia-semana-atual");
    var formattedDate = currentDate.format('DD [de] MMMM [de] YYYY');
    var dayOfWeek = currentDate.format('dddd');

    $('#data-atual').text(formattedDate);
    $('#dia-semana-atual').text(dayOfWeek);

    $('#calendario-agenda').on('dp.change', function (e) {
        var selectedDate = e.date.format('DD [de] MMMM [de] YYYY');
        var selectedDayOfWeek = e.date.format('dddd');

        currentDateElement.textContent = selectedDate;
        currentDayOfWeekElement.textContent = selectedDayOfWeek;
    });
});

document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendario-dashboard');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        schedulerLicenseKey: 'GPL-My-Project-Is-Open-Source',
        initialView: 'dayGridWeek',
        height: 180,
        locale: 'pt-br',
        headerToolbar: {
            left: 'prev,next',
            center: 'title',
            right: 'dayGridWeek,dayGridDay'
        },
        buttonText: {
            day: 'Dia',
            week: 'Semana'
        },
        viewDidMount: function () {
            var todayHeaderCell = document.querySelector('.fc-col-header-cell.fc-day-today');
            if (todayHeaderCell) {
                todayHeaderCell.classList.add('today-header');
            }
        },
        allDayDefault: true,
        events: [
            {
                title: '10 AGENDAMENTOS  ',
                start: '2024-05-10',
                allDay: true
            },
            {
                title: '8 AGENDAMENTOS  ',
                start: '2024-05-13',
                allDay: true
            },
            {
                title: '11 AGENDAMENTOS  ',
                start: '2024-05-14',
                allDay: true
            }
        ]
    });

    $('#calendario-dashboard').css('font-size', '0.92rem');

    calendar.render();
});

document.addEventListener('DOMContentLoaded', function () {
    var dataInput = document.getElementById('data-consulta');
    var dataAtual = new Date().toISOString().split('T')[0];
    dataInput.value = dataAtual;
});

document.addEventListener('DOMContentLoaded', function () {
    var dataInput = document.getElementById('data-consulta2');
    var dataAtual = new Date().toISOString().split('T')[0];
    dataInput.value = dataAtual;
});

document.addEventListener('DOMContentLoaded', function () {
    function formatarData(data) {
        const dia = String(data.getUTCDate()).padStart(2, '0');
        const mes = String(data.getUTCMonth() + 1).padStart(2, '0');
        const ano = data.getUTCFullYear();
        return `${dia}/${mes}/${ano}`;
    }

    function dataPorExtenso(data) {
        const meses = ['janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'];
        const dia = data.getUTCDate();
        const mes = meses[data.getUTCMonth()];
        const ano = data.getUTCFullYear();
        return `${dia} de ${mes} de ${ano}`;
    }

    function atualizarData() {
        const dataInput = document.getElementById('data-consulta');
        const dataSelecionada = new Date(dataInput.value);
        const textoDataFormatada = formatarData(dataSelecionada);
        const textoDataPorExtenso = dataPorExtenso(dataSelecionada);

        const h6Data = document.getElementById('data-calendario-consulta');
        h6Data.textContent = textoDataPorExtenso;

        const dataColunas = document.getElementsByClassName('data-coluna-consulta');
        for (let i = 0; i < dataColunas.length; i++) {
            dataColunas[i].innerHTML = `${textoDataFormatada}`;
        }
    }

    document.getElementById('data-consulta').addEventListener('change', atualizarData);

    atualizarData();
});

document.addEventListener('DOMContentLoaded', function () {
    function formatarData2(data) {
        const dia = String(data.getUTCDate()).padStart(2, '0');
        const mes = String(data.getUTCMonth() + 1).padStart(2, '0');
        const ano = data.getUTCFullYear();
        return `${dia}/${mes}/${ano}`;
    }

    function dataPorExtenso2(data) {
        const meses = ['janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'];
        const dia = data.getUTCDate();
        const mes = meses[data.getUTCMonth()];
        const ano = data.getUTCFullYear();
        return `${dia} de ${mes} de ${ano}`;
    }

    function atualizarData2() {
        const dataInput = document.getElementById('data-consulta2');
        if (dataInput.value) {
            const dataSelecionada = new Date(dataInput.value);
            const textoDataFormatada = formatarData2(dataSelecionada);
            const textoDataPorExtenso = dataPorExtenso2(dataSelecionada);

            const h6Data = document.getElementById('data-calendario-consulta2');
            h6Data.textContent = textoDataPorExtenso;

            const dataColunas = document.getElementsByClassName('data-coluna-consulta2');
            for (let i = 0; i < dataColunas.length; i++) {
                dataColunas[i].innerHTML = `${textoDataFormatada}`;
            }
        }
    }

    document.getElementById('data-consulta2').addEventListener('change', atualizarData2);

    atualizarData2();
});

$(document).ready(function () {
    // Função para verificar e exibir/ocultar o elemento
    function verificarExibirInfoPlano() {
        if ($('#plano-sim-detalhes_paciente').prop('checked')) {
            $('#info-plano-saude-detalhes').css('display', 'block');
        } else {
            $('#info-plano-saude-detalhes').css('display', 'none');
        }
    }

    $('#modalDetalhesPaciente').on('shown.bs.modal', function () {
        verificarExibirInfoPlano();
    });

    $('#btnDetalhesPaciente').on('click', function () {
        verificarExibirInfoPlano();
    });

    verificarExibirInfoPlano();
});

$(document).ready(function () {
    // Função para verificar e exibir/ocultar o elemento
    function verificarExibir() {
        if ($('#plano-sim-editar_paciente_edit').prop('checked')) {
            $('#info-plano-saude-editar').css('display', 'block');
        } else {
            $('#info-plano-saude-editar').css('display', 'none');
        }
    }

    $('#modalEditarPaciente').on('shown.bs.modal', function () {
        verificarExibir();
    });

    $('#btnEditarPaciente').on('click', function () {
        verificarExibir();
    });

    verificarExibir();
});

$(document).ready(function () {
    $('#plano-sim-novo').change(function () {
        if (this.checked) {
            $('#info-plano-saude-novo').css('display', 'block');
        }
    });
});

$(document).ready(function () {
    $('#plano-nao-novo').change(function () {
        if (this.checked) {
            $('#info-plano-saude-novo').css('display', 'none');
        }
    });
});

$(document).ready(function () {
    $('#plano-sim-editar_paciente_edit').change(function () {
        if (this.checked) {
            $('#info-plano-saude-editar').css('display', 'block');
        }
    });
});

$(document).ready(function () {
    $('#plano-nao-editar_paciente_edit').change(function () {
        if (this.checked) {
            $('#info-plano-saude-editar').css('display', 'none');
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("alergia-sim").addEventListener("click", function () {
        document.getElementById("info-alergia-medicamentos").style.display = "block";
    });
    document.getElementById("alergia-nao").addEventListener("click", function () {
        document.getElementById("info-alergia-medicamentos").style.display = "none";
    });

    document.getElementById("cirurgia-sim").addEventListener("click", function () {
        document.getElementById("info-cirurgia").style.display = "block";
    });
    document.getElementById("cirurgia-nao").addEventListener("click", function () {
        document.getElementById("info-cirurgia").style.display = "none";
    });

    document.getElementById("medicamento-sim").addEventListener("click", function () {
        document.getElementById("info-medicamento-regular").style.display = "block";
    });
    document.getElementById("medicamento-nao").addEventListener("click", function () {
        document.getElementById("info-medicamento-regular").style.display = "none";
    });

    document.getElementById("condicao-sim").addEventListener("click", function () {
        document.getElementById("info-condicao-preexistente").style.display = "block";
    });
    document.getElementById("condicao-nao").addEventListener("click", function () {
        document.getElementById("info-condicao-preexistente").style.display = "none";
    });

    document.getElementById("vicio-sim").addEventListener("click", function () {
        document.getElementById("info-vicio").style.display = "block";
    });
    document.getElementById("vicio-nao").addEventListener("click", function () {
        document.getElementById("info-vicio").style.display = "none";
    });

});

document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("editar-alergia-sim").addEventListener("click", function () {
        document.getElementById("info-editar-alergia-medicamentos").style.display = "block";
    });
    document.getElementById("editar-alergia-nao").addEventListener("click", function () {
        document.getElementById("info-editar-alergia-medicamentos").style.display = "none";
    });

    document.getElementById("editar-cirurgia-sim").addEventListener("click", function () {
        document.getElementById("info-editar-cirurgia").style.display = "block";
    });
    document.getElementById("editar-cirurgia-nao").addEventListener("click", function () {
        document.getElementById("info-editar-cirurgia").style.display = "none";
    });

    document.getElementById("editar-medicamento-sim").addEventListener("click", function () {
        document.getElementById("info-editar-medicamento-regular").style.display = "block";
    });
    document.getElementById("editar-medicamento-nao").addEventListener("click", function () {
        document.getElementById("info-editar-medicamento-regular").style.display = "none";
    });

    document.getElementById("editar-condicao-sim").addEventListener("click", function () {
        document.getElementById("info-editar-condicao-preexistente").style.display = "block";
    });
    document.getElementById("editar-condicao-nao").addEventListener("click", function () {
        document.getElementById("info-editar-condicao-preexistente").style.display = "none";
    });

    document.getElementById("editar-vicio-sim").addEventListener("click", function () {
        document.getElementById("info-editar-vicio").style.display = "block";
    });
    document.getElementById("editar-vicio-nao").addEventListener("click", function () {
        document.getElementById("info-editar-vicio").style.display = "none";
    });

});

$(document).ready(function () {
    $('#nav-anamnese-tab').on('click', function () {
        setTimeout(function () {
            if (!$('#anamneseEditor').data('quill')) {
                var quill = new Quill('#anamneseEditor', {
                    theme: 'snow'
                });
                $('#anamneseEditor').data('quill', quill);
            }
        }, 200);
    });
    $('#nav-diagnostico-tab').on('click', function () {
        setTimeout(function () {
            if (!$('#diagnosticoEditor').data('quill')) {
                var quill = new Quill('#diagnosticoEditor', {
                    theme: 'snow'
                });
                $('#diagnosticoEditor').data('quill', quill);
            }
        }, 200);
    });
    $('#nav-prescricoes-tab').on('click', function () {
        setTimeout(function () {
            if (!$('#prescricoesEditor').data('quill')) {
                var quill = new Quill('#prescricoesEditor', {
                    theme: 'snow'
                });
                $('#prescricoesEditor').data('quill', quill);
            }
        }, 200);
    });
    $('#nav-exames-tab').on('click', function () {
        setTimeout(function () {
            if (!$('#examesEditor').data('quill')) {
                var quill = new Quill('#examesEditor', {
                    theme: 'snow'
                });
                $('#examesEditor').data('quill', quill);
            }
        }, 200);
    });
    $('#nav-atestados-tab').on('click', function () {
        setTimeout(function () {
            if (!$('#atestadosEditor').data('quill')) {
                var quill = new Quill('#atestadosEditor', {
                    theme: 'snow'
                });
                $('#atestadosEditor').data('quill', quill);
            }
        }, 200);
    });
});

$(document).ready(function () {
    $('#nav-detalhes-anamnese-tab').on('click', function () {
        setTimeout(function () {
            if (!$('#anamneseDetalhesEditor').data('quill')) {
                var quill = new Quill('#anamneseDetalhesEditor', {
                    theme: 'snow',
                    readOnly: true
                });
                $('#anamneseDetalhesEditor').data('quill', quill);
            }
        }, 200);
    });

    $('#nav-detalhes-diagnostico-tab').on('click', function () {
        setTimeout(function () {
            if (!$('#diagnosticoDetalhesEditor').data('quill')) {
                var quill = new Quill('#diagnosticoDetalhesEditor', {
                    theme: 'snow',
                    readOnly: true
                });
                $('#diagnosticoDetalhesEditor').data('quill', quill);
            }
        }, 200);
    });

    $('#nav-detalhes-prescricoes-tab').on('click', function () {
        setTimeout(function () {
            if (!$('#prescricoesDetalhesEditor').data('quill')) {
                var quill = new Quill('#prescricoesDetalhesEditor', {
                    theme: 'snow',
                    readOnly: true
                });
                $('#prescricoesDetalhesEditor').data('quill', quill);
            }
        }, 200);
    });

    $('#nav-detalhes-exames-tab').on('click', function () {
        setTimeout(function () {
            if (!$('#examesDetalhesEditor').data('quill')) {
                var quill = new Quill('#examesDetalhesEditor', {
                    theme: 'snow',
                    readOnly: true
                });
                $('#examesDetalhesEditor').data('quill', quill);
            }
        }, 200);
    });

    $('#nav-detalhes-atestados-tab').on('click', function () {
        setTimeout(function () {
            if (!$('#atestadosDetalhesEditor').data('quill')) {
                var quill = new Quill('#atestadosDetalhesEditor', {
                    theme: 'snow',
                    readOnly: true
                });
                $('#atestadosDetalhesEditor').data('quill', quill);
            }
        }, 200);
    });
});

$(document).ready(function () {
    $('#nav-editar-anamnese-tab').on('click', function () {
        setTimeout(function () {
            if (!$('#anamneseEditarEditor').data('quill')) {
                var quill = new Quill('#anamneseEditarEditor', {
                    theme: 'snow'
                });
                $('#anamneseEditarEditor').data('quill', quill);
            }
        }, 200);
    });

    $('#nav-editar-diagnostico-tab').on('click', function () {
        setTimeout(function () {
            if (!$('#diagnosticoEditarEditor').data('quill')) {
                var quill = new Quill('#diagnosticoEditarEditor', {
                    theme: 'snow'
                });
                $('#diagnosticoEditarEditor').data('quill', quill);
            }
        }, 200);
    });

    $('#nav-editar-prescricoes-tab').on('click', function () {
        setTimeout(function () {
            if (!$('#prescricoesEditarEditor').data('quill')) {
                var quill = new Quill('#prescricoesEditarEditor', {
                    theme: 'snow'
                });
                $('#prescricoesEditarEditor').data('quill', quill);
            }
        }, 200);
    });

    $('#nav-editar-exames-tab').on('click', function () {
        setTimeout(function () {
            if (!$('#examesEditarEditor').data('quill')) {
                var quill = new Quill('#examesEditarEditor', {
                    theme: 'snow'
                });
                $('#examesEditarEditor').data('quill', quill);
            }
        }, 200);
    });

    $('#nav-editar-atestados-tab').on('click', function () {
        setTimeout(function () {
            if (!$('#atestadosEditarEditor').data('quill')) {
                var quill = new Quill('#atestadosEditarEditor', {
                    theme: 'snow'
                });
                $('#atestadosEditarEditor').data('quill', quill);
            }
        }, 200);
    });
});

$(document).ready(function () {
    $('#especialidades').tagsinput({
        tagClass: 'badge'
    });

    $('#atuacao').tagsinput({
        tagClass: 'badge'
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const senhaAtualInput = document.getElementById('senha-atual');
    const novaSenhaInput = document.getElementById('nova-senha');
    const confirmNovaSenhaInput = document.getElementById('confirm-nova-senha');

    const mostrarSenhaAtualBtn = document.getElementById('mostrarSenhaAtual');
    const mostrarNovaSenhaBtn = document.getElementById('mostrarNovaSenha');
    const mostrarConfirmNovaSenhaBtn = document.getElementById('mostrarConfirmNovaSenha');

    function togglePasswordVisibility(inputField, toggleButton) {
        if (inputField.type === 'password') {
            inputField.type = 'text';
            toggleButton.innerHTML = '<ion-icon name="eye-off-outline" class="pt-2 px-1 font-nome-agenda"></ion-icon>';
        } else {
            inputField.type = 'password';
            toggleButton.innerHTML = '<ion-icon name="eye-outline" class="pt-2 px-1 font-nome-agenda"></ion-icon>';
        }
    }

    mostrarSenhaAtualBtn.addEventListener('click', function () {
        togglePasswordVisibility(senhaAtualInput, mostrarSenhaAtualBtn);
    });

    mostrarNovaSenhaBtn.addEventListener('click', function () {
        togglePasswordVisibility(novaSenhaInput, mostrarNovaSenhaBtn);
    });

    mostrarConfirmNovaSenhaBtn.addEventListener('click', function () {
        togglePasswordVisibility(confirmNovaSenhaInput, mostrarConfirmNovaSenhaBtn);
    });
});

$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

document.addEventListener('DOMContentLoaded', function () {
    hjsCalendar(function (confirmTime) {
        alert(confirmTime);
    });
});

document.addEventListener('DOMContentLoaded', function () {
    DevExpress.localization.locale('pt-br');

    var resourcesData = [
        { text: "Luzia Campos", id: 1, color: "#cb6bb2" },
        { text: "Marcelo Alves", id: 2, color: "#56ca85" },
        { text: "Guilherme Araújo", id: 3, color: "#1e90ff" }
    ];

    var data = [
        { text: "João da Silva", ownerId: [2], startDate: new Date(2024, 6, 24, 7, 30), endDate: new Date(2024, 6, 24, 8, 0) },
        { text: "Maria Oliveira", ownerId: [1], startDate: new Date(2024, 6, 24, 9, 15), endDate: new Date(2024, 6, 24, 9, 30) },
        { text: "Thiago Bastos", ownerId: [3], startDate: new Date(2024, 6, 24, 9, 30), endDate: new Date(2024, 6, 24, 10, 0) }
    ];

    $("#scheduler").dxScheduler({
        dataSource: data,
        views: ["timelineDay"],
        currentView: "timelineDay",
        currentDate: new Date(),
        firstDayOfWeek: 0,
        startDayHour: 7,
        endDayHour: 20,
        cellDuration: 30,
        groups: ["ownerId"],
        resources: [{
            fieldExpr: "ownerId",
            allowMultiple: true,
            dataSource: resourcesData,
            label: "Owner",
            useColorAsDefault: true
        }],
        editing: {
            allowAdding: false,   
            allowDeleting: false, 
            allowDragging: false, 
            allowResizing: false, 
            allowUpdating: false  
        },
        height: 470,
        resourceCellTemplate: function(cellData, cellIndex, cellElement) {
            var color = cellData.color;
            var text = cellData.text;

            cellElement.append(
                `<div class="dx-scheduler-group-header-content">
                    <span class="owner-icon" style="background-color: ${color};"></span>
                    ${text}
                </div>`
            );
        },
        onAppointmentDblClick: function(e) {
            e.cancel = true; 
        },
        onAppointmentFormOpening: function(e) {
            e.cancel = true;
        }
    });
});