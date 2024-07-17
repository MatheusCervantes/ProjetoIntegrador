<div class="modal fade modal-lg" id="modalDetalhesConsulta" tabindex="-1" aria-labelledby="modalDetalhesConsultaLabel" aria-hidden="true">
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
                    <button class="nav-link active py-2" id="nav-detalhes-dados-medicos-tab" data-bs-toggle="tab" data-bs-target="#nav-detalhes-dados-medicos" type="button" role="tab" aria-controls="nav-detalhes-dados-medicos" aria-selected="true">Dados Médicos</button>
                    <button class="nav-link py-2" id="nav-detalhes-anamnese-tab" data-bs-toggle="tab" data-bs-target="#nav-detalhes-anamnese" type="button" role="tab" aria-controls="nav-detalhes-anamnese" aria-selected="false">Anamnese</button>
                    <button class="nav-link py-2" id="nav-detalhes-diagnostico-tab" data-bs-toggle="tab" data-bs-target="#nav-detalhes-diagnostico" type="button" role="tab" aria-controls="nav-detalhes-diagnostico" aria-selected="false">Diagnóstico</button>
                    <button class="nav-link py-2" id="nav-detalhes-prescricoes-tab" data-bs-toggle="tab" data-bs-target="#nav-detalhes-prescricoes" type="button" role="tab" aria-controls="nav-detalhes-prescricoes" aria-selected="false">Prescrições</button>
                    <button class="nav-link py-2" id="nav-detalhes-exames-tab" data-bs-toggle="tab" data-bs-target="#nav-detalhes-exames" type="button" role="tab" aria-controls="nav-detalhes-exames" aria-selected="false">Exames</button>
                    <button class="nav-link py-2" id="nav-detalhes-atestados-tab" data-bs-toggle="tab" data-bs-target="#nav-detalhes-atestados" type="button" role="tab" aria-controls="nav-detalhes-atestados" aria-selected="false">Atestados</button>
                </nav>
            </div>
            <div class="modal-body m-5 pt-4 mt-2 mb-3">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-detalhes-dados-medicos" role="tabpanel" aria-labelledby="nav-detalhes-dados-medicos-tab">
                        <form id="formDetalhesConsulta">
                            <div>
                                <div class="border border-2 border-primary-subtle rounded p-3">
                                    <div class="pb-2">Peso do paciente</div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <input type="text" class="form-control" id="peso" name="peso" placeholder="Digite aqui..." readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3 mt-3">
                                    <div class="pb-2">Altura do paciente</div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <input type="text" class="form-control" id="altura" name="altura" placeholder="Digite aqui..." readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3 mt-3">
                                    <div class="pb-2">Tem alergia a medicamentos?</div>
                                    <div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="detalhes-alergia-medicamentos" id="detalhes-alergia-sim" value="sim" disabled>
                                            <label class="form-check-label font-resumo" for="detalhes-alergia-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="detalhes-alergia-medicamentos" id="detalhes-alergia-nao" value="nao" disabled>
                                            <label class="form-check-label font-resumo" for="detalhes-alergia-nao">Não</label>
                                        </div>
                                    </div>
                                    <div id="info-detalhes-alergia-medicamentos" style="display: none;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mt-3">
                                                    <textarea class="form-control" id="detalhes-alergias" name="detalhes-alergias" rows="2" placeholder="Qual(is)?" readonly></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3 mt-3">
                                    <div class="pb-2">Já fez cirurgia?</div>
                                    <div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="detalhes-cirurgia" id="detalhes-cirurgia-sim" value="sim" disabled>
                                            <label class="form-check-label font-resumo" for="detalhes-cirurgia-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="detalhes-cirurgia" id="detalhes-cirurgia-nao" value="nao" disabled>
                                            <label class="form-check-label font-resumo" for="detalhes-cirurgia-nao">Não</label>
                                        </div>
                                    </div>
                                    <div id="info-detalhes-cirurgia" style="display: none;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mt-3">
                                                    <textarea class="form-control" id="detalhes-cirurgias" name="detalhes-cirurgias" rows="2" placeholder="Qual(is)?" readonly></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3 mt-3">
                                    <div class="pb-2">Toma algum medicamento regularmente?</div>
                                    <div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="detalhes-medicamento-regular" id="detalhes-medicamento-sim" value="sim" disabled>
                                            <label class="form-check-label font-resumo" for="detalhes-medicamento-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="detalhes-medicamento-regular" id="detalhes-medicamento-nao" value="nao" disabled>
                                            <label class="form-check-label font-resumo" for="detalhes-medicamento-nao">Não</label>
                                        </div>
                                    </div>
                                    <div id="info-detalhes-medicamento-regular" style="display: none;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mt-3">
                                                    <textarea class="form-control" id="detalhes-medicamentos" name="detalhes-medicamentos" rows="2" placeholder="Qual(is)?" readonly></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3 mt-3">
                                    <div class="pb-2">Tem alguma condição de saúde preexistente?</div>
                                    <div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="detalhes-condicao-preexistente" id="detalhes-condicao-sim" value="sim" disabled>
                                            <label class="form-check-label font-resumo" for="detalhes-condicao-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="detalhes-condicao-preexistente" id="detalhes-condicao-nao" value="nao" disabled>
                                            <label class="form-check-label font-resumo" for="detalhes-condicao-nao">Não</label>
                                        </div>
                                    </div>
                                    <div id="info-detalhes-condicao-preexistente" style="display: none;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mt-3">
                                                    <textarea class="form-control" id="detalhes-condicoes" name="detalhes-condicoes" rows="2" placeholder="Qual(is)?" readonly></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3 mt-3">
                                    <div class="pb-2">Pratica atividade física regularmente?</div>
                                    <div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="detalhes-atividade-fisica" id="detalhes-atividade-sim" value="sim" disabled>
                                            <label class="form-check-label font-resumo" for="detalhes-atividade-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="detalhes-atividade-fisica" id="detalhes-atividade-nao" value="nao" disabled>
                                            <label class="form-check-label font-resumo" for="detalhes-atividade-nao">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3 mt-3">
                                    <div class="pb-2">Tem algum vício (álcool, tabaco, outras substâncias)?</div>
                                    <div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="detalhes-vicio" id="detalhes-vicio-sim" value="sim" disabled>
                                            <label class="form-check-label font-resumo" for="detalhes-vicio-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="detalhes-vicio" id="detalhes-vicio-nao" value="nao" disabled>
                                            <label class="form-check-label font-resumo" for="detalhes-vicio-nao">Não</label>
                                        </div>
                                    </div>
                                    <div id="info-detalhes-vicio" style="display: none;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mt-3">
                                                    <textarea class="form-control" id="detalhes-vicios" name="detalhes-vicios" rows="2" placeholder="Qual(is)?" readonly></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-detalhes-anamnese" role="tabpanel" aria-labelledby="nav-detalhes-anamnese-tab">
                        <div id="anamneseDetalhesEditor"></div>
                    </div>
                    <div class="tab-pane fade" id="nav-detalhes-diagnostico" role="tabpanel" aria-labelledby="nav-detalhes-diagnostico-tab">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-4">
                                    <input type="text" class="form-control" id="detalhes-primeiro-cid" name="detalhes-primeiro-cid" placeholder="Primeiro CID..." readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-4">
                                    <input type="text" class="form-control" id="detalhes-segundo-cid" name="detalhes-segundo-cid" placeholder="Outro CID... [OPCIONAL]" readonly>
                                </div>
                            </div>
                        </div>
                        <div id="diagnosticoDetalhesEditor"></div>
                    </div>
                    <div class="tab-pane fade" id="nav-detalhes-prescricoes" role="tabpanel" aria-labelledby="nav-detalhes-prescricoes-tab">
                        <div id="prescricoesDetalhesEditor"></div>
                    </div>
                    <div class="tab-pane fade" id="nav-detalhes-exames" role="tabpanel" aria-labelledby="nav-detalhes-exames-tab">
                        <div id="examesDetalhesEditor"></div>
                    </div>
                    <div class="tab-pane fade" id="nav-detalhes-atestados" role="tabpanel" aria-labelledby="nav-detalhes-atestados-tab">
                        <div id="atestadosDetalhesEditor"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-body-tertiary">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>