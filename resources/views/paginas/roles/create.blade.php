<!-- Modal -->
<div class="modal fade" id="RolesCreate" tabindex="-1" role="dialog" aria-labelledby="createLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createLabel">Novo Usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!} --}}
                <form action="{{ route('roles.store') }}" method="POST" enctype="multipart/form-data">


                    <div class="card-content">
                        <div class="card-body">
                            <form class="form">
                                <div class="row">
                                    <div class="col-md-6 col-12">

                                        <label for="first-name-column"><strong> Nome do Perfil </strong></label>
                                        {{-- {!! Form::text('name', null, array('placeholder' => 'Nome','class' => 'form-control')) !!} --}}
                                        <input type="text" id="first-name-column" name="name" class="form-control"
                                            placeholder="Nome do">
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="email-id-column"><strong> Permissão </strong></label>
                                            <div class="position-relative">

                                                @foreach ($permissions as $permission)
                                                <div class="form-check">
                                                    {{ Form::checkbox('permissions[]', $permission->id, false, ['class' => 'form-check-input', 'id' => 'permission_' . $permission->id]) }}
                                                    {{ Form::label('permission_' . $permission->id, $permission->name, ['class' => 'form-check-label']) }}
                                                </div>
                                            @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Salvar</button>
                                </div>
                        </div>

                </form>

            </div>
        </div>
    </div>
