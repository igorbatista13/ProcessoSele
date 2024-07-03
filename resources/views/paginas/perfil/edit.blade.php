<div class="tab-pane" id="profile">

    <form action="{{ route('perfil.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row mb-3">
            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Imagem perfil</label>
            <div class="col-md-8 col-lg-9">
                @if (Auth::user()->perfil && Auth::user()->perfil->image)
                    <img src="{{ asset('/images/perfil/' . Auth::user()->perfil->image) }}"  width="100">
                @else
                    <img src="{{ asset('images/brasao_mt.png') }}" alt="Profile" class="rounded">
                @endif
                <div class="pt-2">
                    <input type="file" class="form-control" id="image" name="image">

                 
                </div>
            </div>
        </div>




        <div class="row mb-3">
            <label for="company" class="col-md-4 col-lg-3 col-form-label">Nome</label>
            <div class="col-md-8 col-lg-9">
                <input type="text" class="form-control" id="name" name="name"
                    value="{{ Auth::user()->name ?? '' }}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="data_nascimento" class="col-md-4 col-lg-3 col-form-label">Data de Nascimento</label>
            <div class="col-md-3 col-lg-3">
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento"
                    value="{{ old('data_nascimento', Auth::user()->perfil->data_nascimento ?? '') }}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="company" class="col-md-4 col-lg-3 col-form-label">CPF</label>
            <div class="col-md-3 col-lg-3">
                <input type="text" class="form-control" id="cpf" name="cpf"
                    value="{{ Auth::user()->perfil->cpf ?? '' }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="company" class="col-md-4 col-lg-3 col-form-label">RG</label>
            <div class="col-md-3 col-lg-3">
                <input type="text" class="form-control" id="rg" name="rg"
                    value="{{ Auth::user()->perfil->rg ?? '' }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="pcd" class="col-md-4 col-lg-3 col-form-label">PCD</label>
            <div class="col-md-3 col-lg-3">
                <select class="form-control" id="pcd" name="pcd">
                    <option value="SIM">SIM</option>
                    <option value="NAO">NÃO</option>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <label for="company" class="col-md-4 col-lg-3 col-form-label">SEXO</label>
            <div class="col-md-3 col-lg-3">
                <select class="form-control" id="sexo" name="sexo">
                    <option value="Masculino" {{ Auth::user()->perfil->sexo == 'Masculino' ? 'selected' : '' }}>
                        Masculino</option>
                    <option value="Feminino" {{ Auth::user()->perfil->sexo == 'Feminino' ? 'selected' : '' }}>Feminino
                    </option>
                    <option value="Outros">Prefiro não informar</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="escolaridade" class="col-md-4 col-lg-3 col-form-label">ESCOLARIDADE</label>
            <div class="col-md-3 col-lg-3">
                <select class="form-control" id="escolaridade" name="escolaridade">
                    <option value="Fundamental"
                        {{ Auth::user()->perfil->escolaridade == 'Fundamental' ? 'selected' : '' }}>Fundamental</option>
                    <option value="Ensino Médio"
                        {{ Auth::user()->perfil->escolaridade == 'Ensino Médio' ? 'selected' : '' }}>Ensino Médio
                    </option>
                    <option value="Ensino Superior (Graduação)"
                        {{ Auth::user()->perfil->escolaridade == 'Ensino Superior (Graduação)' ? 'selected' : '' }}>
                        Ensino Superior (Graduação)</option>
                    <option value="Pós-graduação"
                        {{ Auth::user()->perfil->escolaridade == 'Pós-graduação' ? 'selected' : '' }}>Pós-graduação
                    </option>
                    <option value="Mestrado" {{ Auth::user()->perfil->escolaridade == 'Mestrado' ? 'selected' : '' }}>
                        Mestrado</option>
                    <option value="Doutorado"
                        {{ Auth::user()->perfil->escolaridade == 'Doutorado' ? 'selected' : '' }}>Doutorado</option>
                </select>
            </div>
        </div>



        <div class="row mb-3">
            <label for="company" class="col-md-4 col-lg-3 col-form-label">Órgão</label>
            <div class="col-md-8 col-lg-9">
                <input type="text" class="form-control" id="Orgao" name="orgao"
                    value="{{ Auth::user()->perfil->orgao ?? '' }}">
            </div>
          
        </div>

        <div class="row mb-3">
            <label for="Job" class="col-md-4 col-lg-3 col-form-label">Cargo</label>
            <div class="col-md-8 col-lg-9">
                <input type="text" class="form-control" id="cargo" name="cargo"
                    value="{{ Auth::user()->perfil->cargo ?? '' }}">
            </div>
        </div>



        <div class="row mb-3">
            <label for="Address" class="col-md-4 col-lg-3 col-form-label">Endereço</label>
            <div class="col-md-8 col-lg-9">
                <input type="text" class="form-control" id="endereco" name="endereco"
                    value="{{ Auth::user()->perfil->endereco ?? '' }}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Address" class="col-md-4 col-lg-3 col-form-label">Cidade</label>
            <div class="col-md-8 col-lg-9">
                <input type="text" class="form-control" id="cidade" name="cidade"
                    value="{{ Auth::user()->perfil->cidade ?? '' }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="Address" class="col-md-4 col-lg-3 col-form-label">Estado</label>
            <div class="col-md-8 col-lg-9">
                <input type="text" class="form-control" id="estado" name="estado"
                    value="{{ Auth::user()->perfil->estado ?? '' }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="Address" class="col-md-4 col-lg-3 col-form-label">CEP</label>
            <div class="col-md-8 col-lg-9">
                <input type="text" class="form-control" id="CEP" name="CEP"
                    value="{{ Auth::user()->perfil->CEP ?? '' }}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Telefone</label>
            <div class="col-md-8 col-lg-9">
                <input type="text" class="form-control" id="telefone" name="telefone"
                    value="{{ Auth::user()->perfil->telefone ?? '' }}">
            </div>
        </div>




        <div class="row mb-3 ">
            <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook </label>
            <div class="col-md-8 col-lg-9">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">facebook.com/</span>

                    <input type="text" class="form-control" id="facebook" name="facebook"
                        placeholder="Username" aria-describedby="basic-addon1"
                        value="{{ Auth::user()->perfil->facebook ?? '' }}">
                </div>
            </div>

        </div>

        <div class="row mb-3">
            <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram </label>
            <div class="col-md-8 col-lg-9">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">instagram.com/</span>
                    <input type="text" class="form-control" id="instagram" name="instagram"
                        value="{{ Auth::user()->perfil->instagram ?? '' }}">
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin </label>
            <div class="col-md-8 col-lg-9">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">linkedin.com/</span>
                    <input type="text" class="form-control" id="linkedin" name="linkedin"
                        value="{{ Auth::user()->perfil->linkedin ?? '' }}">
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Site </label>
            <div class="col-md-8 col-lg-9">
                <input type="text" class="form-control" id="site" name="site"
                    value="{{ Auth::user()->perfil->site ?? '' }}">
            </div>
        </div>



        <div class="text-center">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>

    <!-- End Profile Edit Form -->

</div>
