<div class="modal fade modal-md" data-bs-backdrop="static" data-bs-keyboard="false" id="modalExcluirMedico" tabindex="-1" aria-labelledby="modalExcluirMedicoLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="formExcluirMedico" method="POST" data-action="/painel-adm/gestao-medico/delete/">
                @csrf
                @method('DELETE')
                <div class="modal-header bg-body-tertiary">
                    <div class="d-flex justify-content-center align-items-center flex-grow-1">
                        <ion-icon name="warning-outline" class="fs-2 fw-semibold text-warning"></ion-icon>
                    </div>
                </div>
                <div class="modal-body m-auto py-4 text-center">
                    Tem certeza que deseja excluir este médico?
                </div>
                <div class="modal-footer bg-body-tertiary">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-sm btn-danger"
                        id="btnConfirmarExclusaoMedico">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>
