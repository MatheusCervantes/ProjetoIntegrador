<div class="modal fade modal-lg" data-bs-backdrop="static" data-bs-keyboard="false" id="modalEditarPaciente" tabindex="-1" aria-labelledby="modalEditarPacienteLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-body-tertiary">
                <div class="d-flex justify-content-center align-items-center flex-grow-1">
                    <h4 class="modal-title fw-bold text-primary ms-4" id="modalEditarPacienteLabel">Editar Paciente</h4>
                </div>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                    aria-label="Fechar"></button>
            </div>
            <div class="modal-body m-auto py-4">
                <form id="formEditarPaciente" data-action="/painel-adm/gestao-paciente/edit/" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <h5 class="mb-4 fw-semibold">Informações Pessoais</h5>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome Completo</label>
                                <input type="text" class="form-control" id="nome_paciente_edit" name="nome"
                                    required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="sexo" class="form-label">Sexo</label>
                                <select id="sexo_paciente_edit" class="form-select" name="sexo" required>
                                    <option disabled selected>Selecione...</option>
                                    <option value="Feminino">Feminino</option>
                                    <option value="Masculino">Masculino</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="cpf" class="form-label">CPF</label>
                                <input type="text" class="form-control cpf" id="cpf_paciente_edit" name="cpf"
                                    required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="rg" class="form-label">RG</label>
                                <input type="text" class="form-control rg" id="rg_paciente_edit" name="rg"
                                    required>
                            </div>
                        </div>
                        <div class="col">
                            <label for="data-nasc" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" id="data-nasc_paciente_edit" name="data_nasc"
                                required max="<?php echo date('Y-m-d'); ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email_paciente_edit" name="email"
                                    required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="tel" class="form-label">Telefone</label>
                                <input type="tel" class="form-control tel" id="tel_paciente_edit" name="tel"
                                    required>
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
                                <input type="text" class="form-control" id="rua_paciente_edit" name="rua"
                                    required>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="mb-3">
                                <label for="num" class="form-label">Número</label>
                                <input type="number" class="form-control" id="num_paciente_edit" name="num"
                                    required min="1">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="complemento" class="form-label">Complemento</label>
                                <input type="text" class="form-control" id="complemento_paciente_edit"
                                    name="complemento" placeholder="Opcional">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="cidade" class="form-label">Cidade</label>
                                <input type="text" class="form-control" id="cidade_paciente_edit" name="cidade"
                                    required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="estado" class="form-label">Estado</label>
                                <select id="estado_paciente_edit" class="form-select" name="estado" required>
                                    <option disabled selected>Selecione...</option>
                                    <option value="Acre">Acre</option>
                                    <option value="Alagoas">Alagoas</option>
                                    <option value="Amapá">Amapá</option>
                                    <option value="Amazonas">Amazonas</option>
                                    <option value="Bahia">Bahia</option>
                                    <option value="Ceará">Ceará</option>
                                    <option value="Distrito Federal">Distrito Federal</option>
                                    <option value="Espírito Santo">Espírito Santo</option>
                                    <option value="Goiás">Goiás</option>
                                    <option value="Maranhão">Maranhão</option>
                                    <option value="Mato Grosso">Mato Grosso</option>
                                    <option value="Mato Grosso do Su">Mato Grosso do Sul</option>
                                    <option value="Minas Gerais">Minas Gerais</option>
                                    <option value="Pará">Pará</option>
                                    <option value="Paraíba">Paraíba</option>
                                    <option value="Paraná">Paraná</option>
                                    <option value="Pernambuco">Pernambuco</option>
                                    <option value="Piauí">Piauí</option>
                                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                                    <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                                    <option value="Rondônia">Rondônia</option>
                                    <option value="Roraima">Roraima</option>
                                    <option value="Santa Catarina">Santa Catarina</option>
                                    <option value="São Paulo">São Paulo</option>
                                    <option value="Sergipe">Sergipe</option>
                                    <option value="Tocantins">Tocantins</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="cep" class="form-label">CEP</label>
                                <input type="text" class="form-control cep" id="cep_paciente_edit" name="cep"
                                    required>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div>
                        <h5 class="mb-4 fw-semibold">Plano de Saúde</h5>
                    </div>
                    <div class="mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="plano-saude"
                                id="plano-sim-editar_paciente_edit" value="true">
                            <label class="form-check-label" for="plano-sim-editar">Sim</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="plano-saude"
                                id="plano-nao-editar_paciente_edit" value="false">
                            <label class="form-check-label" for="plano-nao-editar">Não</label>
                        </div>
                    </div>
                    <div id="info-plano-saude-editar" style="display: none;">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="nome-plano" class="form-label">Nome do Plano de Saúde</label>
                                    <input type="text" class="form-control" id="nome-plano_paciente_edit"
                                        name="nome_plano">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="numero-cartao" class="form-label">Número do Cartão do Plano</label>
                                    <input type="text" class="form-control" id="numero-cartao_paciente_edit"
                                        name="numero_cartao">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer bg-body-tertiary">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" data-toggle="modal"
                    id="btnSalvarEdicaoPaciente">Salvar
                    Alterações</button>
            </div>
            </form>
        </div>
    </div>
</div>
