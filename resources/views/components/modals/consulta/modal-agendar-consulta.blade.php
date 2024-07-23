<div class="modal fade modal-md" data-bs-backdrop="static" data-bs-keyboard="false" id="modalAgendarConsulta" tabindex="-1" aria-labelledby="modalAgendarConsultaLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:700px; width: 100%;">
        <div class="modal-content">
            <div class="modal-header bg-body-tertiary">
                <div class="d-flex justify-content-center align-items-center flex-grow-1">
                    <h4 class="modal-title fw-bold text-primary ms-3" id="modalAgendarConsultaLabel">Agendar Consulta</h4>
                </div>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body m-5 mb-2 mt-0 py-4 pt-3">
                <form id="formAgendarConsulta">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h5 class="fw-semibold mb-0">Informações do Paciente</h5>
                        <div class="d-flex flex-column align-items-center pt-2">
                            <button class="btn btn-light shadow-sm border small d-flex align-items-center" type="button" data-bs-target="#modalPesquisarPaciente" data-bs-toggle="modal">
                                <div>Pesquisar Paciente</div>
                                <ion-icon name="search-outline" class="ms-2"></ion-icon>
                            </button>
                        </div>
                    </div>
                    <div class="form-check form-switch pt-1 pb-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Primeira Consulta</label>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome Completo</label>
                                <input type="text" class="form-control" id="nome" name="nome" required disabled>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="telefone" class="form-label">Telefone</label>
                                <input type="tel" class="form-control tel" id="telefone" name="telefone" required disabled>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div>
                        <h5 class="mb-3 fw-semibold">Data e Hora</h5>
                    </div>
                    <div class="card pb-4">
                        <div id="hjsCalendar"></div>
                    </div>
                </form>
            </div>
            <div class="modal-footer bg-body-tertiary">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" form="formAgendarConsulta">Salvar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Pesquisar Paciente-->
<div class="modal fade modal-lg" data-bs-backdrop="static" data-bs-keyboard="false" id="modalPesquisarPaciente" tabindex="-1" aria-labelledby="modalPesquisarPacienteLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-body-tertiary">
                <div class="d-flex justify-content-center align-items-center flex-grow-1">
                    <h4 class="modal-title fw-bold text-primary" id="modalPesquisarPacienteLabel">Pesquisar Paciente</h4>
                </div>
            </div>
            <div class="modal-body m-5 mb-1 mt-0 py-4 pt-4">
                <div class="d-flex align-items-center justify-content-center pb-3">
                    <form class="form-inline w-75">
                        <div class="input-group shadow-sm">
                            <input type="text" class="form-control bg-light" placeholder="Pesquisar..." aria-label="Search" aria-describedby="basic-addon2" name="search">
                            <div class="input-group-prepend">
                                <button class="btn btn-light border" type="submit">
                                    <ion-icon name="search-outline" class="fs-5 align-middle"></ion-icon>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow-sm mb-1">
                            <div class="card-header py-3">
                                <div class="row">
                                    <div class="col text-primary fw-semibold">Nome Completo</div>
                                    <div class="col text-primary fw-semibold">CPF</div>
                                    <div class="col text-primary fw-semibold">Telefone</div>
                                    <div class="col-2 text-primary fw-semibold">Ação</div>
                                </div>
                            </div>
                            <div class="card-body py-0 ps-3 dados2 border-bottom hscroll">
                                <div class="row pt-3 pb-3 border-bottom">
                                    <div class="col">João da Silva</div>
                                    <div class="col">111.111.111-11</div>
                                    <div class="col">(11) 99999-9999</div>
                                    <div class="col-2">
                                        <div class="d-flex flex-row">
                                            <button type="button" class="btn btn-sm btn-primary shadow-sm border small me-3 d-flex justify-content-center align-items-center">
                                                Selecionar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-3 pb-3">
                                    <div class="col">Maria Oliveira</div>
                                    <div class="col">222.222.222-22</div>
                                    <div class="col">(11) 98888-8888</div>
                                    <div class="col-2">
                                        <div class="d-flex flex-row">
                                            <button type="button" class="btn btn-sm btn-primary shadow-sm border small me-3 d-flex justify-content-center align-items-center">
                                                Selecionar
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-body-tertiary">
                <button type="button" class="btn btn-secondary" data-bs-target="#modalAgendarConsulta" data-bs-toggle="modal">Voltar</button>
            </div>
        </div>
    </div>
</div>