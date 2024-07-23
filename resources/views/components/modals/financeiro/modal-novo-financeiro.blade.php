<div class="modal fade modal-lg" data-bs-backdrop="static" data-bs-keyboard="false" id="modalNovoFinanceiro" tabindex="-1" aria-labelledby="modalNovoFinanceiroLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="width:100%;max-width:800px;">
        <div class="modal-content">
            <div class="modal-header bg-body-tertiary">
                <div class="d-flex justify-content-center align-items-center flex-grow-1">
                    <h4 class="modal-title fw-bold text-primary ms-4" id="modalNovoFinanceiroLabel">Nova Movimentação Financeira</h4>
                </div>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body m-auto py-4">
                <form id="formNovoFinanceiro">
                    <div>
                        <h5 class="mb-4 fw-semibold">Informações Gerais</h5>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="data-hora" class="form-label">Data e Hora</label>
                                <input type="datetime-local" class="form-control" id="data-hora" name="data-hora" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="movimentacao" class="form-label">Movimentação</label>
                                <select id="movimentacao" class="form-select" required>
                                    <option disabled selected>Selecione...</option>
                                    <option value="entrada">Entrada</option>
                                    <option value="saida">Saída</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="valor" class="form-label">Valor<span class="required-field">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">R$</span>
                                    <input type="text" class="form-control" id="valor" name="valor" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="mb-3">
                                <label for="tipo" class="form-label">Tipo</label>
                                <input type="text" class="form-control" id="tipo" name="tipo" required>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="mb-3 mt-4 pt-1">
                                <div class="form-check-inline">
                                    <input class="form-check-input me-1" type="checkbox" name="tipo-despesa" id="despesa-fixa" value="fixa">
                                    <label class="form-check-label me-2" for="despesa-fixa">Despesa Fixa</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 d-none" id="recorrencia-despesa">
                        <div class="col">
                            <label for="recorrencia" class="form-label">Recorrência (em dias)</label>
                            <input type="number" class="form-control" id="recorrencia" name="recorrencia">
                        </div>
                        <div class="col">
                            <label for="inicio-recorrencia" class="form-label">A partir de</label>
                            <input type="date" class="form-control" id="inicio-recorrencia" name="inicio-recorrencia">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer bg-body-tertiary">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" form="formNovoFinanceiro">Salvar</button>
            </div>
        </div>
    </div>
</div>