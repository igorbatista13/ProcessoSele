<!-- Modal -->
<div class="modal fade" id="editar_{{ $user->id }}" tabindex="-1" role="dialog"
    aria-labelledby="editarLabel_{{ $user->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarLabel_{{ $user->id }}">Editar Usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('usuarios.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card-content">
                        <div class="card-body">
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-6 col-12">

                                        <label for="name">Nome</label>
                                        <input type="text" class="form-control" id="name{{ $user->id }}"
                                            name="name" placeholder="Nome completo" value="{{ $user->name ?? '' }}">


                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="email-id-column">Email</label>
                                            <div class="position-relative">

                                                <input type="text" class="form-control" id="email{{ $user->id }}"
                                                    name="email" placeholder="E-mail"
                                                    value="{{ $user->email ?? '' }}">

                                                <div class="form-control-icon">
                                                    <i data-feather="mail"></i>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="email-id-column">Senha</label>
                                            <div class="position-relative">


                                                <input type="text" class="form-control"
                                                    id="password{{ $user->id }}" name="password"
                                                    placeholder="Nome do Modelo">

                                                <div class="form-control-icon">
                                                    <i data-feather="mail"></i>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="email-id-column">Senha</label>
                                            <div class="position-relative">


                                                <input type="text" class="form-control"
                                                    id="confirm-password{{ $user->id }}" name="confirm-password"
                                                    placeholder="Confirme a senha">

                                                <div class="form-control-icon">
                                                    <i data-feather="mail"></i>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="email-id-column">Perfil</label>
                                            <div class="position-relative">

                                                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!} 



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
            </form>
        </div>
    </div>
</div>
