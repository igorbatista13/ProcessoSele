
  <!-- Modal -->
  <div class="modal fade" id="editar_{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="editarLabel_{{ $data->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarLabel_{{ $data->id }}">Editar Modelo de Formulário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <form action="{{ route('modeloformulario.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                  @method('PUT')


                  
                    <div class="form-group">
                        <label for="nome_{{ $data->id }}">Nome</label>
                        <input type="text" class="form-control" id="nome_{{ $data->id }}" name="nome" placeholder="Nome do Modelo" value="{{ $data->nome ?? '' }}">
                    </div>
                    <div class="form-group">
                        <label for="descricao_{{ $data->id }}">Descrição</label>
                        <input type="text" class="form-control" id="descricao_{{ $data->id }}" name="descricao" placeholder="Descrição do Modelo" value="{{ $data->descricao ?? '' }}">
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