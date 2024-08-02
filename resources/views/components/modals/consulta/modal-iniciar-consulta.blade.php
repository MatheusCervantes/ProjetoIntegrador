<div class="modal fade modal-lg" data-bs-backdrop="static" data-bs-keyboard="false" id="modalIniciarConsulta" tabindex="-1"
    aria-labelledby="modalIniciarConsultaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-body-tertiary d-flex flex-column align-items-center pb-0">
                <div class="d-flex justify-content-between w-100 mt-2">
                    <div class="d-flex align-items-center ms-3">
                        <div class="d-flex justify-content-center align-items-center rounded-circle bg-dark-subtle text-white"
                            style="width: 5.5vw; height: 5.5vw;">
                            <div class="fs-3" id="iniciais">JS</div>
                        </div>
                        <div class="ms-3">
                            <h4 class="mb-0 fw-semibold" id="nome_paciente"></h4>
                            <h5 class="mb-0 text-dark-emphasis" id="convenio"></h5>
                        </div>
                    </div>
                    <div class="text-end mt-4 me-4">
                        <button class="btn btn-light shadow-sm border small" id="btnVisualizarProntuario" type="button"
                            data-toggle="tooltip" title="Mais Informações do Paciente">
                            <div>Visualizar Prontuário</div>
                        </button>
                    </div>
                </div>
                <nav class="nav nav-tabs w-100 justify-content-center mt-4 border-bottom-0" id="nav-tab"
                    role="tablist">
                    <button class="nav-link active py-2" id="nav-dados-medicos-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-dados-medicos" type="button" role="tab"
                        aria-controls="nav-dados-medicos" aria-selected="true">Dados Médicos</button>
                    <button class="nav-link py-2" id="nav-anamnese-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-anamnese" type="button" role="tab" aria-controls="nav-anamnese"
                        aria-selected="false">Anamnese</button>
                    <button class="nav-link py-2" id="nav-diagnostico-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-diagnostico" type="button" role="tab" aria-controls="nav-diagnostico"
                        aria-selected="false">Diagnóstico</button>
                    <button class="nav-link py-2" id="nav-prescricoes-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-prescricoes" type="button" role="tab" aria-controls="nav-prescricoes"
                        aria-selected="false">Prescrições</button>
                    <button class="nav-link py-2" id="nav-exames-tab" data-bs-toggle="tab" data-bs-target="#nav-exames"
                        type="button" role="tab" aria-controls="nav-exames" aria-selected="false">Exames</button>
                    <button class="nav-link py-2" id="nav-atestados-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-atestados" type="button" role="tab" aria-controls="nav-atestados"
                        aria-selected="false">Atestados</button>
                </nav>
            </div>
            <div class="modal-body m-5 pt-4 mt-2 mb-3">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-dados-medicos" role="tabpanel"
                        aria-labelledby="nav-dados-medicos-tab">
                        <form id="formIniciarConsulta" method="POST" action="/insert/consulta/iniciar_consulta">
                            @method('PUT')
                            @csrf
                            <input type="hidden" id="id_consulta_inserir" name="id_consulta_inserir">
                            <div>
                                <div class="border border-2 border-primary-subtle rounded p-3">
                                    <div class="pb-2">Peso do paciente</div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <input type="text" class="form-control" id="peso" name="peso"
                                                    placeholder="Digite aqui...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3 mt-3">
                                    <div class="pb-2">Altura do paciente</div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <input type="text" class="form-control" id="altura"
                                                    name="altura" placeholder="Digite aqui...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3 mt-3">
                                    <div class="pb-2">Tem alergia a medicamentos?</div>
                                    <div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo"
                                                type="radio" name="alergia_medicamentos" id="alergia-sim"
                                                value="sim">
                                            <label class="form-check-label font-resumo" for="alergia-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo"
                                                type="radio" name="alergia_medicamentos" id="alergia-nao"
                                                value="nao">
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
                                            <input class="form-check-input border-primary-subtle font-resumo"
                                                type="radio" name="cirurgia" id="cirurgia-sim" value="sim">
                                            <label class="form-check-label font-resumo" for="cirurgia-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo"
                                                type="radio" name="cirurgia" id="cirurgia-nao" value="nao">
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
                                            <input class="form-check-input border-primary-subtle font-resumo"
                                                type="radio" name="medicamento_regular" id="medicamento-sim"
                                                value="sim">
                                            <label class="form-check-label font-resumo"
                                                for="medicamento-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo"
                                                type="radio" name="medicamento_regular" id="medicamento-nao"
                                                value="nao">
                                            <label class="form-check-label font-resumo"
                                                for="medicamento-nao">Não</label>
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
                                            <input class="form-check-input border-primary-subtle font-resumo"
                                                type="radio" name="condicao_preexistente" id="condicao-sim"
                                                value="sim">
                                            <label class="form-check-label font-resumo" for="condicao-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo"
                                                type="radio" name="condicao_preexistente" id="condicao-nao"
                                                value="nao">
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
                                            <input class="form-check-input border-primary-subtle font-resumo"
                                                type="radio" name="atividade_fisica" id="atividade-sim"
                                                value="sim">
                                            <label class="form-check-label font-resumo"
                                                for="atividade-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo"
                                                type="radio" name="atividade_fisica" id="atividade-nao"
                                                value="nao">
                                            <label class="form-check-label font-resumo"
                                                for="atividade-nao">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3 mt-3">
                                    <div class="pb-2">Tem algum vício (álcool, tabaco, outras substâncias)?</div>
                                    <div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo"
                                                type="radio" name="vicio" id="vicio-sim" value="sim">
                                            <label class="form-check-label font-resumo" for="vicio-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo"
                                                type="radio" name="vicio" id="vicio-nao" value="nao">
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
                    </div>
                    <div class="tab-pane fade" id="nav-anamnese" role="tabpanel" aria-labelledby="nav-anamnese-tab">
                        <div id="anamneseEditor"></div>
                        <input type="hidden" id="anamnese" name="anamnese">
                    </div>
                    <div class="tab-pane fade" id="nav-diagnostico" role="tabpanel"
                        aria-labelledby="nav-diagnostico-tab">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-4">
                                    <select id="primeiro-cid" name="primeiro_cid" class="form-select" required>
                                        <option disabled selected>Selecione o CID...</option>
                                        <option value="A00">A00 - Cólera</option>
                                        <option value="A01">A01 - Febre tifóide e febre paratifóide</option>
                                        <option value="A09">A09 - Diarreia e gastroenterite de origem infecciosa</option>
                                        <option value="J00">J00 - Resfriado comum</option>
                                        <option value="J03">J03 - Amigdalite aguda</option>
                                        <option value="J18">J18 - Pneumonia, não especificada</option>
                                        <option value="I10">I10 - Hipertensão essencial (primária)</option>
                                        <option value="I21">I21 - Infarto agudo do miocárdio</option>
                                        <option value="I50">I50 - Insuficiência cardíaca</option>
                                        <option value="E11">E11 - Diabetes mellitus tipo 2</option>
                                        <option value="E78">E78 - Dislipidemia</option>
                                        <option value="G20">G20 - Doença de Parkinson</option>
                                        <option value="G40">G40 - Epilepsia</option>
                                        <option value="C34">C34 - Neoplasia maligna dos brônquios e pulmões</option>
                                        <option value="C50">C50 - Neoplasia maligna da mama</option>
                                        <option value="M15">M15 - Artrose poliarticular</option>
                                        <option value="M54">M54 - Dor nas costas</option>
                                        <option value="F32">F32 - Episódio depressivo</option>
                                        <option value="F41">F41 - Transtornos de ansiedade</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-4">
                                    <select id="segundo-cid" name="segundo_cid" class="form-select">
                                        <option disabled selected>Selecione outro CID... [OPCIONAL]</option>
                                        <option value="A00">A00 - Cólera</option>
                                        <option value="A01">A01 - Febre tifóide e febre paratifóide</option>
                                        <option value="A09">A09 - Diarreia e gastroenterite de origem infecciosa
                                        </option>
                                        <option value="J00">J00 - Resfriado comum</option>
                                        <option value="J03">J03 - Amigdalite aguda</option>
                                        <option value="J18">J18 - Pneumonia, não especificada</option>
                                        <option value="I10">I10 - Hipertensão essencial (primária)</option>
                                        <option value="I21">I21 - Infarto agudo do miocárdio</option>
                                        <option value="I50">I50 - Insuficiência cardíaca</option>
                                        <option value="E11">E11 - Diabetes mellitus tipo 2</option>
                                        <option value="E78">E78 - Dislipidemia</option>
                                        <option value="G20">G20 - Doença de Parkinson</option>
                                        <option value="G40">G40 - Epilepsia</option>
                                        <option value="C34">C34 - Neoplasia maligna dos brônquios e pulmões</option>
                                        <option value="C50">C50 - Neoplasia maligna da mama</option>
                                        <option value="M15">M15 - Artrose poliarticular</option>
                                        <option value="M54">M54 - Dor nas costas</option>
                                        <option value="F32">F32 - Episódio depressivo</option>
                                        <option value="F41">F41 - Transtornos de ansiedade</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="diagnosticoEditor"></div>
                        <input type="hidden" id="diagnostico" name="diagnostico">
                    </div>
                    <div class="tab-pane fade" id="nav-prescricoes" role="tabpanel"
                        aria-labelledby="nav-prescricoes-tab">
                        <div id="prescricoesEditor"></div>
                        <input type="hidden" id="prescricoes" name="prescricoes">
                    </div>
                    <div class="tab-pane fade" id="nav-exames" role="tabpanel" aria-labelledby="nav-exames-tab">
                        <div id="examesEditor"></div>
                        <input type="hidden" id="exames" name="exames">
                    </div>
                    <div class="tab-pane fade" id="nav-atestados" role="tabpanel"
                        aria-labelledby="nav-atestados-tab">
                        <div id="atestadosEditor"></div>
                        <input type="hidden" id="atestados" name="atestados">
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-body-tertiary">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" id="btnSalvarIniciarConsulta">Salvar</button>
            </div>
            </form>
        </div>
    </div>
</div>
