@extends('layouts.menu-medico')

@section('title', 'Painel Médico')

@section('content')
<div class="container mt-4">
    <div class="d-flex flex-column">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800 me-3">Meu Perfil</h1>
            </div>
            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class="card shadow-sm bg-light p-3 py-4">
                        <div class="container">
                            <div class="row gutters">
                                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                    <div class="card">
                                        <div class="card-body d-flex justify-content-center align-items-center">
                                            <div class="text-center">
                                                <div class="pb-2">
                                                    <img src="https://www.pngall.com/wp-content/uploads/5/User-Profile-PNG.png" alt="Foto Perfil" width="250rem">
                                                </div>
                                                <h5>Nome Sobrenome</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                    <div class="card h-100">
                                        <div class="card-body">
                                            <div class="row gutters p-2">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <h5 class="mb-3 text-primary">Informações Pessoais</h5>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group mb-3">
                                                        <label for="nome">Nome Completo</label>
                                                        <input type="text" class="form-control" id="nome" name="nome" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group mb-3">
                                                        <label for="email">E-mail</label>
                                                        <input type="email" class="form-control" id="email" name="email" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="tel">Telefone</label>
                                                        <input type="tel" class="form-control" id="tel" name="tel" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="cpf">CPF</label>
                                                        <input type="text" class="form-control" id="cpf" name="cpf" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="rg">RG</label>
                                                        <input type="text" class="form-control" id="rg" name="rg" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="data-nasc">Data de Nascimento</label>
                                                        <input type="date" class="form-control" id="data-nasc" name="data-nasc" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row gutters p-2">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <h5 class="mt-2 mb-3 text-primary">Endereço Residencial</h5>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="form-group mb-3">
                                                        <label for="rua">Rua</label>
                                                        <input type="text" class="form-control" id="rua" name="rua" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                                                    <div class="form-group mb-3">
                                                        <label for="num">Número</label>
                                                        <input type="number" class="form-control" id="num" name="num" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                                                    <div class="form-group mb-3">
                                                        <label for="complemento">Complemento</label>
                                                        <input type="text" class="form-control" id="complemento" name="complemento" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12">
                                                    <div class="form-group mb-3">
                                                        <label for="cidade">Cidade</label>
                                                        <input type="text" class="form-control" id="cidade" name="cidade" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                                    <div class="form-group mb-3">
                                                        <label for="estado">Estado</label>
                                                        <input type="text" class="form-control" id="estado" name="estado" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                                                    <div class="form-group mb-3">
                                                        <label for="cep">CEP</label>
                                                        <input type="text" class="form-control" id="cep" name="cep" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row gutters p-2">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <div class="text-end mt-4">
                                                        <button type="button" class="btn btn-primary shadow-sm ms-3">
                                                            <div class="d-flex align-items-center">
                                                                <ion-icon name="create-outline" class="fs-5"></ion-icon>
                                                                <span class="ms-2">Editar</span>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection