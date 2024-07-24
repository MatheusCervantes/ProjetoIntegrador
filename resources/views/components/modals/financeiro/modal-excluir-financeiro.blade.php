<div class="modal fade modal-md" id="modalExcluirFinanceiro" tabindex="-1" aria-labelledby="modalExcluirFinanceiroLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form method="POST" data-action="/painel-adm/financeiro/delete/" id="formExcluirFinanceiro">
            @csrf
            @method('DELETE')
            <div class="modal-content">
                <div class="modal-header bg-body-tertiary">
                    <div class="d-flex justify-content-center align-items-center flex-grow-1">
                        <ion-icon name="warning-outline" class="fs-2 fw-semibold text-warning"></ion-icon>
                    </div>
                </div>
                <div class="modal-body m-auto py-4">
                    Tem certeza que deseja excluir esta movimentação financeira?
                </div>
                <div class="modal-footer bg-body-tertiary">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-sm btn-danger"
                        id="btnConfirmarExclusaoFinanceiro">Confirmar</button>
                </div>
            </div>
        </form>
    </div>
</div>
