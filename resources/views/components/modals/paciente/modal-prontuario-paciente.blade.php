<div class="modal fade modal-lg" data-bs-backdrop="static" data-bs-keyboard="false" id="modalProntuarioPaciente" tabindex="-1" aria-labelledby="modalProntuarioPacienteLabel" aria-hidden="true">
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
                            <h5 class="mb-0 text-dark-emphasis">29 anos</h5>
                        </div>
                    </div>
                    <div class="text-end text-dark-emphasis mt-4 me-4">
                        <div>Primeira consulta: 09/08/2023</div>
                        <div>Atendimentos: 3</div>
                        <div>Plano de Saúde: --</div>
                    </div>
                </div>
                <nav class="nav nav-tabs w-100 justify-content-center mt-4 border-bottom-0" id="nav-tab" role="tablist">
                    <button class="nav-link active py-2" id="nav-identificacao-tab" data-bs-toggle="tab" data-bs-target="#nav-identificacao" type="button" role="tab" aria-controls="nav-identificacao" aria-selected="true">Identificação</button>
                    <button class="nav-link py-2" id="nav-dados-medicos-tab" data-bs-toggle="tab" data-bs-target="#nav-dados-medicos" type="button" role="tab" aria-controls="nav-dados-medicos" aria-selected="false">Dados Médicos</button>
                    <button class="nav-link py-2" id="nav-consultas-tab" data-bs-toggle="tab" data-bs-target="#nav-consultas" type="button" role="tab" aria-controls="nav-consultas" aria-selected="false">Consultas</button>
                </nav>
            </div>
            <div class="modal-body m-auto pt-4 mt-2 pb-3">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-identificacao" role="tabpanel" aria-labelledby="nav-identificacao-tab">
                        <form>
                            <div>
                                <h5 class="mb-4 fw-semibold">Informações Pessoais</h5>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div class="mb-3">
                                        <label for="nome" class="form-label">Nome Completo</label>
                                        <input type="text" class="form-control" id="nome" name="nome" readonly>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="sexo" class="form-label">Sexo</label>
                                        <input type="text" class="form-control" id="sexo" name="sexo" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="cpf" class="form-label">CPF</label>
                                        <input type="text" class="form-control" id="cpf" name="cpf" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="rg" class="form-label">RG</label>
                                        <input type="text" class="form-control" id="rg" name="rg" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="data-nasc" class="form-label">Data de Nascimento</label>
                                    <input type="text" class="form-control" id="data-nasc" name="data-nasc" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input type="email" class="form-control" id="email" name="email" readonly>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="tel" class="form-label">Telefone</label>
                                        <input type="tel" class="form-control" id="tel" name="tel" readonly>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div>
                                <h5 class="mb-4 fw-semibold">Endereço Residencial</h5>
                            </div>
                            <div class="row">
                                <div class="col-7">
                                    <div class="mb-3">
                                        <label for="rua" class="form-label">Rua</label>
                                        <input type="text" class="form-control" id="rua" name="rua" readonly>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3">
                                        <label for="num" class="form-label">Número</label>
                                        <input type="number" class="form-control" id="num" name="num" readonly>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="complemento" class="form-label">Complemento</label>
                                        <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Opcional" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="cidade" class="form-label">Cidade</label>
                                        <input type="text" class="form-control" id="cidade" name="cidade" readonly>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="estado" class="form-label">Estado</label>
                                        <input type="text" class="form-control" id="estado" name="estado" readonly>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="cep" class="form-label">CEP</label>
                                        <input type="text" class="form-control" id="cep" name="cep" readonly>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div>
                                <h5 class="mb-4 fw-semibold">Plano de Saúde</h5>
                            </div>
                            <div class="mb-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="plano-saude" id="plano-sim-detalhes" value="sim" disabled>
                                    <label class="form-check-label" for="plano-sim-detalhes">Sim</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="plano-saude" id="plano-nao-detalhes" value="nao" disabled>
                                    <label class="form-check-label" for="plano-nao-detalhes">Não</label>
                                </div>
                            </div>
                            <div id="info-plano-saude-detalhes" style="display: none;">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="nome-plano" class="form-label">Nome do Plano de Saúde</label>
                                            <input type="text" class="form-control" id="detalhe-nome-plano" name="nome-plano" readonly>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="numero-cartao" class="form-label">Número do Cartão do Plano</label>
                                            <input type="text" class="form-control" id="detalhe-numero-cartao" name="numero-cartao" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-dados-medicos" role="tabpanel" aria-labelledby="nav-dados-medicos-tab">
                        <form>
                            <div class="row mx-5">
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
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="prontuario-alergia-medicamentos" id="prontuario-alergia-sim" value="sim" disabled>
                                            <label class="form-check-label font-resumo" for="prontuario-alergia-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="prontuario-alergia-medicamentos" id="prontuario-alergia-nao" value="nao" disabled>
                                            <label class="form-check-label font-resumo" for="prontuario-alergia-nao">Não</label>
                                        </div>
                                    </div>
                                    <div id="info-prontuario-alergia-medicamentos" style="display: none;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mt-3">
                                                    <textarea class="form-control" id="prontuario-alergias" name="prontuario-alergias" rows="2" placeholder="Qual(is)?" readonly></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3 mt-3">
                                    <div class="pb-2">Já fez cirurgia?</div>
                                    <div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="prontuario-cirurgia" id="prontuario-cirurgia-sim" value="sim" disabled>
                                            <label class="form-check-label font-resumo" for="prontuario-cirurgia-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="prontuario-cirurgia" id="prontuario-cirurgia-nao" value="nao" disabled>
                                            <label class="form-check-label font-resumo" for="prontuario-cirurgia-nao">Não</label>
                                        </div>
                                    </div>
                                    <div id="info-prontuario-cirurgia" style="display: none;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mt-3">
                                                    <textarea class="form-control" id="prontuario-cirurgias" name="prontuario-cirurgias" rows="2" placeholder="Qual(is)?" readonly></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3 mt-3">
                                    <div class="pb-2">Toma algum medicamento regularmente?</div>
                                    <div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="prontuario-medicamento-regular" id="prontuario-medicamento-sim" value="sim" disabled>
                                            <label class="form-check-label font-resumo" for="prontuario-medicamento-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="prontuario-medicamento-regular" id="prontuario-medicamento-nao" value="nao" disabled>
                                            <label class="form-check-label font-resumo" for="prontuario-medicamento-nao">Não</label>
                                        </div>
                                    </div>
                                    <div id="info-prontuario-medicamento-regular" style="display: none;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mt-3">
                                                    <textarea class="form-control" id="prontuario-medicamentos" name="prontuario-medicamentos" rows="2" placeholder="Qual(is)?" readonly></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3 mt-3">
                                    <div class="pb-2">Tem alguma condição de saúde preexistente?</div>
                                    <div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="prontuario-condicao-preexistente" id="prontuario-condicao-sim" value="sim" disabled>
                                            <label class="form-check-label font-resumo" for="prontuario-condicao-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="prontuario-condicao-preexistente" id="prontuario-condicao-nao" value="nao" disabled>
                                            <label class="form-check-label font-resumo" for="prontuario-condicao-nao">Não</label>
                                        </div>
                                    </div>
                                    <div id="info-prontuario-condicao-preexistente" style="display: none;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mt-3">
                                                    <textarea class="form-control" id="prontuario-condicoes" name="prontuario-condicoes" rows="2" placeholder="Qual(is)?" readonly></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3 mt-3">
                                    <div class="pb-2">Pratica atividade física regularmente?</div>
                                    <div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="prontuario-atividade-fisica" id="prontuario-atividade-sim" value="sim" disabled>
                                            <label class="form-check-label font-resumo" for="prontuario-atividade-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="prontuario-atividade-fisica" id="prontuario-atividade-nao" value="nao" disabled>
                                            <label class="form-check-label font-resumo" for="prontuario-atividade-nao">Não</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="border border-2 border-primary-subtle rounded p-3 mt-3 mb-3">
                                    <div class="pb-2">Tem algum vício (álcool, tabaco, outras substâncias)?</div>
                                    <div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="prontuario-vicio" id="prontuario-vicio-sim" value="sim" disabled>
                                            <label class="form-check-label font-resumo" for="prontuario-vicio-sim">Sim</label>
                                        </div>
                                        <div class="form-check form-check-inline align-middle">
                                            <input class="form-check-input border-primary-subtle font-resumo" type="radio" name="prontuario-vicio" id="prontuario-vicio-nao" value="nao" disabled>
                                            <label class="form-check-label font-resumo" for="prontuario-vicio-nao">Não</label>
                                        </div>
                                    </div>
                                    <div id="info-prontuario-vicio" style="display: none;">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mt-3">
                                                    <textarea class="form-control" id="prontuario-vicios" name="prontuario-vicios" rows="2" placeholder="Qual(is)?" readonly></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-consultas" role="tabpanel" aria-labelledby="nav-consultas-tab">
                        <div class="row" id="accordion-consultas">
                            <div class="col-9 mx-auto">
                                <div class="card mb-2">
                                    <div class="card-header d-flex justify-content-between align-items-center" id="headingOne">
                                        <div>
                                            09/08/2023
                                        </div>
                                        <div>
                                            Médico: Luzia Campos
                                        </div>
                                        <div>
                                            <a href="{{ route('consultas') }}" class="btn btn-light shadow-sm border small me-3" type="button" data-toggle="tooltip" title="Abrir Consulta">
                                                <span class="material-symbols-outlined align-middle fs-4">tab_move</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordion-consultas">
                                        <div class="card-body">
                                            <p><strong>Médico:</strong> Luzia Campos</p>
                                            <p><strong>Data:</strong> 09/08/2023</p>
                                            <p><strong>Observações:</strong> O paciente apresentou sintomas de gripe.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-9 mx-auto">
                                <div class="card mb-2">
                                    <div class="card-header d-flex justify-content-between align-items-center" id="headingTwo">
                                        <div>
                                            22/08/2023
                                        </div>
                                        <div>
                                            Médico: Luzia Campos
                                        </div>
                                        <div>
                                            <a href="{{ route('consultas') }}" class="btn btn-light shadow-sm border small me-3" type="button" data-toggle="tooltip" title="Abrir Consulta">
                                                <span class="material-symbols-outlined align-middle fs-4">tab_move</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-9 mx-auto">
                                <div class="card mb-3">
                                    <div class="card-header d-flex justify-content-between align-items-center" id="headingThree">
                                        <div>
                                            05/09/2023
                                        </div>
                                        <div>
                                            Médico: Luzia Campos
                                        </div>
                                        <div>
                                            <a href="{{ route('consultas') }}" class="btn btn-light shadow-sm border small me-3" type="button" data-toggle="tooltip" title="Abrir Consulta">
                                                <span class="material-symbols-outlined align-middle fs-4">tab_move</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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