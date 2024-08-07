<!-- Modal -->
<div class="modal fade" id="verdoc_{{ $data->id }}" tabindex="-1" role="dialog"
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
                <div class="card-body">
                    <h4 class="card-title"> {{ $data->titulo }}</h4>

                    <div class="table-responsive">
                        <table class="table">

                            <thead class="">
                                <tr>
                                    <th>Nome</th>
                                    <th>Tipo</th>
                                    <th>Anexo</th>
                                </tr>
                            </thead>

                            @foreach ($data->documentos as $documento)
                                <tbody>
                                    <tr>
                                        <td>  {{ $documento->nome }} </td>
                                        <td>  {{ $documento->tipo_arquivo }} </td>
                                        <td>  {{ $documento->anexo }} </td>
                                        <td>  <a href="{{ asset('storage/' . $documento->anexo) }}" target="_blank">Ver arquivo :) </a>
                                        </td>
                                        <td>  <a class="btn btn-primary"
                                            href="{{ asset('storage/app/public/' . $documento->anexo) }}"
                                            target="_blank">
                                            <i class="bi bi-file-earmark-pdf-fill">
                                            </i> Ver arquivo
                                        </a> </td>

                        </tbody>
                        @endforeach
                    </table>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-dismiss="modal">Fechar</button>
                            </div>
                    </div>
                </div>
            </div>
