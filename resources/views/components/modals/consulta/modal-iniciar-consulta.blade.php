<div class="modal fade modal-lg" id="modalIniciarConsulta" tabindex="-1" aria-labelledby="modalIniciarConsultaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-body-tertiary d-flex flex-column align-items-center pb-0">
                <div class="d-flex justify-content-between w-100 mt-2">
                    <div class="d-flex align-items-center ms-3 mb-1">
                        <div class="d-flex justify-content-center align-items-center rounded-circle bg-dark-subtle text-white" style="width: 5.5vw; height: 5.5vw;">
                            <div class="fs-3">JS</div>
                        </div>
                        <div class="ms-3">
                            <h4 class="mb-0 fw-semibold">João da Silva</h4>
                            <h5 class="mb-0 text-dark-emphasis">Particular</h5>
                        </div>
                    </div>
                    <div class="text-end mt-4 me-4">
                        <a href="{{ route('pacientes') }}" class="btn btn-light shadow-sm border small" type="button" data-toggle="tooltip" title="Abrir Prontuário">
                            <div>Visualizar Prontuário</div>
                        </a>
                    </div>
                </div>
                <nav class="nav nav-tabs w-100 justify-content-center mt-4 border-bottom-0" id="nav-tab" role="tablist">
                    <button class="nav-link active py-2" id="nav-geral-tab" data-bs-toggle="tab" data-bs-target="#nav-geral" type="button" role="tab" aria-controls="nav-geral" aria-selected="true">Geral</button>
                    <button class="nav-link py-2" id="nav-anamnese-tab" data-bs-toggle="tab" data-bs-target="#nav-anamnese" type="button" role="tab" aria-controls="nav-anamnese" aria-selected="false">Anamnese</button>
                    <button class="nav-link py-2" id="nav-diagnostico-tab" data-bs-toggle="tab" data-bs-target="#nav-diagnostico" type="button" role="tab" aria-controls="nav-diagnostico" aria-selected="false">Diagnóstico</button>
                    <button class="nav-link py-2" id="nav-prescricoes-tab" data-bs-toggle="tab" data-bs-target="#nav-prescricoes" type="button" role="tab" aria-controls="nav-prescricoes" aria-selected="false">Prescrições</button>
                    <button class="nav-link py-2" id="nav-exames-tab" data-bs-toggle="tab" data-bs-target="#nav-exames" type="button" role="tab" aria-controls="nav-exames" aria-selected="false">Exames</button>
                    <button class="nav-link py-2" id="nav-atestados-tab" data-bs-toggle="tab" data-bs-target="#nav-atestados" type="button" role="tab" aria-controls="nav-atestados" aria-selected="false">Atestados</button>
                </nav>
            </div>
            <div class="modal-body m-5 pt-4 mt-2 mb-3">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-geral" role="tabpanel" aria-labelledby="nav-geral-tab">
                        <form>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-4">
                                        <select id="questionario" class="form-select" required>
                                            <option disabled selected>Selecione...</option>
                                            <option value="quest-primeira-consulta">Questionário de primeira consulta</option>
                                            <option value="">...</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div id="info-quest-primeira-consulta">
                                <div class="d-flex justify-content-between align-items-center align-middle">
                                    <div>
                                        <h5 class="mb-3 fw-medium">Questionário de primeira consulta</h5>
                                    </div>
                                    <div class="mb-3">
                                        <a href="{{ route('pacientes') }}" class="btn btn-primary shadow-sm border small" type="button" data-toggle="tooltip" title="Abrir Prontuário">
                                            <div>
                                                <ion-icon name="checkmark-outline" class="fs-5 pb-1 align-middle"></ion-icon>
                                                Salvar
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3">
                                    <div class="pb-2">Tem alergia a medicamentos?</div>
                                    <div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="alergia-medicamentos" id="alergia-sim" value="sim">
                                            <label class="form-check-label font-resumo" for="alergia-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="alergia-medicamentos" id="alergia-nao" value="nao">
                                            <label class="form-check-label font-resumo" for="alergia-nao">Não</label>
                                        </div>
                                    </div>
                                    <div id="info-alergia-medicamentos" style="display: none;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mt-3">
                                                    <textarea class="form-control" id="alergias" name="alergias" rows="2" placeholder="Qual(is)?"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3 mt-3">
                                    <div class="pb-2">Já fez cirurgia?</div>
                                    <div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="cirurgia" id="cirurgia-sim" value="sim">
                                            <label class="form-check-label font-resumo" for="cirurgia-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="cirurgia" id="cirurgia-nao" value="nao">
                                            <label class="form-check-label font-resumo" for="cirurgia-nao">Não</label>
                                        </div>
                                    </div>
                                    <div id="info-cirurgia" style="display: none;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mt-3">
                                                    <textarea class="form-control" id="cirurgias" name="cirurgias" rows="2" placeholder="Qual(is)?"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3 mt-3">
                                    <div class="pb-2">Toma algum medicamento regularmente?</div>
                                    <div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="medicamento-regular" id="medicamento-sim" value="sim">
                                            <label class="form-check-label font-resumo" for="medicamento-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="medicamento-regular" id="medicamento-nao" value="nao">
                                            <label class="form-check-label font-resumo" for="medicamento-nao">Não</label>
                                        </div>
                                    </div>
                                    <div id="info-medicamento-regular" style="display: none;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mt-3">
                                                    <textarea class="form-control" id="medicamentos" name="medicamentos" rows="2" placeholder="Qual(is)?"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3 mt-3">
                                    <div class="pb-2">Tem alguma condição de saúde preexistente?</div>
                                    <div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="condicao-preexistente" id="condicao-sim" value="sim">
                                            <label class="form-check-label font-resumo" for="condicao-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="condicao-preexistente" id="condicao-nao" value="nao">
                                            <label class="form-check-label font-resumo" for="condicao-nao">Não</label>
                                        </div>
                                    </div>
                                    <div id="info-condicao-preexistente" style="display: none;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mt-3">
                                                    <textarea class="form-control" id="condicoes" name="condicoes" rows="2" placeholder="Qual(is)?"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3 mt-3">
                                    <div class="pb-2">Pratica atividade física regularmente?</div>
                                    <div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="atividade-fisica" id="atividade-sim" value="sim">
                                            <label class="form-check-label font-resumo" for="atividade-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="atividade-fisica" id="atividade-nao" value="nao">
                                            <label class="form-check-label font-resumo" for="atividade-nao">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3 mt-3">
                                    <div class="pb-2">Tem algum vício (álcool, tabaco, outras substâncias)?</div>
                                    <div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="vicio" id="vicio-sim" value="sim">
                                            <label class="form-check-label font-resumo" for="vicio-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="vicio" id="vicio-nao" value="nao">
                                            <label class="form-check-label font-resumo" for="vicio-nao">Não</label>
                                        </div>
                                    </div>
                                    <div id="info-vicio" style="display: none;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mt-3">
                                                    <textarea class="form-control" id="vicios" name="vicios" rows="2" placeholder="Qual(is)?"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-anamnese" role="tabpanel" aria-labelledby="nav-anamnese-tab">
                        <div id="anamneseEditor"></div>
                    </div>
                    <div class="tab-pane fade" id="nav-diagnostico" role="tabpanel" aria-labelledby="nav-diagnostico-tab">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-4">
                                    <select id="cidSelect" class="form-select" required>
                                        <option disabled selected>Selecione o CID...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="diagnosticoEditor"></div>
                    </div>
                    <div class="tab-pane fade" id="nav-prescricoes" role="tabpanel" aria-labelledby="nav-prescricoes-tab">

                    </div>
                    <div class="tab-pane fade" id="nav-exames" role="tabpanel" aria-labelledby="nav-exames-tab">

                    </div>
                    <div class="tab-pane fade" id="nav-atestados" role="tabpanel" aria-labelledby="nav-atestados-tab">

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