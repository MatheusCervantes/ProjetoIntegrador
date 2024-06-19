$(document).ready(function () {
    $('#cpf').mask('000.000.000-00', { reverse: true });
    $('#rg').mask('00.000.000-0');
    $('#tel').mask('(00) 00000-0000');
    $('#cep').mask('00000-000');
    $('#crm').mask('000000/AA');

    $('.btnList').click(function () {
        $('.dados').each(function () {
            if ($(this).css('display') === 'none') {
                $(this).css('display', 'block');
            } else {
                $(this).css('display', 'none');
            }
        });
    });

    $('.btnNovoPaciente').click(function () {
        $('#modalNovoPaciente').modal('show');
    });
    $('.btnDetalhesPaciente').click(function () {
        $('#modalDetalhesPaciente').modal('show');
    });
    $('.btnEditarPaciente').click(function () {
        $('#modalEditarPaciente').modal('show');
    });
    $('.btnExcluirPaciente').click(function () {
        $('#modalExcluirPaciente').modal('show');
    });

    $('.btnNovoMedico').click(function () {
        $('#modalNovoMedico').modal('show');
    });
    $('.btnDetalhesMedico').click(function () {
        $('#modalDetalhesMedico').modal('show');
    });
    $('.btnEditarMedico').click(function () {
        $('#modalEditarMedico').modal('show');
    });
    $('.btnExcluirMedico').click(function () {
        $('#modalExcluirMedico').modal('show');
    });

    $('.btnNovoRecepcionista').click(function () {
        $('#modalNovoRecepcionista').modal('show');
    });
    $('.btnDetalhesRecepcionista').click(function () {
        $('#modalDetalhesRecepcionista').modal('show');
    });
    $('.btnEditarRecepcionista').click(function () {
        $('#modalEditarRecepcionista').modal('show');
    });
    $('.btnExcluirRecepcionista').click(function () {
        $('#modalExcluirRecepcionista').modal('show');
    });

    $('.btnNovoFinanceiro').click(function () {
        $('#modalNovoFinanceiro').modal('show');
    });
    $('.btnDetalhesFinanceiro').click(function () {
        $('#modalDetalhesFinanceiro').modal('show');
    });
    $('.btnEditarFinanceiro').click(function () {
        $('#modalEditarFinanceiro').modal('show');
    });
    $('.btnExcluirFinanceiro').click(function () {
        $('#modalExcluirFinanceiro').modal('show');
    });

    $('.btnExcluirRelatorio').click(function () {
        $('#modalExcluirRelatorio').modal('show');
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

$(document).ready(function () {
    $('.btnList2').click(function () {
        $('.dados2').each(function () {
            if ($(this).css('display') === 'none') {
                $(this).css('display', 'block');
            } else {
                $(this).css('display', 'none');
            }
        });
    });

    $('.btnIniciarConsulta').click(function () {
        $('#modalIniciarConsulta').modal('show');
    });

    $('.btnProntuarioPaciente').click(function () {
        $('#modalProntuarioPaciente').modal('show');
    });
});

$(document).ready(function () {
    moment.locale('pt');

    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#filtroDataFinanceiro span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
        $('#periodoDataRelatorio span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
        $('#filtroDataRelatorio span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
    }

    $('#filtroDataFinanceiro, #periodoDataRelatorio, #filtroDataRelatorio').daterangepicker({
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
    var ctx = $("#grafico-medico-atendimentos");
    var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Amil", "Unimed", "Hapvida", "Outros"],
            datasets: [{
                data: [33, 35, 20, 12],
                backgroundColor: ['#f8ed7d', '#7df897', '#f8897d', '#7d9bf8'],
                hoverBackgroundColor: ['#dfd571', '#64c679', '#df7b71', '#647cc6'],
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
    var ctx = $("#grafico-financeiro-entradas");
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun", "Jul", "Ago", "Set", "Out", "Nov", "Dez"],
            datasets: [{
                label: "Entradas",
                lineTension: 0.3,
                backgroundColor: "#4e73df",
                hoverBackgroundColor: "#2e59d9",
                borderColor: "#4e73df",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: [7230, 9145, 10650, 8260, 1890],
            },
            {
                label: "Saídas",
                lineTension: 0.3,
                backgroundColor: "#e74a3b",
                hoverBackgroundColor: "#e74a3b",
                borderColor: "#e74a3b",
                pointRadius: 3,
                pointBackgroundColor: "rgba(255, 99, 132, 1)",
                pointBorderColor: "rgba(255, 99, 132, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(255, 99, 132, 1)",
                pointHoverBorderColor: "rgba(255, 99, 132, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: [6125, 7300, 7980, 6490, 430],
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
                        // Include a dollar sign in the ticks
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
});

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
})

document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("plano-sim-novo").addEventListener("click", function () {
        document.getElementById("info-plano-saude-novo").style.display = "block";
    });
    document.getElementById("plano-sim-editar").addEventListener("click", function () {
        document.getElementById("info-plano-saude-editar").style.display = "block";
    });
    document.getElementById("plano-nao-novo").addEventListener("click", function () {
        document.getElementById("info-plano-saude-novo").style.display = "none";
    });
    document.getElementById("plano-nao-editar").addEventListener("click", function () {
        document.getElementById("info-plano-saude-editar").style.display = "none";
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const senhaInput = document.getElementById('senha');
    const mostrarSenhaBtn = document.getElementById('mostrarSenha');

    mostrarSenhaBtn.addEventListener('click', function () {
        if (senhaInput.type === 'password') {
            senhaInput.type = 'text';
            mostrarSenhaBtn.innerHTML = '<ion-icon name="eye-off-outline" class="pt-1"></ion-icon>';
        } else {
            senhaInput.type = 'password';
            mostrarSenhaBtn.innerHTML = '<ion-icon name="eye-outline" class="pt-1"></ion-icon>';
        }
    });
});