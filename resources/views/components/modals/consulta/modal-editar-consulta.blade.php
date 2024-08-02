<div class="modal fade modal-lg" data-bs-backdrop="static" data-bs-keyboard="false" id="modalEditarConsulta" tabindex="-1"
    aria-labelledby="modalEditarConsultaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-body-tertiary d-flex flex-column align-items-center pb-0">
                <div class="d-flex justify-content-between w-100 mt-2">
                    <div class="d-flex align-items-center ms-3">
                        <div class="d-flex justify-content-center align-items-center rounded-circle bg-dark-subtle text-white"
                            style="width: 5.5vw; height: 5.5vw;">
                            <div class="fs-3" id="iniciais_edit"></div>
                        </div>
                        <div class="ms-3">
                            <h4 class="mb-0 fw-semibold" id="nome_paciente_edit"></h4>
                            <h5 class="mb-0 text-dark-emphasis" id="convenio_edit"></h5>
                        </div>
                    </div>
                    <div class="text-end mt-4 me-4">
                        <a href="" class="btn btn-light shadow-sm border small" type="button"
                            data-toggle="tooltip" title="Mais Informações do Paciente">
                            <div>Visualizar Prontuário</div>
                        </a>
                    </div>
                </div>
                <nav class="nav nav-tabs w-100 justify-content-center mt-4 border-bottom-0" id="nav-tab"
                    role="tablist">
                    <button class="nav-link active py-2" id="nav-editar-dados-medicos-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-editar-dados-medicos" type="button" role="tab"
                        aria-controls="nav-editar-dados-medicos" aria-selected="true">Dados Médicos</button>
                    <button class="nav-link py-2" id="nav-editar-anamnese-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-editar-anamnese" type="button" role="tab"
                        aria-controls="nav-editar-anamnese" aria-selected="false">Anamnese</button>
                    <button class="nav-link py-2" id="nav-editar-diagnostico-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-editar-diagnostico" type="button" role="tab"
                        aria-controls="nav-editar-diagnostico" aria-selected="false">Diagnóstico</button>
                    <button class="nav-link py-2" id="nav-editar-prescricoes-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-editar-prescricoes" type="button" role="tab"
                        aria-controls="nav-editar-prescricoes" aria-selected="false">Prescrições</button>
                    <button class="nav-link py-2" id="nav-editar-exames-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-editar-exames" type="button" role="tab"
                        aria-controls="nav-editar-exames" aria-selected="false">Exames</button>
                    <button class="nav-link py-2" id="nav-editar-atestados-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-editar-atestados" type="button" role="tab"
                        aria-controls="nav-editar-atestados" aria-selected="false">Atestados</button>
                </nav>
            </div>
            <div class="modal-body m-5 pt-4 mt-2 mb-3">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-editar-dados-medicos" role="tabpanel"
                        aria-labelledby="nav-editar-dados-medicos-tab">
                        <form id="formEditarConsulta" method="POST" action="/edit/consulta/iniciar_consulta">
                            @method('PUT')
                            @csrf
                            <input type="hidden" id="id_consulta_editar" name="id_consulta_inserir">
                            <div>
                                <div class="border border-2 border-primary-subtle rounded p-3">
                                    <div class="pb-2">Peso do paciente</div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <input type="text" class="form-control" id="peso_edit" name="peso"
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
                                                <input type="text" class="form-control" id="altura_edit"
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
                                                type="radio" name="editar-alergia-medicamentos"
                                                id="editar-alergia-sim" value="sim">
                                            <label class="form-check-label font-resumo"
                                                for="editar-alergia-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo"
                                                type="radio" name="editar-alergia-medicamentos"
                                                id="editar-alergia-nao" value="nao">
                                            <label class="form-check-label font-resumo"
                                                for="editar-alergia-nao">Não</label>
                                        </div>
                                    </div>
                                    <div id="info-editar-alergia-medicamentos" style="display: none;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mt-3">
                                                    <textarea class="form-control" id="editar-alergias" name="alergias" rows="2" placeholder="Qual(is)?"></textarea>
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
                                                type="radio" name="editar-cirurgia" id="editar-cirurgia-sim"
                                                value="sim">
                                            <label class="form-check-label font-resumo"
                                                for="editar-cirurgia-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo"
                                                type="radio" name="editar-cirurgia" id="editar-cirurgia-nao"
                                                value="nao">
                                            <label class="form-check-label font-resumo"
                                                for="editar-cirurgia-nao">Não</label>
                                        </div>
                                    </div>
                                    <div id="info-editar-cirurgia" style="display: none;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mt-3">
                                                    <textarea class="form-control" id="editar-cirurgias" name="cirurgias" rows="2" placeholder="Qual(is)?"></textarea>
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
                                                type="radio" name="editar-medicamento-regular"
                                                id="editar-medicamento-sim" value="sim">
                                            <label class="form-check-label font-resumo"
                                                for="editar-medicamento-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo"
                                                type="radio" name="editar-medicamento-regular"
                                                id="editar-medicamento-nao" value="nao">
                                            <label class="form-check-label font-resumo"
                                                for="editar-medicamento-nao">Não</label>
                                        </div>
                                    </div>
                                    <div id="info-editar-medicamento-regular" style="display: none;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mt-3">
                                                    <textarea class="form-control" id="editar-medicamentos" name="medicamentos" rows="2" placeholder="Qual(is)?"></textarea>
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
                                                type="radio" name="editar-condicao-preexistente"
                                                id="editar-condicao-sim" value="sim">
                                            <label class="form-check-label font-resumo"
                                                for="editar-condicao-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo"
                                                type="radio" name="editar-condicao-preexistente"
                                                id="editar-condicao-nao" value="nao">
                                            <label class="form-check-label font-resumo"
                                                for="editar-condicao-nao">Não</label>
                                        </div>
                                    </div>
                                    <div id="info-editar-condicao-preexistente" style="display: none;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mt-3">
                                                    <textarea class="form-control" id="editar-condicoes" name="condicoes" rows="2" placeholder="Qual(is)?"></textarea>
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
                                                type="radio" name="atividade_fisica" id="editar-atividade-sim"
                                                value="sim">
                                            <label class="form-check-label font-resumo"
                                                for="editar-atividade-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo"
                                                type="radio" name="atividade_fisica" id="editar-atividade-nao"
                                                value="nao">
                                            <label class="form-check-label font-resumo"
                                                for="editar-atividade-nao">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3 mt-3">
                                    <div class="pb-2">Tem algum vício (álcool, tabaco, outras substâncias)?</div>
                                    <div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo"
                                                type="radio" name="editar-vicio" id="editar-vicio-sim"
                                                value="sim">
                                            <label class="form-check-label font-resumo"
                                                for="editar-vicio-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo"
                                                type="radio" name="editar-vicio" id="editar-vicio-nao"
                                                value="nao">
                                            <label class="form-check-label font-resumo"
                                                for="editar-vicio-nao">Não</label>
                                        </div>
                                    </div>
                                    <div id="info-editar-vicio" style="display: none;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mt-3">
                                                    <textarea class="form-control" id="editar-vicios" name="vicios" rows="2" placeholder="Qual(is)?"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="tab-pane fade" id="nav-editar-anamnese" role="tabpanel"
                        aria-labelledby="nav-editar-anamnese-tab">
                        <div id="anamneseEditarEditor">
                            <div class="ql-editor"></div>
                        </div>
                        <input type="hidden" id="anamnese_edit" name="anamnese">
                    </div>
                    <div class="tab-pane fade" id="nav-editar-diagnostico" role="tabpanel"
                        aria-labelledby="nav-editar-diagnostico-tab">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-4">
                                    <select id="editar-primeiro-cid" name="primeiro_cid" class="form-select"
                                        required>
                                        <option disabled selected>Selecione o CID...</option>
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
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-4">
                                    <select id="editar-segundo-cid" name="segundo_cid" class="form-select">
                                        <option disabled selected>Selecione o CID...</option>
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
                        <div id="diagnosticoEditarEditor">
                            <div class="ql-editor"></div>
                        </div>
                        <input type="hidden" id="diagnostico_edit" name="diagnostico">
                    </div>
                    <div class="tab-pane fade" id="nav-editar-prescricoes" role="tabpanel"
                        aria-labelledby="nav-editar-prescricoes-tab">
                        <div id="prescricoesEditarEditor">
                            <div class="ql-editor"></div>
                        </div>
                        <input type="hidden" id="prescricoes_edit" name="prescricoes">
                    </div>
                    <div class="tab-pane fade" id="nav-editar-exames" role="tabpanel"
                        aria-labelledby="nav-editar-exames-tab">
                        <div id="examesEditarEditor">
                            <div class="ql-editor"></div>
                        </div>
                        <input type="hidden" id="exames_edit" name="exames">
                    </div>
                    <div class="tab-pane fade" id="nav-editar-atestados" role="tabpanel"
                        aria-labelledby="nav-editar-atestados-tab">
                        <div id="atestadosEditarEditor">
                            <div class="ql-editor"></div>
                        </div>
                        <input type="hidden" id="atestados_edit" name="atestados">
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-body-tertiary">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" id="btnSalvarEdicaoPaciente">Salvar
                    Alterações</button>
            </div>
            </form>
        </div>
    </div>
</div>
