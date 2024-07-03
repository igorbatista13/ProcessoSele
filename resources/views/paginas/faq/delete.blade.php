
<div class="modal fade" id="deletar_{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="deletarLabel_{{ $data->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deletarLabel_{{ $data->id }}">Excluir FAQ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('faq.destroy', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <div class="form-group">
                        <label for="pergunta_{{ $data->id }}">Pergunta</label>
                        <input type="text" class="form-control" id="pergunta_{{ $data->id }}" name="pergunta" placeholder="Pergunta" value="{{ $data->pergunta ?? '' }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="resposta_{{ $data->id }}">Resposta</label>
                        <input type="text" class="form-control" id="resposta_{{ $data->id }}" name="resposta" placeholder="Resposta" value="{{ $data->resposta ?? '' }}" readonly>
                    </div>
                    <div class="form-group">
                        <p>Tem certeza de que deseja excluir esta FAQ?</p>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-danger">Excluir</button>
            </div>
                </form>
        </div>
    </div>
</div>