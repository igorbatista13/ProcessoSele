
  <!-- Modal -->
  <div class="modal fade" id="createfaq" tabindex="-1" role="dialog" aria-labelledby="createLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createLabel">Novo - FAQ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('faq.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="pergunta">Pergunta</label>
                        <input type="text" class="form-control" id="pergunta" name="pergunta" placeholder="Pergunta" >
                    </div>
                    <div class="form-group">
                        <label for="resposta">Resposta</label>
                        <input type="text" class="form-control" id="resposta" name="resposta" placeholder="Resposta">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
                </form>
        </div>
    </div>
</div>