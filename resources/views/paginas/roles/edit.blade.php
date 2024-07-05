<!-- Modal -->
<div class="modal fade" id="editar_{{ $role->id }}" tabindex="-1" role="dialog"
    aria-labelledby="editarLabel_{{ $role->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarLabel_{{ $role->id }}">Editar Usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('roles.update', $role->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card-content">
                        <div class="card-body">
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-6 col-12">

                                        <label for="first-name-column"><strong> Nome do Perfil </strong></label>
                                        {!! Form::text('name', null, ['placeholder' => 'Nome do Perfil', 'class' => 'form-control']) !!}

                                        <!-- <input type="text" id="first-name-column" name="name" class="form-control" placeholder="Nome completo"> -->
                                    </div>

                                    <div class="col-md-12 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="email-id-column"><strong> Permissão </strong></label>
                                            <div class="position-relative">

                                                @foreach ($permissions as $value)
                                                    <div class="checkbox">
                                                        <label>
                                                            {{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions), ['class' => 'permission-checkbox']) }}
                                                            <span>{{ $value->name }}</span>
                                                        </label>
                                                    </div>
                                                @endforeach
                                                
                                            </div>
                                        </div>


                                    </div>
                                </div>
                        </div>
                    </div>


            </div>



<div class="modal-footer">
    <button type="button" class="btn btn-light" data-dismiss="modal">Fechar</button>
    <button type="submit" class="btn btn-warning">Salvar</button>
</div>
{!! Form::close() !!}
</div>
</div>
</div>
