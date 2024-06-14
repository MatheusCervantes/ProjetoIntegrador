<div class="modal fade modal-lg" id="modalNovoMedico" tabindex="-1" aria-labelledby="modalNovoMedicoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-body-tertiary">
                <div class="d-flex justify-content-center align-items-center flex-grow-1">
                    <h4 class="modal-title fw-bold text-primary ms-4" id="modalNovoMedicoLabel">Novo Médico</h4>
                </div>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body m-auto py-4">
                <form id="formNovoMedico">
                    <div>
                        <h5 class="mb-4 fw-semibold">Informações Pessoais</h5>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome Completo</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="sexo" class="form-label">Sexo</label>
                                <select id="sexo" class="form-select" required>
                                    <option disabled selected>Selecione...</option>
                                    <option value="feminino">Feminino</option>
                                    <option value="masculino">Masculino</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="cpf" class="form-label">CPF</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="rg" class="form-label">RG</label>
                                <input type="text" class="form-control" id="rg" name="rg" required>
                            </div>
                        </div>
                        <div class="col">
                            <label for="data-nasc" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" id="data-nasc" name="data-nasc" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="tel" class="form-label">Telefone</label>
                                <input type="tel" class="form-control" id="tel" name="tel" required>
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
                                <input type="text" class="form-control" id="rua" name="rua" required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="mb-3">
                                <label for="num" class="form-label">Número</label>
                                <input type="number" class="form-control" id="num" name="num" required>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="complemento" class="form-label">Complemento</label>
                                <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Opcional">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="cidade" class="form-label">Cidade</label>
                                <input type="text" class="form-control" id="cidade" name="cidade" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="estado" class="form-label">Estado</label>
                                <select id="estado" class="form-select" required>
                                    <option disabled selected>Selecione...</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="cep" class="form-label">CEP</label>
                                <input type="text" class="form-control" id="cep" name="cep" required>
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
                                <input type="text" class="form-control" id="crm" name="crm" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="especialidade-princ" class="form-label">Especialidade Principal</label>
                                <input type="text" class="form-control" id="especialidade-princ" name="especialidade-princ" required>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="mb-3">
                                <label for="especialidade-secund" class="form-label">Especialidade Secundária</label>
                                <input type="text" class="form-control" id="especialidade-secund" name="especialidade-secund" placeholder="Opcional">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="atuacao-princ" class="form-label">Área de Atuação Principal</label>
                                <input type="text" class="form-control" id="atuacao-princ" name="atuacao-princ" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="atuacao-secund" class="form-label">Área de Atuação Secundária</label>
                                <input type="text" class="form-control" id="atuacao-secund" name="atuacao-secund" placeholder="Opcional">
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
                                    <input class="form-check-input" type="checkbox" id="segunda" name="dias-semana" value="segunda">
                                    <label class="form-check-label" for="segunda">Segunda-feira</label>
                                    <div id="segunda-periodos" style="display: none;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="segunda-manha" name="periodos-dia" value="segunda-manha">
                                            <label class="form-check-label" for="segunda-manha">Manhã</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="segunda-tarde" name="periodos-dia" value="segunda-tarde">
                                            <label class="form-check-label" for="segunda-tarde">Tarde</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="segunda-noite" name="periodos-dia" value="segunda-noite">
                                            <label class="form-check-label" for="segunda-noite">Noite</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terca" name="dias-semana" value="terca">
                                    <label class="form-check-label" for="terca">Terça-feira</label>
                                    <div id="terca-periodos" style="display: none;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="terca-manha" name="periodos-dia" value="terca-manha">
                                            <label class="form-check-label" for="terca-manha">Manhã</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="terca-tarde" name="periodos-dia" value="terca-tarde">
                                            <label class="form-check-label" for="terca-tarde">Tarde</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="terca-noite" name="periodos-dia" value="terca-noite">
                                            <label class="form-check-label" for="terca-noite">Noite</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="quarta" name="dias-semana" value="quarta">
                                    <label class="form-check-label" for="quarta">Quarta-feira</label>
                                    <div id="quarta-periodos" style="display: none;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="quarta-manha" name="periodos-dia" value="quarta-manha">
                                            <label class="form-check-label" for="quarta-manha">Manhã</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="quarta-tarde" name="periodos-dia" value="quarta-tarde">
                                            <label class="form-check-label" for="quarta-tarde">Tarde</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="quarta-noite" name="periodos-dia" value="quarta-noite">
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
                                    <input class="form-check-input" type="checkbox" id="quinta" name="dias-semana" value="quinta">
                                    <label class="form-check-label" for="quinta">Quinta-feira</label>
                                    <div id="quinta-periodos" style="display: none;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="quinta-manha" name="periodos-dia" value="quinta-manha">
                                            <label class="form-check-label" for="quinta-manha">Manhã</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="quinta-tarde" name="periodos-dia" value="quinta-tarde">
                                            <label class="form-check-label" for="quinta-tarde">Tarde</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="quinta-noite" name="periodos-dia" value="quinta-noite">
                                            <label class="form-check-label" for="quinta-noite">Noite</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="sexta" name="dias-semana" value="sexta">
                                    <label class="form-check-label" for="sexta">Sexta-feira</label>
                                    <div id="sexta-periodos" style="display: none;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="sexta-manha" name="periodos-dia" value="sexta-manha">
                                            <label class="form-check-label" for="sexta-manha">Manhã</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="sexta-tarde" name="periodos-dia" value="sexta-tarde">
                                            <label class="form-check-label" for="sexta-tarde">Tarde</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="sexta-noite" name="periodos-dia" value="sexta-noite">
                                            <label class="form-check-label" for="sexta-noite">Noite</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="sabado" name="dias-semana" value="sabado">
                                    <label class="form-check-label" for="sabado">Sábado</label>
                                    <div id="sabado-periodos" style="display: none;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="sabado-manha" name="periodos-dia" value="sabado-manha">
                                            <label class="form-check-label" for="sabado-manha">Manhã</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="sabado-tarde" name="periodos-dia" value="sabado-tarde">
                                            <label class="form-check-label" for="sabado-tarde">Tarde</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="sabado-noite" name="periodos-dia" value="sabado-noite">
                                            <label class="form-check-label" for="sabado-noite">Noite</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="domingo" name="dias-semana" value="domingo">
                                    <label class="form-check-label" for="domingo">Domingo</label>
                                    <div id="domingo-periodos" style="display: none;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="domingo-manha" name="periodos-dia" value="domingo-manha">
                                            <label class="form-check-label" for="domingo-manha">Manhã</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="domingo-tarde" name="periodos-dia" value="domingo-tarde">
                                            <label class="form-check-label" for="domingo-tarde">Tarde</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="domingo-noite" name="periodos-dia" value="domingo-noite">
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
                                    <input class="form-check-input" type="radio" id="cinco-min" name="duracao-consulta" value="5" required>
                                    <label class="form-check-label" for="cinco-min">5min</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="dez-min" name="duracao-consulta" value="10">
                                    <label class="form-check-label" for="dez-min">10min</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="quinze-min" name="duracao-consulta" value="15">
                                    <label class="form-check-label" for="quinze-min">15min</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="vinte-min" name="duracao-consulta" value="20">
                                    <label class="form-check-label" for="vinte-min">20min</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="vinte-cinco-min" name="duracao-consulta" value="25">
                                    <label class="form-check-label" for="vinte-cinco-min">25min</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="trinta-min" name="duracao-consulta" value="30">
                                    <label class="form-check-label" for="trinta-min">30min</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="trinta-cinco-min" name="duracao-consulta" value="35">
                                    <label class="form-check-label" for="trinta-cinco-min">35min</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="quarenta-min" name="duracao-consulta" value="40">
                                    <label class="form-check-label" for="quarenta-min">40min</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="quarenta-cinco-min" name="duracao-consulta" value="45">
                                    <label class="form-check-label" for="quarenta-cinco-min">45min</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="cinquenta-min" name="duracao-consulta" value="50">
                                    <label class="form-check-label" for="cinquenta-min">50min</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="cinquenta-cinco-min" name="duracao-consulta" value="55">
                                    <label class="form-check-label" for="cinquenta-cinto-min">55min</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="sessenta-min" name="duracao-consulta" value="60">
                                    <label class="form-check-label" for="sessenta-min">60min</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mt-3 mb-3">
                                <label for="planos-aceitos" class="form-label">Plano(s) de Saúde Aceito(s)</label>
                                <input type="text" class="form-control" id="planos-aceitos" name="planos-aceitos" placeholder="Opcional">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div>
                        <h5 class="mb-4 fw-semibold">Informações de Acesso</h5>
                    </div>
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="mb-3">
                                <label for="username" class="form-label">Nome de Usuário</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="senha" name="senha" required>
                                    <button class="btn btn-outline-light text-dark border-secondary-subtle" type="button" id="mostrarSenha">
                                        <ion-icon name="eye-outline" class="pt-1"></ion-icon>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="my-3">
                                <button type="button" class="btn btn-sm btn-outline-light mt-3 text-dark border-dark">Gerar Senha Automática</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer bg-body-tertiary">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" form="formNovoMedico">Salvar</button>
            </div>
        </div>
    </div>
</div>