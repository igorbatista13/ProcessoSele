
  <!-- Modal -->
  <div class="modal fade" id="editar_{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="editarLabel_{{ $data->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarLabel_{{ $data->id }}">Editar FAQ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <form action="{{ route('faq.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                  @method('PUT')


                  
                    <div class="form-group">
                        <label for="pergunta_{{ $data->id }}">Pergunta</label>
                        <input type="text" class="form-control" id="pergunta_{{ $data->id }}" name="pergunta" placeholder="Pergunta" value="{{ $data->pergunta ?? '' }}">
                    </div>
                    <div class="form-group">
                        <label for="resposta_{{ $data->id }}">Resposta</label>
                        <input type="text" class="form-control" id="resposta_{{ $data->id }}" name="resposta" placeholder="Resposta" value="{{ $data->resposta ?? '' }}">
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