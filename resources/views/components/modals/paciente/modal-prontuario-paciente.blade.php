<div class="modal fade modal-lg" data-bs-backdrop="static" data-bs-keyboard="false" id="modalProntuarioPaciente"
    tabindex="-1" aria-labelledby="modalProntuarioPacienteLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-body-tertiary d-flex flex-column align-items-center pb-0">
                <div class="d-flex justify-content-between w-100 mt-2">
                    <div class="d-flex align-items-center ms-3">
                        <div class="d-flex justify-content-center align-items-center rounded-circle bg-dark-subtle text-white"
                            style="width: 5.5vw; height: 5.5vw;">
                            <div class="fs-3" id="iniciais"></div>
                        </div>
                        <div class="ms-3">
                            <h4 class="mb-0 fw-semibold" id="nome_completo"></h4>
                            <h5 class="mb-0 text-dark-emphasis" id="idade"></h5>
                        </div>
                    </div>
                    <div class="text-end text-dark-emphasis mt-4 me-4">
                        <div id="primeira_consulta">Primeira consulta: 09/08/2023</div>
                        <div id="atendimentos"></div>
                        <div id="plano"></div>
                    </div>
                </div>
                <nav class="nav nav-tabs w-100 justify-content-center mt-4 border-bottom-0" id="nav-tab"
                    role="tablist">
                    <button class="nav-link active py-2" id="nav-identificacao-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-identificacao" type="button" role="tab"
                        aria-controls="nav-identificacao" aria-selected="true">Identificação</button>
                    <button class="nav-link py-2" id="nav-consultas-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-consultas" type="button" role="tab" aria-controls="nav-consultas"
                        aria-selected="false">Consultas</button>
                </nav>
            </div>
            <div class="modal-body m-auto pt-4 mt-2 pb-3">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-identificacao" role="tabpanel"
                        aria-labelledby="nav-identificacao-tab">
                        <form>
                            <div>
                                <h5 class="mb-4 fw-semibold">Informações Pessoais</h5>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div class="mb-3">
                                        <label for="nome" class="form-label">Nome Completo</label>
                                        <input type="text" class="form-control" id="nome" name="nome"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="sexo" class="form-label">Sexo</label>
                                        <input type="text" class="form-control" id="sexo" name="sexo"
                                            readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="cpf" class="form-label">CPF</label>
                                        <input type="text" class="form-control" id="cpf" name="cpf"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="rg" class="form-label">RG</label>
                                        <input type="text" class="form-control" id="rg" name="rg"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="data-nasc" class="form-label">Data de Nascimento</label>
                                    <input type="text" class="form-control" id="data-nasc" name="data-nasc" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="tel" class="form-label">Telefone</label>
                                        <input type="tel" class="form-control" id="tel" name="tel"
                                            readonly>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div>
                                <h5 class="mb-4 fw-semibold">Endereço Residencial</h5>
                            </div>
                            <div class="row">
                                <div class="col-7">
                                    <div class="mb-3">
                                        <label for="rua" class="form-label">Rua</label>
                                        <input type="text" class="form-control" id="rua" name="rua"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="num" class="form-label">Número</label>
                                        <input type="number" class="form-control" id="num" name="num"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="complemento" class="form-label">Complemento</label>
                                        <input type="text" class="form-control" id="complemento"
                                            name="complemento" placeholder="Opcional" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="cidade" class="form-label">Cidade</label>
                                        <input type="text" class="form-control" id="cidade" name="cidade"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="estado" class="form-label">Estado</label>
                                        <input type="text" class="form-control" id="estado" name="estado"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="cep" class="form-label">CEP</label>
                                        <input type="text" class="form-control" id="cep" name="cep"
                                            readonly>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div>
                                <h5 class="mb-4 fw-semibold">Plano de Saúde</h5>
                            </div>
                            <div class="mb-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="plano-saude"
                                        id="plano-sim-detalhes" value="sim" disabled>
                                    <label class="form-check-label" for="plano-sim-detalhes">Sim</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="plano-saude"
                                        id="plano-nao-detalhes" value="nao" disabled>
                                    <label class="form-check-label" for="plano-nao-detalhes">Não</label>
                                </div>
                            </div>
                            <div id="info-plano-saude-detalhes" style="display: none;">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="nome-plano" class="form-label">Nome do Plano de Saúde</label>
                                            <input type="text" class="form-control" id="detalhe-nome-plano"
                                                name="nome-plano" readonly>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="numero-cartao" class="form-label">Número do Cartão do
                                                Plano</label>
                                            <input type="text" class="form-control" id="detalhe-numero-cartao"
                                                name="numero-cartao" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade consultas-anteriores" id="nav-consultas" role="tabpanel"
                        aria-labelledby="nav-consultas-tab">
                        <div class="row" id="accordion-consultas">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-body-tertiary">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Concluir</button>
            </div>
        </div>
    </div>
</div>
