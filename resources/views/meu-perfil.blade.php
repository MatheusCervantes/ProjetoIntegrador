@php
    $layout = '';
    if (Request::is('painel-medico/meu-perfil')) {
        $layout = 'layouts.menu-medico';
    } elseif (Request::is('painel-recepcionista/meu-perfil')) {
        $layout = 'layouts.menu-recepcionista';
    }
@endphp

@extends($layout)

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
                                    <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-8 col-9 mx-auto">
                                        <div class="card mb-md-4 mb-sm-4 mb-4 justify-content-center">
                                            <div class="card-body d-flex justify-content-center align-items-center">
                                                <div class="text-center">
                                                    <div class="pb-2">
                                                        <img id="fotoPerfil"
                                                            src="https://www.pngall.com/wp-content/uploads/5/User-Profile-PNG.png"
                                                            alt="Foto Perfil" width="250rem" style="cursor: pointer;">
                                                    </div>
                                                    <form id="formUpload" action="/painel-medico/salvar-perfil"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="file" id="fileInput" name="foto" accept="image/*"
                                                            hidden>
                                                        <h5 id="nomesobrenome">Nome Sobrenome</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div class="row gutters p-2">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <h5 class="mb-3 text-primary">Informações Pessoais</h5>
                                                    </div>
                                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                                                        <div class="form-group mb-3">
                                                            <label for="nome" class="form-label">Nome
                                                                Completo</label>
                                                            <input type="text" class="form-control" id="nome"
                                                                name="nome">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                                        <div class="form-group mb-3">
                                                            <label for="sexo" class="form-label">Sexo</label>
                                                            <select id="sexo" name="sexo" class="form-select">
                                                                <option disabled selected>Selecione...</option>
                                                                <option value="Feminino">Feminino</option>
                                                                <option value="Masculino">Masculino</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                                        <div class="form-group mb-3">
                                                            <label for="cpf" class="form-label">CPF</label>
                                                            <input type="text" class="form-control cpf" id="cpf"
                                                                name="cpf">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                                        <div class="form-group mb-3">
                                                            <label for="rg" class="form-label">RG</label>
                                                            <input type="text" class="form-control rg" id="rg"
                                                                name="rg">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                                        <div class="form-group mb-3">
                                                            <label for="data-nasc" class="form-label">Data de
                                                                Nascimento</label>
                                                            <input type="date" class="form-control" id="data-nasc"
                                                                name="data_nasc">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-7 col-12">
                                                        <div class="form-group mb-3">
                                                            <label for="email" class="form-label">E-mail</label>
                                                            <input type="email" class="form-control" id="email"
                                                                name="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-12">
                                                        <div class="form-group mb-3">
                                                            <label for="tel" class="form-label">Telefone</label>
                                                            <input type="tel" class="form-control tel" id="tel"
                                                                name="tel">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row gutters p-2">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <h5 class="mt-2 mb-3 text-primary">Endereço Residencial</h5>
                                                    </div>
                                                    <div class="col-xl-7 col-lg-6 col-md-6 col-sm-8 col-12">
                                                        <div class="form-group mb-3">
                                                            <label for="rua" class="form-label">Rua</label>
                                                            <input type="text" class="form-control" id="rua"
                                                                name="rua">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-5">
                                                        <div class="form-group mb-3">
                                                            <label for="num" class="form-label">Número</label>
                                                            <input type="number" class="form-control" id="num"
                                                                name="num">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-7">
                                                        <div class="form-group mb-3">
                                                            <label for="complemento"
                                                                class="form-label">Complemento</label>
                                                            <input type="text" class="form-control" id="complemento"
                                                                name="complemento">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-8 col-12">
                                                        <div class="form-group mb-3">
                                                            <label for="cidade" class="form-label">Cidade</label>
                                                            <input type="text" class="form-control" id="cidade"
                                                                name="cidade">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-7 col-7">
                                                        <div class="form-group mb-3">
                                                            <label for="estado" class="form-label">Estado</label>
                                                            <select id="estado" name="estado" class="form-select">
                                                                <option disabled selected>Selecione...</option>
                                                                <option value="Acre">Acre</option>
                                                                <option value="Alagoas">Alagoas</option>
                                                                <option value="Amapá">Amapá</option>
                                                                <option value="Amazonas">Amazonas</option>
                                                                <option value="Bahia">Bahia</option>
                                                                <option value="Ceará">Ceará</option>
                                                                <option value="Distrito Federal">Distrito Federal
                                                                </option>
                                                                <option value="Espírito Santo">Espírito Santo</option>
                                                                <option value="Goiás">Goiás</option>
                                                                <option value="Maranhão">Maranhão</option>
                                                                <option value="Mato Grosso">Mato Grosso</option>
                                                                <option value="Mato Grosso do Su">Mato Grosso do Sul
                                                                </option>
                                                                <option value="Minas Gerais">Minas Gerais</option>
                                                                <option value="Pará">Pará</option>
                                                                <option value="Paraíba">Paraíba</option>
                                                                <option value="Paraná">Paraná</option>
                                                                <option value="Pernambuco">Pernambuco</option>
                                                                <option value="Piauí">Piauí</option>
                                                                <option value="Rio de Janeiro">Rio de Janeiro</option>
                                                                <option value="Rio Grande do Norte">Rio Grande do Norte
                                                                </option>
                                                                <option value="Rio Grande do Sul">Rio Grande do Sul
                                                                </option>
                                                                <option value="Rondônia">Rondônia</option>
                                                                <option value="Roraima">Roraima</option>
                                                                <option value="Santa Catarina">Santa Catarina</option>
                                                                <option value="São Paulo">São Paulo</option>
                                                                <option value="Sergipe">Sergipe</option>
                                                                <option value="Tocantins">Tocantins</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5 col-5">
                                                        <div class="form-group mb-3">
                                                            <label for="cep" class="form-label">CEP</label>
                                                            <input type="text" class="form-control cep" id="cep"
                                                                name="cep">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row gutters p-2">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="text-end mt-4">
                                                            <button type="button" class="btn btn-primary shadow-sm ms-3"
                                                                id="btnEditarMeuPerfil">
                                                                <div class="d-flex align-items-center">
                                                                    <ion-icon name="create-outline"
                                                                        class="fs-5"></ion-icon>
                                                                    <span class="ms-2">Editar</span>
                                                                </div>
                                                            </button>
                                                            <button type="submit" class="btn btn-primary shadow-sm ms-3"
                                                                id="btnSalvarMeuPerfil" style="display: none;">
                                                                <div class="d-flex align-items-center">
                                                                    <ion-icon name="create-outline"
                                                                        class="fs-5"></ion-icon>
                                                                    <span class="ms-2">Salvar</span>
                                                                </div>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
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
    @if (Request::is('painel-medico/meu-perfil'))
        <script src="/js/script_meu_perfil_medico.js"></script>
    @endif
    @if (Request::is('painel-recepcionista/meu-perfil'))
        <script src="/js/script_meu_perfil_recepcionista.js"></script>
    @endif
@endsection
