<!-- Modal -->
<div class="modal fade" id="inserir_{{ $data->id }}" tabindex="-1" role="dialog"
    aria-labelledby="editarLabel_{{ $data->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarLabel_{{ $data->id }}">Inserir Documento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{ route('documentos.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                
                    <h2> {{$data->titulo}}</h2>
                    <input type="hidden" name="vagas_id" id="vagas_id" value="{{ $data->id }}">
                    
                    <div class="form-group">
                        <label for="tipo_arquivo">Tipo do arquivo</label>
                        <select name="tipo_arquivo" id="tipo_arquivo" class="form-control">
                            <option value="PDF" {{ $data->tipo_arquivo == 'PDF' ? 'selected' : '' }}>PDF</option>
                            <option value="Excel" {{ $data->tipo_arquivo == 'Excel' ? 'selected' : '' }}>Excel</option>
                            <option value="Word" {{ $data->tipo_arquivo == 'Word' ? 'selected' : '' }}>Word</option>
                            <option value="Outros" {{ $data->tipo_arquivo == 'Outros' ? 'selected' : '' }}>Outros</option>
                        </select>
                    </div>
                
                    <div class="form-group">
                        <label for="nome">Nome do arquivo</label>
                        <input type="text" name="nome" id="nome" class="form-control" value="{{ $data->nome }}">
                    </div>
                
                    {{-- <div class="form-group">
                        <label for="data_inicio">Data Início</label>
                        <input type="date" name="data_inicio" id="data_inicio" class="form-control" value="{{ $data->data_inicio }}" required>
                    </div>
                
                    <div class="form-group">
                        <label for="data_fim">Data Fim</label>
                        <input type="date" name="data_fim" id="data_fim" class="form-control" value="{{ $data->data_fim }}" required>
                    </div> --}}
                
                    <div class="form-group">
                        <label for="anexo">Anexo</label>
                        <input type="file" name="anexo" id="anexo" class="form-control">
                        @if ($data->anexo)
                            <a href="{{ Storage::url($data->anexo) }}" target="_blank">Ver anexo atual</a>
                        @endif
                    </div>
                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </form>
        </div>
    </div>
</div>
</div>
