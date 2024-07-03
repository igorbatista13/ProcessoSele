<!-- Modal -->
<div class="modal fade" id="UsuarioCreate" tabindex="-1" role="dialog" aria-labelledby="createLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createLabel">Novo Usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('usuarios.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-6 col-12">

                                        <label for="name">Nome</label>
                                        {{-- {!! Form::text('name', null, array('placeholder' => 'Nome Completo','class' => 'form-control')) !!} --}}

                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="Nome completo">
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="email-id-column">Email</label>
                                            <div class="position-relative">

                                                {{-- {!! Form::text('email', null, array('placeholder' => 'E-mail','class' => 'form-control')) !!} --}}
                                                <input type="text" id="email" name="email" class="form-control"
                                                    placeholder="E-mail">

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

                                                {{-- {!! Form::password('password', array('placeholder' => 'Senha','class' => 'form-control')) !!} --}}
                                                <input type="text" id="password" name="password"
                                                    class="form-control" placeholder="Senha">

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

                                                {{-- {!! Form::password('confirm-password', array('placeholder' => 'Confirme a Senha','class' => 'form-control')) !!} --}}
                                                <input type="text" id="confirm-password" name="confirm-password"
                                                    class="form-control" placeholder="Confirme a Senha">

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
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
            </form>
        </div>
    </div>
</div>
