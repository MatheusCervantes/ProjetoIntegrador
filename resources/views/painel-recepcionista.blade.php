@extends('layouts.menu-recepcionista')

@section('title', 'Painel Recepcionista')

@section('content')
<div class="container mt-4">
    <div class="d-flex flex-column">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>
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