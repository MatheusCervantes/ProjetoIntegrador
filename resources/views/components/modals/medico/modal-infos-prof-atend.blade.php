<div class="modal fade modal-lg" data-bs-backdrop="static" data-bs-keyboard="false" id="modalInfos" tabindex="-1"
    aria-labelledby="modalInfosLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:791px;width:100%;">
        <div class="modal-content">
            <div class="modal-header bg-body-tertiary">
                <div class="d-flex justify-content-center align-items-center flex-grow-1">
                    <h4 class="modal-title fw-bold text-primary ms-4" id="modalNovoRecepcionistaLabel">Definir
                        Informações</h4>
                </div>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                    aria-label="Fechar"></button>
            </div>
            <div class="modal-body mx-5 py-4">
                <form id="formDefinirInfos" method="POST" action="/medico/insert/info">
                    @csrf
                    <div>
                        <h5 class="mb-3 fw-semibold">Informações Profissionais</h5>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group mb-3">
                                <label for="crm" class="form-label">CRM/UF</label>
                                <input type="text" class="form-control form-control crm" id="crm"
                                    name="crm" required>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group mb-3">
                                <label for="especialidades" class="form-label">Especialidades</label>
                                <input type="text" class="form-control form-control" id="especialidades"
                                    name="especialidades" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group mb-3">
                                <label for="areas-atuacao" class="form-label">Áreas de Atuação</label>
                                <input type="text" class="form-control form-control" id="areas-atuacao"
                                    name="areas_atuacao" required>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div>
                        <h5 class="mb-3 pb-1 fw-semibold">Informações de Atendimento</h5>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4">
                            <label for="duracao-media" class="form-label">Duração Média<span
                                    class="required-field">*</span></label>
                            <ion-icon name="help-circle-outline" class="ps-2 cursor" data-toggle="tooltip"
                                data-placement="top" title="Refere-se à duração média de uma consulta."></ion-icon>
                            <div class="input-group">
                                <input type="number" class="form-control" id="duracao-media" name="duracao_media"
                                    aria-label="Duração Média" aria-describedby="duracao-media-addon" required>
                                <span class="input-group-text" id="duracao-media-addon">minutos</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="intervalo" class="form-label">Intervalo<span
                                    class="required-field">*</span></label>
                            <ion-icon name="help-circle-outline" class="ps-2 cursor" data-toggle="tooltip"
                                data-placement="top"
                                title="Refere-se ao intervalo entre uma consulta e outra."></ion-icon>
                            <div class="input-group">
                                <input type="number" class="form-control" id="intervalo" name="intervalo"
                                    aria-label="Intervalo" aria-describedby="intervalo-addon" required>
                                <span class="input-group-text" id="intervalo-addon">minutos</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="valor" class="form-label">Valor<span class="required-field">*</span></label>
                            <ion-icon name="help-circle-outline" class="ps-2 cursor" data-toggle="tooltip"
                                data-placement="top"
                                title="Refere-se ao valor cobrado por uma consulta particular."></ion-icon>
                            <div class="input-group">
                                <span class="input-group-text">R$</span>
                                <input type="text" class="form-control" id="valor" name="valor" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="form-group mb-2">
                                <label for="planos-saude" class="form-label">Planos de Saúde Aceitos <span
                                        class="font-bullet">[OPCIONAL]</span></label>
                                <input type="text" class="form-control" id="planos-saude" name="planos_saude">
                            </div>
                        </div>
                    </div>
                    <div class="border rounded mb-2">
                        <div class="row align-items-center border-bottom px-2 p-3 m-auto bg-light">
                            <div class="col-auto">
                                <div class="pe-1 me-1 font-atendimento">Dias de Atendimento<span
                                        class="required-field">*</span></div>
                            </div>
                            <div class="col-auto">
                                <div class="pe-1 me-2 font-atendimento">Horário de Atendimento<span
                                        class="required-field">*</span></div>
                            </div>
                            <div class="col-auto">
                                <div class="font-atendimento">Horário de Almoço <span
                                        class="font-bullet">[OPCIONAL]</span></div>
                            </div>
                        </div>
                        <div
                            class="row day-row align-items-center border-bottom p-3 m-auto d-flex justify-content-between">
                            <div class="col-auto form-check">
                                <input class="form-check-input" type="checkbox" id="segunda" name="segunda">
                                <label class="form-check-label" for="segunda">Segunda-feira</label>
                            </div>
                            <div class="col-auto time-container">
                                <div class="input-group input-group-sm">
                                    <input type="time" class="form-control form-control-sm" name="segunda_inicio"
                                        id="segunda_inicio" disabled>
                                    <span class="input-group-text">às</span>
                                    <input type="time" class="form-control form-control-sm" name="segunda_fim"
                                        id="segunda_fim" disabled>
                                </div>
                            </div>
                            <div class="col-auto time-container">
                                <div class="input-group input-group-sm">
                                    <input type="time" class="form-control form-control-sm"
                                        name="segunda_almoco_inicio" id="segunda_almoco_inicio" disabled>
                                    <span class="input-group-text">às</span>
                                    <input type="time" class="form-control form-control-sm"
                                        name="segunda_almoco_fim" id="segunda_almoco_fim" disabled>
                                </div>
                            </div>
                        </div>
                        <div
                            class="row day-row align-items-center border-bottom p-3 m-auto d-flex justify-content-between">
                            <div class="col-auto form-check">
                                <input class="form-check-input" type="checkbox" id="terca" name="terca">
                                <label class="form-check-label" for="terca">Terça-feira</label>
                            </div>
                            <div class="col-auto time-container">
                                <div class="input-group input-group-sm">
                                    <input type="time" class="form-control form-control-sm" name="terca_inicio"
                                        id="terca_inicio" disabled>
                                    <span class="input-group-text">às</span>
                                    <input type="time" class="form-control form-control-sm" name="terca_fim"
                                        id="terca_fim" disabled>
                                </div>
                            </div>
                            <div class="col-auto time-container">
                                <div class="input-group input-group-sm">
                                    <input type="time" class="form-control form-control-sm"
                                        name="terca_almoco_inicio" disabled>
                                    <span class="input-group-text">às</span>
                                    <input type="time" class="form-control form-control-sm"
                                        name="terca_almoco_fim" disabled>
                                </div>
                            </div>
                        </div>
                        <div
                            class="row day-row align-items-center border-bottom p-3 m-auto d-flex justify-content-between">
                            <div class="col-auto form-check">
                                <input class="form-check-input" type="checkbox" id="quarta" name="quarta">
                                <label class="form-check-label" for="quarta">Quarta-feira</label>
                            </div>
                            <div class="col-auto time-container">
                                <div class="input-group input-group-sm">
                                    <input type="time" class="form-control form-control-sm" id="quarta_inicio"
                                        name="quarta_inicio" disabled>
                                    <span class="input-group-text">às</span>
                                    <input type="time" class="form-control form-control-sm" id="quarta_fim"
                                        name="quarta_fim" disabled>
                                </div>
                            </div>
                            <div class="col-auto time-container">
                                <div class="input-group input-group-sm">
                                    <input type="time" class="form-control form-control-sm"
                                        name="quarta_almoco_inicio" id="quarta_almoco_inicio" disabled>
                                    <span class="input-group-text">às</span>
                                    <input type="time" class="form-control form-control-sm"
                                        name="quarta_almoco_fim" id="quarta_almoco_fim" disabled>
                                </div>
                            </div>
                        </div>
                        <div
                            class="row day-row align-items-center border-bottom p-3 m-auto d-flex justify-content-between">
                            <div class="col-auto form-check">
                                <input class="form-check-input" type="checkbox" id="quinta" name="quinta">
                                <label class="form-check-label" for="quinta">Quinta-feira</label>
                            </div>
                            <div class="col-auto time-container">
                                <div class="input-group input-group-sm">
                                    <input type="time" class="form-control form-control-sm" name="quinta_inicio"
                                        id="quinta_inicio" disabled>
                                    <span class="input-group-text">às</span>
                                    <input type="time" class="form-control form-control-sm" name="quinta_fim"
                                        id="quinta_fim" disabled>
                                </div>
                            </div>
                            <div class="col-auto time-container">
                                <div class="input-group input-group-sm">
                                    <input type="time" class="form-control form-control-sm"
                                        name="quinta_almoco_inicio" id="quinta_almoco_inicio" disabled>
                                    <span class="input-group-text">às</span>
                                    <input type="time" class="form-control form-control-sm"
                                        name="quinta_almoco_fim" id="quinta_almoco_fim" disabled>
                                </div>
                            </div>
                        </div>
                        <div
                            class="row day-row align-items-center border-bottom p-3 m-auto d-flex justify-content-between">
                            <div class="col-auto form-check">
                                <input class="form-check-input" type="checkbox" id="sexta" name="sexta">
                                <label class="form-check-label" for="sexta">Sexta-feira</label>
                            </div>
                            <div class="col-auto time-container">
                                <div class="input-group input-group-sm">
                                    <input type="time" class="form-control form-control-sm" name="sexta_inicio"
                                        id="sexta_inicio" disabled>
                                    <span class="input-group-text">às</span>
                                    <input type="time" class="form-control form-control-sm" name="sexta_fim"
                                        id="sexta_fim" disabled>
                                </div>
                            </div>
                            <div class="col-auto time-container">
                                <div class="input-group input-group-sm">
                                    <input type="time" class="form-control form-control-sm"
                                        name="sexta_almoco_inicio" id="sexta_almoco_inicio" disabled>
                                    <span class="input-group-text">às</span>
                                    <input type="time" class="form-control form-control-sm"
                                        name="sexta_almoco_fim" id="sexta_almoco_fim" disabled>
                                </div>
                            </div>
                        </div>
                        <div
                            class="row day-row align-items-center border-bottom p-3 m-auto d-flex justify-content-between">
                            <div class="col-auto form-check">
                                <input class="form-check-input" type="checkbox" id="sabado" name="sabado">
                                <label class="form-check-label" for="sabado">Sábado</label>
                            </div>
                            <div class="col-auto time-container">
                                <div class="input-group input-group-sm">
                                    <input type="time" class="form-control form-control-sm" name="sabado_inicio"
                                        id="sabado_inicio" disabled>
                                    <span class="input-group-text">às</span>
                                    <input type="time" class="form-control form-control-sm" name="sabado_fim"
                                        id="sabado_fim" disabled>
                                </div>
                            </div>
                            <div class="col-auto time-container">
                                <div class="input-group input-group-sm">
                                    <input type="time" class="form-control form-control-sm"
                                        name="sabado_almoco_inicio" id="sabado_almoco_inicio" disabled>
                                    <span class="input-group-text">às</span>
                                    <input type="time" class="form-control form-control-sm"
                                        name="sabado_almoco_fim" id="sabado_almoco_fim" disabled>
                                </div>
                            </div>
                        </div>
                        <div
                            class="row day-row align-items-center border-bottom p-3 m-auto d-flex justify-content-between">
                            <div class="col-auto form-check">
                                <input class="form-check-input" type="checkbox" id="domingo" name="domingo">
                                <label class="form-check-label" for="domingo">Domingo</label>
                            </div>
                            <div class="col-auto time-container">
                                <div class="input-group input-group-sm">
                                    <input type="time" class="form-control form-control-sm" name="domingo_inicio"
                                        id="domingo_inicio" disabled>
                                    <span class="input-group-text">às</span>
                                    <input type="time" class="form-control form-control-sm" name="domingo_fim"
                                        id="domingo_fim" disabled>
                                </div>
                            </div>
                            <div class="col-auto time-container">
                                <div class="input-group input-group-sm">
                                    <input type="time" class="form-control form-control-sm"
                                        name="domingo_almoco_inicio" id="domingo_almoco_inicio" disabled>
                                    <span class="input-group-text">às</span>
                                    <input type="time" class="form-control form-control-sm"
                                        name="domingo_almoco_fim" id="domingo_almoco_fim" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer bg-body-tertiary">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" form="formDefinirInfos">Salvar</button>
            </div>
            </form>
        </div>
    </div>
</div>
