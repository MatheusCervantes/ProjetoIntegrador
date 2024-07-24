@extends('layouts.menu-adm')

@section('title', 'Painel Administrador')

@section('content')
    <div class="container mt-4">
        <div class="row mt-5 mb-3">
            <div class="card-body py-0 ps-3 dados border-bottom" id="content">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-2 text-primary fw-semibold">Data</div>
                        <div class="col-2 text-primary fw-semibold">Hora</div>
                        <div class="col-3 text-primary fw-semibold">Tipo</div>
                        <div class="col-3 text-primary fw-semibold">Movimentação</div>
                        <div class="col-2 text-primary fw-semibold">Valor</div>
                    </div>
                </div>
                <div class="">
                    @if ($relatorio_financeiro->count() > 0)
                        @foreach ($relatorio_financeiro as $item)
                            <div class="row pt-3 pb-3 border-bottom">
                                <div class="col-2">
                                    <div>{{ \Carbon\Carbon::parse($item->data_hora)->format('d/m/Y') }}</div>
                                </div>
                                <div class="col-2">
                                    <div>{{ \Carbon\Carbon::parse($item->data_hora)->format('H:i:s') }}</div>
                                </div>
                                <div class="col-3">
                                    <div>{{ $item->tipo }}</div>
                                </div>
                                <div class="col-3">
                                    <div>{{ $item->movimentacao }}</div>
                                </div>
                                <div class="col-2">
                                    <div>R$ {{ $item->valor }}</div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="text-center text-muted my-4">Nenhuma movimentação financeira encontrada.</p>
                    @endif
                </div>
            </div>
        </div>
        <button id="printButton" class="btn btn-primary">Imprimir</button>
        <button id="downloadButton" class="btn btn-secondary">Baixar como PDF</button>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#printButton').click(function() {
                var originalContents = document.body.innerHTML;
                var printContents = document.getElementById('content').innerHTML;

                document.body.innerHTML = printContents;
                window.print();
                document.body.innerHTML = originalContents;
            });

            $('#downloadButton').click(function() {
                var element = document.getElementById('content');
                var opt = {
                    margin: 1,
                    filename: 'pagina.pdf',
                    image: {
                        type: 'jpeg',
                        quality: 0.98
                    },
                    html2canvas: {
                        scale: 2
                    },
                    jsPDF: {
                        unit: 'in',
                        format: 'letter',
                        orientation: 'portrait'
                    }
                };
                html2pdf().from(element).set(opt).save().catch(function(error) {
                    console.error('Erro ao gerar PDF:', error);
                });
            });
        });
    </script>
    </div>
@endsection
