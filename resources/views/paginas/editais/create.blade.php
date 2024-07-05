<!-- Modal -->
<div class="modal fade" id="EditalCreate" tabindex="-1" role="dialog" aria-labelledby="createLabel" aria-hidden="true">
    <div class="modal-dialog modal-full-width" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createLabel">Novo - Edital</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('editais.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-sm-2 mt-2 mt-sm-0">
                            <div class="nav flex-column nav-pills" id="v-pills-tab2" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active show" id="v-pills-home-tab2" data-toggle="pill"
                                    href="#v-pills-home2" role="tab" aria-controls="v-pills-home2"
                                    aria-selected="true">
                                    <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">Informações do Edital</span>
                                </a>
                                <a class="nav-link" id="v-pills-profile-tab2" data-toggle="pill"
                                    href="#v-pills-profile2" role="tab" aria-controls="v-pills-profile2"
                                    aria-selected="false">
                                    <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">Anexo</span>
                                </a>
                                <a class="nav-link" id="v-pills-profile-tab2" data-toggle="pill"
                                    href="#v-pills-profile2" role="tab" aria-controls="v-pills-profile2"
                                    aria-selected="false">
                                    <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">Status</span>
                                </a>
                                <a class="nav-link" id="v-pills-settings-tab2" data-toggle="pill"
                                    href="#v-pills-settings2" role="tab" aria-controls="v-pills-settings2"
                                    aria-selected="false">
                                    <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">Finalizar</span>
                                </a>
                            </div>
                        </div> <!-- end col-->
                        <div class="col-sm-9">

                            <div class="tab-content" id="v-pills-tabContent-right">
                                <div class="tab-pane fade active show" id="v-pills-home2" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab2">
                                    <div class="form-group">

                                        <div class="row">
                                            <div class="col-lg-2">
                                                <label for="ano">Modelo de Formulário</label>
                                                <select name="modelo_formulario_id" id="modelo_formulario_id"
                                                    @foreach ($modeloformulario as $modeloformularios)
                                                            class="form-control">
                                                            <option value="{{ $modeloformularios->id }}">
                                                                {{ $modeloformularios->nome }}</option> @endforeach
                                                    </select>
                                            </div>
                                            <div class="col-lg-2">

                                                <div class="form-group">
                                                    <label for="ano">Ano</label>
                                                    <input type="number" name="ano" id="ano"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="grid-container">
                                                    <div class="form-group">
                                                        <label for="titulo">Título</label>
                                                        <input type="text" name="titulo" id="titulo"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="grid-container">

                                                    <div class="form-group">
                                                        <label for="cidade">Cidade</label>
                                                        <input type="text" name="cidade" id="cidade"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="grid-container">

                                                    <div class="form-group">
                                                        <label for="estado">Estado</label>
                                                        <input type="text" name="estado" id="estado"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <div class="grid-container">
                                                        <div class="form-group">
                                                            <label for="local">Local</label>
                                                            <input type="text" name="local" id="local"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="grid-container">
                                                        <div class="form-group">
                                                            <label for="cargo">Cargo</label>
                                                            <input type="text" name="cargo" id="cargo"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="grid-container">
                                                        <div class="form-group">
                                                            <label for="perfil">Perfil</label>
                                                            <input type="text" name="perfil" id="perfil"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="grid-container">
                                                        <div class="form-group">
                                                            <label for="descricao">Descrição</label>
                                                            <textarea name="descricao" id="descricao" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="grid-container">
                                                        <div class="form-group">
                                                            <label for="data_inicio">Data de Início</label>
                                                            <input type="date" name="data_inicio" id="data_inicio"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="grid-container">
                                                        <div class="form-group">
                                                            <label for="data_fim">Data de Fim</label>
                                                            <input type="date" name="data_fim" id="data_fim"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="tab-pane fade" id="v-pills-profile2" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab2">

                                    <div class="form-group">
                                        <label for="anexo1">Anexo</label>
                                        <input type="file" name="anexo1" id="anexo1" class="form-control">
                                    </div>


                                    <div class="tab-pane fade" id="v-pills-settings2" role="tabpanel"
                                        aria-labelledby="v-pills-settings-tab2">


                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select name="status" id="status" class="form-control" required>
                                                <option value="Ativo">
                                                    Ativo</option>

                                                <option value="Encerrado">Encerrado</option>
                                            </select>
                                        </div>
                                    </div>

                                </div> <!-- end tabcontent-->
                            </div> <!-- end col-->


                        </div> <!-- end row-->















                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
