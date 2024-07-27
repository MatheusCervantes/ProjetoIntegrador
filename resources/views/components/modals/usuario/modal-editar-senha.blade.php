<div class="modal fade modal-md" id="modalEditarSenha" tabindex="-1" aria-labelledby="modalEditarSenhaLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 450px; width: 100%;">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <div class="d-flex justify-content-center align-items-center flex-grow-1">
                    <div class="text-primary h5 fw-semibold pt-2">Editar Senha</div>
                </div>
            </div>
            <div class="modal-body mx-5 py-4">
                <form id="formEditarSenha" method="POST" action="/painel-adm/alterar_senha">
                    @if (session('error_senha'))
                        <div class="alert alert-danger">
                            {{ session('error_senha') }}
                        </div>
                    @endif
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="senha-atual" class="form-label">Senha Atual<span
                                        class="required-field">*</span></label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="senha-atual" name="senha_atual"
                                        required>
                                    <button class="btn btn-sm btn-outline-light text-dark border-secondary-subtle"
                                        type="button" id="mostrarSenhaAtual">
                                        <ion-icon name="eye-outline" class="pt-2 px-1 font-nome-agenda"></ion-icon>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="nova-senha" class="form-label">Nova Senha<span
                                        class="required-field">*</span></label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="nova-senha" name="nova_senha"
                                        required>
                                    <button class="btn btn-sm btn-outline-light text-dark border-secondary-subtle"
                                        type="button" id="mostrarNovaSenha">
                                        <ion-icon name="eye-outline" class="pt-2 px-1 font-nome-agenda"></ion-icon>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-2">
                                <label for="confirm-nova-senha" class="form-label">Confirme a Nova Senha<span
                                        class="required-field">*</span></label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="confirm-nova-senha"
                                        name="confirm_nova_senha" required>
                                    <button class="btn btn-sm btn-outline-light text-dark border-secondary-subtle"
                                        type="button" id="mostrarConfirmNovaSenha">
                                        <ion-icon name="eye-outline" class="pt-2 px-1 font-nome-agenda"></ion-icon>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer bg-light">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-sm btn-primary" id="btnSalvarEdicaoSenha">Salvar</button>
            </div>
            </form>
        </div>
    </div>
</div>
