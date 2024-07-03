<!-- Modal -->
<div class="modal fade" id="editar_{{ $data->id }}" tabindex="-1" role="dialog"
    aria-labelledby="editarLabel_{{ $data->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarLabel_{{ $data->id }}">Editar FAQ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{ route('editais.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <select name="modelo_formulario_id" id="modelo_formulario_id"
                        @foreach ($modeloformulario as $modeloformularios)
                                            class="form-control">
                                            <option value="{{ $modeloformularios->id }}">
                                                {{ $modeloformularios->nome }}</option> @endforeach
                        </select>
                        <div class="form-group">
                            <label for="ano">Ano</label>
                            <input type="text" name="ano" id="ano" class="form-control"
                                value="{{ $data->ano }}" required>
                        </div>

                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" name="titulo" id="titulo" class="form-control"
                                value="{{ $data->titulo }}" required>
                        </div>

                        <div class="form-group">
                            <label for="cidade">Cidade</label>
                            <input type="text" name="cidade" id="cidade" class="form-control"
                                value="{{ $data->cidade }}" required>
                        </div>

                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <input type="text" name="estado" id="estado" class="form-control"
                                value="{{ $data->estado }}" required>
                        </div>

                        <div class="form-group">
                            <label for="local">Local</label>
                            <input type="text" name="local" id="local" class="form-control"
                                value="{{ $data->local }}" required>
                        </div>

                        <div class="form-group">
                            <label for="cargo">Cargo</label>
                            <input type="text" name="cargo" id="cargo" class="form-control"
                                value="{{ $data->cargo }}" required>
                        </div>

                        <div class="form-group">
                            <label for="perfil">Perfil</label>
                            <input type="text" name="perfil" id="perfil" class="form-control"
                                value="{{ $data->perfil }}" required>
                        </div>

                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <textarea name="descricao" id="descricao" class="form-control" required>{{ $data->descricao }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Imagem</label>
                            <input type="file" name="image" id="image" class="form-control">
                            @if ($data->image)
                                <img src="{{ Storage::url($data->image) }}" alt="Imagem atual" width="100">
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="anexo1">Anexo</label>
                            <input type="file" name="anexo1" id="anexo1" class="form-control">
                            @if ($data->anexo1)
                                <a href="{{ Storage::url($data->anexo1) }}">Ver anexo atual</a>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="data_inicio">Data de Início</label>
                            <input type="date" name="data_inicio" id="data_inicio" class="form-control"
                                value="{{ $data->data_inicio }}" required>
                        </div>

                        <div class="form-group">
                            <label for="data_fim">Data de Fim</label>
                            <input type="date" name="data_fim" id="data_fim" class="form-control"
                                value="{{ $data->data_fim }}" required>
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="Ativo" {{ $data->status == 'Ativo' ? 'selected' : '' }}>
                                    Ativo</option>

                                <option value="Encerrado" {{ $data->status == 'Encerrado' ? 'selected' : '' }}>
                                    Encerrado</option>
                            </select>
                        </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-warning">Salvar</button>
            </div>
            </form>
        </div>
    </div>
</div>
