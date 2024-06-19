<div class="modal fade modal-lg" id="modalEditarPaciente" tabindex="-1" aria-labelledby="modalEditarPacienteLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-body-tertiary">
                <div class="d-flex justify-content-center align-items-center flex-grow-1">
                    <h4 class="modal-title fw-bold text-primary ms-4" id="modalEditarPacienteLabel">Editar Paciente</h4>
                </div>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body m-auto py-4">
                <form id="formEditarPaciente">
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
                        <h5 class="mb-4 fw-semibold">Histórico Médico</h5>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="doencas-ant" class="form-label">Doenças Anteriores</label>
                                <textarea class="form-control" id="doencas-ant" name="doencas-ant" rows="2"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="doencas-hered" class="form-label">Doenças/Condições Hereditárias</label>
                                <textarea class="form-control" id="doencas-hered" name="doencas-hered" rows="2"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="cirurgias" class="form-label">Histórico de Cirurgias</label>
                                <textarea class="form-control" id="cirurgias" name="cirurgias" rows="2"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-4">
                                <label for="alergias" class="form-label">Alergias</label>
                                <textarea class="form-control" id="alergias" name="alergias" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-4">
                                <label for="uso-medicamentos" class="form-label">Histórico de Uso de Medicamentos</label>
                                <textarea class="form-control" id="uso-medicamentos" name="uso-medicamentos" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Estilo de Vida</label>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="sedentarismo" name="estilo-vida" value="sedentarismo">
                                            <label class="form-check-label" for="sedentarismo">Sedentarismo</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="tabagismo" name="estilo-vida" value="tabagismo">
                                            <label class="form-check-label" for="tabagismo">Tabagismo</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="alcool" name="estilo-vida" value="alcool">
                                            <label class="form-check-label" for="alcool">Consumo de álcool</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="estresse" name="estilo-vida" value="estresse">
                                            <label class="form-check-label" for="estresse">Estresse crônico</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="sono" name="estilo-vida" value="sono">
                                            <label class="form-check-label" for="sono">Problemas de sono</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="acompanhamento" name="estilo-vida" value="acompanhamento">
                                            <label class="form-check-label" for="acompanhamento">Falta de acompanhamento médico regular</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div>
                        <h5 class="mb-4 fw-semibold">Plano de Saúde</h5>
                    </div>
                    <div class="mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="plano-saude" id="plano-sim-editar" value="sim">
                            <label class="form-check-label" for="plano-sim-editar">Sim</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="plano-saude" id="plano-nao-editar" value="nao">
                            <label class="form-check-label" for="plano-nao-editar">Não</label>
                        </div>
                    </div>
                    <div id="info-plano-saude-editar" style="display: none;">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="nome-plano" class="form-label">Nome do Plano de Saúde</label>
                                    <input type="text" class="form-control" id="nome-plano" name="nome-plano">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="numero-cartao" class="form-label">Número do Cartão do Plano</label>
                                    <input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer bg-body-tertiary">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="btnSalvarEdicaoPaciente">Salvar Alterações</button>
            </div>
        </div>
    </div>
</div>