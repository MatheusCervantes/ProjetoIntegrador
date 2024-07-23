<div class="modal fade modal-lg" data-bs-backdrop="static" data-bs-keyboard="false" id="modalEditarConsulta" tabindex="-1" aria-labelledby="modalEditarConsultaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-body-tertiary d-flex flex-column align-items-center pb-0">
                <div class="d-flex justify-content-between w-100 mt-2">
                    <div class="d-flex align-items-center ms-3">
                        <div class="d-flex justify-content-center align-items-center rounded-circle bg-dark-subtle text-white" style="width: 5.5vw; height: 5.5vw;">
                            <div class="fs-3">JS</div>
                        </div>
                        <div class="ms-3">
                            <h4 class="mb-0 fw-semibold">João da Silva</h4>
                            <h5 class="mb-0 text-dark-emphasis">Particular</h5>
                        </div>
                    </div>
                    <div class="text-end mt-4 me-4">
                        <a href="{{ route('pacientes') }}" class="btn btn-light shadow-sm border small" type="button" data-toggle="tooltip" title="Mais Informações do Paciente">
                            <div>Visualizar Prontuário</div>
                        </a>
                    </div>
                </div>
                <nav class="nav nav-tabs w-100 justify-content-center mt-4 border-bottom-0" id="nav-tab" role="tablist">
                    <button class="nav-link active py-2" id="nav-editar-dados-medicos-tab" data-bs-toggle="tab" data-bs-target="#nav-editar-dados-medicos" type="button" role="tab" aria-controls="nav-editar-dados-medicos" aria-selected="true">Dados Médicos</button>
                    <button class="nav-link py-2" id="nav-editar-anamnese-tab" data-bs-toggle="tab" data-bs-target="#nav-editar-anamnese" type="button" role="tab" aria-controls="nav-editar-anamnese" aria-selected="false">Anamnese</button>
                    <button class="nav-link py-2" id="nav-editar-diagnostico-tab" data-bs-toggle="tab" data-bs-target="#nav-editar-diagnostico" type="button" role="tab" aria-controls="nav-editar-diagnostico" aria-selected="false">Diagnóstico</button>
                    <button class="nav-link py-2" id="nav-editar-prescricoes-tab" data-bs-toggle="tab" data-bs-target="#nav-editar-prescricoes" type="button" role="tab" aria-controls="nav-editar-prescricoes" aria-selected="false">Prescrições</button>
                    <button class="nav-link py-2" id="nav-editar-exames-tab" data-bs-toggle="tab" data-bs-target="#nav-editar-exames" type="button" role="tab" aria-controls="nav-editar-exames" aria-selected="false">Exames</button>
                    <button class="nav-link py-2" id="nav-editar-atestados-tab" data-bs-toggle="tab" data-bs-target="#nav-editar-atestados" type="button" role="tab" aria-controls="nav-editar-atestados" aria-selected="false">Atestados</button>
                </nav>
            </div>
            <div class="modal-body m-5 pt-4 mt-2 mb-3">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-editar-dados-medicos" role="tabpanel" aria-labelledby="nav-editar-dados-medicos-tab">
                        <form id="formEditarConsulta">
                            <div>
                                <div class="border border-2 border-primary-subtle rounded p-3">
                                    <div class="pb-2">Peso do paciente</div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <input type="text" class="form-control" id="peso" name="peso" placeholder="Digite aqui...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3 mt-3">
                                    <div class="pb-2">Altura do paciente</div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <input type="text" class="form-control" id="altura" name="altura" placeholder="Digite aqui...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3 mt-3">
                                    <div class="pb-2">Tem alergia a medicamentos?</div>
                                    <div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="editar-alergia-medicamentos" id="editar-alergia-sim" value="sim">
                                            <label class="form-check-label font-resumo" for="editar-alergia-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="editar-alergia-medicamentos" id="editar-alergia-nao" value="nao">
                                            <label class="form-check-label font-resumo" for="editar-alergia-nao">Não</label>
                                        </div>
                                    </div>
                                    <div id="info-editar-alergia-medicamentos" style="display: none;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mt-3">
                                                    <textarea class="form-control" id="editar-alergias" name="editar-alergias" rows="2" placeholder="Qual(is)?"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3 mt-3">
                                    <div class="pb-2">Já fez cirurgia?</div>
                                    <div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="editar-cirurgia" id="editar-cirurgia-sim" value="sim">
                                            <label class="form-check-label font-resumo" for="editar-cirurgia-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="editar-cirurgia" id="editar-cirurgia-nao" value="nao">
                                            <label class="form-check-label font-resumo" for="editar-cirurgia-nao">Não</label>
                                        </div>
                                    </div>
                                    <div id="info-editar-cirurgia" style="display: none;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mt-3">
                                                    <textarea class="form-control" id="editar-cirurgias" name="editar-cirurgias" rows="2" placeholder="Qual(is)?"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3 mt-3">
                                    <div class="pb-2">Toma algum medicamento regularmente?</div>
                                    <div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="editar-medicamento-regular" id="editar-medicamento-sim" value="sim">
                                            <label class="form-check-label font-resumo" for="editar-medicamento-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="editar-medicamento-regular" id="editar-medicamento-nao" value="nao">
                                            <label class="form-check-label font-resumo" for="editar-medicamento-nao">Não</label>
                                        </div>
                                    </div>
                                    <div id="info-editar-medicamento-regular" style="display: none;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mt-3">
                                                    <textarea class="form-control" id="editar-medicamentos" name="editar-medicamentos" rows="2" placeholder="Qual(is)?"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3 mt-3">
                                    <div class="pb-2">Tem alguma condição de saúde preexistente?</div>
                                    <div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="editar-condicao-preexistente" id="editar-condicao-sim" value="sim">
                                            <label class="form-check-label font-resumo" for="editar-condicao-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="editar-condicao-preexistente" id="editar-condicao-nao" value="nao">
                                            <label class="form-check-label font-resumo" for="editar-condicao-nao">Não</label>
                                        </div>
                                    </div>
                                    <div id="info-editar-condicao-preexistente" style="display: none;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mt-3">
                                                    <textarea class="form-control" id="editar-condicoes" name="editar-condicoes" rows="2" placeholder="Qual(is)?"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3 mt-3">
                                    <div class="pb-2">Pratica atividade física regularmente?</div>
                                    <div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="editar-atividade-fisica" id="editar-atividade-sim" value="sim">
                                            <label class="form-check-label font-resumo" for="editar-atividade-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="editar-atividade-fisica" id="editar-atividade-nao" value="nao">
                                            <label class="form-check-label font-resumo" for="editar-atividade-nao">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3 mt-3">
                                    <div class="pb-2">Tem algum vício (álcool, tabaco, outras substâncias)?</div>
                                    <div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="editar-vicio" id="editar-vicio-sim" value="sim">
                                            <label class="form-check-label font-resumo" for="editar-vicio-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="editar-vicio" id="editar-vicio-nao" value="nao">
                                            <label class="form-check-label font-resumo" for="editar-vicio-nao">Não</label>
                                        </div>
                                    </div>
                                    <div id="info-editar-vicio" style="display: none;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mt-3">
                                                    <textarea class="form-control" id="editar-vicios" name="editar-vicios" rows="2" placeholder="Qual(is)?"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-editar-anamnese" role="tabpanel" aria-labelledby="nav-editar-anamnese-tab">
                        <div id="anamneseEditarEditor"></div>
                    </div>
                    <div class="tab-pane fade" id="nav-editar-diagnostico" role="tabpanel" aria-labelledby="nav-editar-diagnostico-tab">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-4">
                                    <select id="editar-primeiro-cid" name="editar-primeiro-cid" class="form-select" required>
                                        <option disabled selected>Selecione o CID...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-4">
                                    <select id="editar-segundo-cid" name="editar-segundo-cid" class="form-select">
                                        <option disabled selected>Selecione outro CID... [OPCIONAL]</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="diagnosticoEditarEditor"></div>
                    </div>
                    <div class="tab-pane fade" id="nav-editar-prescricoes" role="tabpanel" aria-labelledby="nav-editar-prescricoes-tab">
                        <div id="prescricoesEditarEditor"></div>
                    </div>
                    <div class="tab-pane fade" id="nav-editar-exames" role="tabpanel" aria-labelledby="nav-editar-exames-tab">
                        <div id="examesEditarEditor"></div>
                    </div>
                    <div class="tab-pane fade" id="nav-editar-atestados" role="tabpanel" aria-labelledby="nav-editar-atestados-tab">
                        <div id="atestadosEditarEditor"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-body-tertiary">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="btnSalvarEdicaoPaciente">Salvar Alterações</button>
            </div>
        </div>
    </div>
</div>