<div class="modal fade modal-lg" id="modalDetalhesMedico" tabindex="-1" aria-labelledby="modalDetalhesMedicoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-body-tertiary">
                <div class="d-flex justify-content-center align-items-center flex-grow-1">
                    <h4 class="modal-title fw-bold text-primary ms-4" id="modalDetalhesMedicoLabel">Detalhes do Médico</h4>
                </div>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body m-auto py-4">
                <form id="formDetalhesMedico">
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
                        <h5 class="mb-4 fw-semibold">Informações Profissionais</h5>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="crm" class="form-label">CRM</label>
                                <input type="text" class="form-control" id="crm" name="crm" readonly>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="especialidade-princ" class="form-label">Especialidade Principal</label>
                                <input type="text" class="form-control" id="especialidade-princ" name="especialidade-princ" readonly>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="mb-3">
                                <label for="especialidade-secund" class="form-label">Especialidade Secundária</label>
                                <input type="text" class="form-control" id="especialidade-secund" name="especialidade-secund" placeholder="Opcional" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="atuacao-princ" class="form-label">Área de Atuação Principal</label>
                                <input type="text" class="form-control" id="atuacao-princ" name="atuacao-princ" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="atuacao-secund" class="form-label">Área de Atuação Secundária</label>
                                <input type="text" class="form-control" id="atuacao-secund" name="atuacao-secund" placeholder="Opcional" readonly>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div>
                        <h5 class="mb-4 fw-semibold">Informações de Atendimento</h5>
                    </div>
                    <div class="row">
                        <label class="form-label">Dias da Semana e Períodos do Dia</label>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="segunda" name="dias-semana" value="segunda" disabled>
                                    <label class="form-check-label" for="segunda">Segunda-feira</label>
                                    <div id="segunda-periodos" style="display: none;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="segunda-manha" name="periodos-dia" value="segunda-manha" disabled>
                                            <label class="form-check-label" for="segunda-manha">Manhã</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="segunda-tarde" name="periodos-dia" value="segunda-tarde" disabled>
                                            <label class="form-check-label" for="segunda-tarde">Tarde</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="segunda-noite" name="periodos-dia" value="segunda-noite" disabled>
                                            <label class="form-check-label" for="segunda-noite">Noite</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terca" name="dias-semana" value="terca" disabled>
                                    <label class="form-check-label" for="terca">Terça-feira</label>
                                    <div id="terca-periodos" style="display: none;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="terca-manha" name="periodos-dia" value="terca-manha" disabled>
                                            <label class="form-check-label" for="terca-manha">Manhã</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="terca-tarde" name="periodos-dia" value="terca-tarde" disabled>
                                            <label class="form-check-label" for="terca-tarde">Tarde</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="terca-noite" name="periodos-dia" value="terca-noite" disabled>
                                            <label class="form-check-label" for="terca-noite">Noite</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="quarta" name="dias-semana" value="quarta" disabled>
                                    <label class="form-check-label" for="quarta">Quarta-feira</label>
                                    <div id="quarta-periodos" style="display: none;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="quarta-manha" name="periodos-dia" value="quarta-manha" disabled>
                                            <label class="form-check-label" for="quarta-manha">Manhã</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="quarta-tarde" name="periodos-dia" value="quarta-tarde" disabled>
                                            <label class="form-check-label" for="quarta-tarde">Tarde</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="quarta-noite" name="periodos-dia" value="quarta-noite" disabled>
                                            <label class="form-check-label" for="quarta-noite">Noite</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="quinta" name="dias-semana" value="quinta" disabled>
                                    <label class="form-check-label" for="quinta">Quinta-feira</label>
                                    <div id="quinta-periodos" style="display: none;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="quinta-manha" name="periodos-dia" value="quinta-manha" disabled>
                                            <label class="form-check-label" for="quinta-manha">Manhã</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="quinta-tarde" name="periodos-dia" value="quinta-tarde" disabled>
                                            <label class="form-check-label" for="quinta-tarde">Tarde</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="quinta-noite" name="periodos-dia" value="quinta-noite" disabled>
                                            <label class="form-check-label" for="quinta-noite">Noite</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="sexta" name="dias-semana" value="sexta" disabled>
                                    <label class="form-check-label" for="sexta">Sexta-feira</label>
                                    <div id="sexta-periodos" style="display: none;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="sexta-manha" name="periodos-dia" value="sexta-manha" disabled>
                                            <label class="form-check-label" for="sexta-manha">Manhã</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="sexta-tarde" name="periodos-dia" value="sexta-tarde" disabled>
                                            <label class="form-check-label" for="sexta-tarde">Tarde</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="sexta-noite" name="periodos-dia" value="sexta-noite" disabled>
                                            <label class="form-check-label" for="sexta-noite">Noite</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="sabado" name="dias-semana" value="sabado" disabled>
                                    <label class="form-check-label" for="sabado">Sábado</label>
                                    <div id="sabado-periodos" style="display: none;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="sabado-manha" name="periodos-dia" value="sabado-manha" disabled>
                                            <label class="form-check-label" for="sabado-manha">Manhã</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="sabado-tarde" name="periodos-dia" value="sabado-tarde" disabled>
                                            <label class="form-check-label" for="sabado-tarde">Tarde</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="sabado-noite" name="periodos-dia" value="sabado-noite" disabled>
                                            <label class="form-check-label" for="sabado-noite">Noite</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="domingo" name="dias-semana" value="domingo" disabled>
                                    <label class="form-check-label" for="domingo">Domingo</label>
                                    <div id="domingo-periodos" style="display: none;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="domingo-manha" name="periodos-dia" value="domingo-manha" disabled>
                                            <label class="form-check-label" for="domingo-manha">Manhã</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="domingo-tarde" name="periodos-dia" value="domingo-tarde" disabled>
                                            <label class="form-check-label" for="domingo-tarde">Tarde</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="domingo-noite" name="periodos-dia" value="domingo-noite" disabled>
                                            <label class="form-check-label" for="domingo-noite">Noite</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="form-label mt-3">Duração Média da Consulta</label>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="cinco-min" name="duracao-consulta" value="5" disabled>
                                    <label class="form-check-label" for="cinco-min">5min</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="dez-min" name="duracao-consulta" value="10" disabled>
                                    <label class="form-check-label" for="dez-min">10min</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="quinze-min" name="duracao-consulta" value="15" disabled>
                                    <label class="form-check-label" for="quinze-min">15min</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="vinte-min" name="duracao-consulta" value="20" disabled>
                                    <label class="form-check-label" for="vinte-min">20min</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="vinte-cinco-min" name="duracao-consulta" value="25" disabled>
                                    <label class="form-check-label" for="vinte-cinco-min">25min</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="trinta-min" name="duracao-consulta" value="30" disabled>
                                    <label class="form-check-label" for="trinta-min">30min</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="trinta-cinco-min" name="duracao-consulta" value="35" disabled>
                                    <label class="form-check-label" for="trinta-cinco-min">35min</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="quarenta-min" name="duracao-consulta" value="40" disabled>
                                    <label class="form-check-label" for="quarenta-min">40min</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="quarenta-cinco-min" name="duracao-consulta" value="45" disabled>
                                    <label class="form-check-label" for="quarenta-cinco-min">45min</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="cinquenta-min" name="duracao-consulta" value="50" disabled>
                                    <label class="form-check-label" for="cinquenta-min">50min</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="cinquenta-cinco-min" name="duracao-consulta" value="55" disabled>
                                    <label class="form-check-label" for="cinquenta-cinto-min">55min</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="sessenta-min" name="duracao-consulta" value="60" disabled>
                                    <label class="form-check-label" for="sessenta-min">60min</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mt-3 mb-3">
                                <label for="planos-aceitos" class="form-label">Plano(s) de Saúde Aceito(s)</label>
                                <input type="text" class="form-control" id="planos-aceitos" name="planos-aceitos" placeholder="Opcional" readonly>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div>
                        <h5 class="mb-4 fw-semibold">Informações de Acesso</h5>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-5">
                            <div class="mb-3">
                                <label for="username" class="form-label">Nome de Usuário</label>
                                <input type="text" class="form-control" id="username" name="username" readonly>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer bg-body-tertiary">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>