<!-- Modal -->
<div class="modal fade modal-lg" data-bs-backdrop="static" data-bs-keyboard="false" id="modalDetalhesRecepcionista" tabindex="-1" aria-labelledby="modalDetalhesRecepcionistaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="width:100%;max-width:800px;">
        <div class="modal-content">
            <div class="modal-header bg-body-tertiary">
                <div class="d-flex justify-content-center align-items-center flex-grow-1">
                    <h4 class="modal-title fw-bold text-primary ms-4" id="modalDetalhesRecepcionistaLabel">Detalhes do Recepcionista</h4>
                </div>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body m-auto py-4">
                <form id="formDetalhesRecepcionista">
                    <div>
                        <h5 class="mb-4 fw-semibold">Informações Pessoais</h5>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="mb-3">
                                <label for="nome_recepcionista" class="form-label">Nome Completo</label>
                                <input type="text" class="form-control" id="nome_recepcionista" name="nome" readonly>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="sexo_recepcionista" class="form-label">Sexo</label>
                                <input type="text" class="form-control" id="sexo_recepcionista" name="sexo" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="cpf_recepcionista" class="form-label">CPF</label>
                                <input type="text" class="form-control cpf" id="cpf_recepcionista" name="cpf" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="rg_recepcionista" class="form-label">RG</label>
                                <input type="text" class="form-control rg" id="rg_recepcionista" name="rg" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <label for="data-nasc_recepcionista" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" id="data-nasc_recepcionista" name="data-nasc" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="email_recepcionista" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email_recepcionista" name="email" readonly>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="tel_recepcionista" class="form-label">Telefone</label>
                                <input type="tel" class="form-control tel" id="tel_recepcionista" name="tel" readonly>
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
                                <label for="rua_recepcionista" class="form-label">Rua</label>
                                <input type="text" class="form-control" id="rua_recepcionista" name="rua" readonly>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="mb-3">
                                <label for="num_recepcionista" class="form-label">Número</label>
                                <input type="number" class="form-control" id="num_recepcionista" name="num" readonly>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="complemento_recepcionista" class="form-label">Complemento</label>
                                <input type="text" class="form-control" id="complemento_recepcionista" name="complemento" placeholder="Opcional" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="cidade_recepcionista" class="form-label">Cidade</label>
                                <input type="text" class="form-control" id="cidade_recepcionista" name="cidade" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="estado_recepcionista" class="form-label">Estado</label>
                                <input type="text" class="form-control" id="estado_recepcionista" name="estado" readonly>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="cep_recepcionista" class="form-label">CEP</label>
                                <input type="text" class="form-control cep" id="cep_recepcionista" name="cep" readonly>
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
