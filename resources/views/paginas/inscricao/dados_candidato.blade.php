<div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Dados do Candidato</h4>

            <img src="{{ asset('/images/perfil/' . $inscricao->user->perfil->image) }}" width="100px"
                class="card-img-tsop1" alt="Profsile">


            <h4>
                <b> Nome: </b> {{ $inscricao->user->name }}
            </h4>
            <p> <b> Data Nascimento:</b> {{ $inscricao->user->perfil->data_nascimento }}</h4>
            </p>
            <p> <b> E-mail:</b> {{ $inscricao->user->perfil->email }}</h4>
            </p>
            <p> <b> CPF:</b> {{ $inscricao->user->perfil->cpf }}</h4>
            </p>
            <p> <b> CPF:</b> {{ $inscricao->user->perfil->rg }}</h4>
            </p>
            <p> <b> PCD: </b>{{ $inscricao->user->perfil->pcd }}</h4>
            </p>
            <p> <b> Sexo: </b>{{ $inscricao->user->perfil->sexo }}</h4>
            </p>
            <p> <b> Escolaridade:</b> {{ $inscricao->user->perfil->escolaridade }}</h4>
            </p>

            <hr>
            <h5 class="card-title">Endereço</h4>

                <p> <b> Endereço:</b> {{ $inscricao->user->perfil->endereco }}</h4>
                </p>
                <p> <b> Cidade:</b> {{ $inscricao->user->perfil->cidade }}</h4>
                </p>
                <p> <b> Estado: </b>{{ $inscricao->user->perfil->estado }}</h4>
                </p>
                <p> <b> CEP: </b>{{ $inscricao->user->perfil->CEP }}</h4>
                </p>

                <hr>
                <h5 class="card-title">Social</h4>
                    <p> <b> Facebook:</b> {{ $inscricao->user->perfil->facebook }}</h4>
                    </p>
                    <p> <b> Instagram: </b>{{ $inscricao->user->perfil->instagram }}</h4>
                    </p>
                    <p> <b> Linkedin:</b> {{ $inscricao->user->perfil->linkedin }}</h4>
                    </p>

                    <hr>
                    <h5 class="card-title">Informações preenchidas no formulário</h4>
                        <p> <b>Banco de talentos: </b> {{ $inscricao->formulario->bancodetalentos ?? 'N/A' }} </p>
                        @if ($inscricao->formulario && $inscricao->formulario->anexo)
                            <p> <b> Documento anexo: </b> <a href="{{ Storage::url($inscricao->formulario->anexo) }}"
                                    target="_blank">Ver Anexo</a></p>
                        @else
                            N/A
                        @endif


        </div>
    </div>
</div>
