<div class="modal fade modal-lg" id="modalDetalhesMedico" tabindex="-1" aria-labelledby="modalDetalhesMedicoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-body-tertiary">
                <div class="d-flex justify-content-center align-items-center flex-grow-1">
                    <h4 class="modal-title fw-bold text-primary ms-4" id="modalDetalhesMedicoLabel">Detalhes do Médico</h4>
                </div>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body m-auto py-4">
                <form id="formDetalhesMedico">
                    <div>
                        <h5 class="mb-4 fw-semibold">Informações Pessoais</h5>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome Completo</label>
                                <input type="text" class="form-control" id="nome" name="nome" readonly>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="sexo" class="form-label">Sexo</label>
                                <input type="text" class="form-control" id="sexo" name="sexo" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="cpf" class="form-label">CPF</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="rg" class="form-label">RG</label>
                                <input type="text" class="form-control" id="rg" name="rg" readonly>
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
                                <input type="email" class="form-control" id="email" name="email" readonly>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="tel" class="form-label">Telefone</label>
                                <input type="tel" class="form-control" id="tel" name="tel" readonly>
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
                                <input type="text" class="form-control" id="rua" name="rua" readonly>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="mb-3">
                                <label for="num" class="form-label">Número</label>
                                <input type="number" class="form-control" id="num" name="num" readonly>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="complemento" class="form-label">Complemento</label>
                                <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Opcional" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="cidade" class="form-label">Cidade</label>
                                <input type="text" class="form-control" id="cidade" name="cidade" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="estado" class="form-label">Estado</label>
                                <input type="text" class="form-control" id="estado" name="estado" readonly>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="cep" class="form-label">CEP</label>
                                <input type="text" class="form-control" id="cep" name="cep" readonly>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div>
                        <h5 class="mb-4 fw-semibold">Informações Profissionais</h5>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="crm" class="form-label">CRM/UF</label>
                                <input type="text" class="form-control" id="crm" name="crm" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="especialidades" class="form-label">Especialidades</label>
                                <input type="text" class="form-control" id="especialidades" name="especialidades" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="atuacao" class="form-label">Áreas de Atuação</label>
                                <input type="text" class="form-control" id="atuacao" name="atuacao" readonly>
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