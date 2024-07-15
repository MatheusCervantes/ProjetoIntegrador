<div class="modal fade modal-lg" id="modalDetalhesPaciente" tabindex="-1" aria-labelledby="modalDetalhesPacienteLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-body-tertiary">
                <div class="d-flex justify-content-center align-items-center flex-grow-1">
                    <h4 class="modal-title fw-bold text-primary ms-4" id="modalDetalhesPacienteLabel">Detalhes do Paciente</h4>
                </div>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body m-auto py-4">
                <form id="formDetalhesPaciente">
                    <div>
                        <h5 class="mb-4 fw-semibold">Informações Pessoais</h5>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome Completo</label>
                                <input type="text" class="form-control" id="nome_paciente" name="nome" readonly>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="sexo" class="form-label">Sexo</label>
                                <input type="text" class="form-control" id="sexo_paciente" name="sexo" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="cpf" class="form-label">CPF</label>
                                <input type="text" class="form-control cpf" id="cpf_paciente" name="cpf" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="rg" class="form-label">RG</label>
                                <input type="text" class="form-control rg" id="rg_paciente" name="rg" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <label for="data-nasc" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" id="data-nasc_paciente" name="data-nasc" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email_paciente" name="email" readonly>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="tel" class="form-label">Telefone</label>
                                <input type="tel" class="form-control tel" id="tel_paciente" name="tel" readonly>
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
                                <input type="text" class="form-control" id="rua_paciente" name="rua" readonly>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="mb-3">
                                <label for="num" class="form-label">Número</label>
                                <input type="number" class="form-control" id="num_paciente" name="num" readonly>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="complemento" class="form-label">Complemento</label>
                                <input type="text" class="form-control" id="complemento_paciente" name="complemento" placeholder="Opcional" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="cidade" class="form-label">Cidade</label>
                                <input type="text" class="form-control" id="cidade_paciente" name="cidade" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="estado" class="form-label">Estado</label>
                                <input type="text" class="form-control" id="estado_paciente" name="estado" readonly>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="cep" class="form-label">CEP</label>
                                <input type="text" class="form-control cep" id="cep_paciente" name="cep" readonly>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div>
                        <h5 class="mb-4 fw-semibold">Plano de Saúde</h5>
                    </div>
                    <div class="mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="plano_saude" id="plano-sim-detalhes_paciente" value="sim" disabled>
                            <label class="form-check-label" for="plano-sim-detalhes">Sim</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="plano_saude" id="plano-nao-detalhes_paciente" value="nao" disabled>
                            <label class="form-check-label" for="plano-nao-detalhes">Não</label>
                        </div>
                    </div>
                    <div id="info-plano-saude-detalhes" style="display: none;">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="nome-plano" class="form-label">Nome do Plano de Saúde</label>
                                    <input type="text" class="form-control" id="detalhe-nome-plano_paciente" name="nome_plano" readonly>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="numero-cartao" class="form-label">Número do Cartão do Plano</label>
                                    <input type="text" class="form-control" id="detalhe-numero-cartao_paciente" name="numero-cartao" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer bg-body-tertiary">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>