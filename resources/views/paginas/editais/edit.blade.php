@extends('base.header.header')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">

                <div class="col-sm-12 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-body">

                                <div class="container mt-5">
                                    <h1>Editando</h1>

                                    <form action="{{ route('editais.update', $editais->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="form-group">
                                            <label for="ano">Ano</label>
                                            <input type="text" name="ano" id="ano" class="form-control"
                                                value="{{ $editais->ano }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="titulo">Título</label>
                                            <input type="text" name="titulo" id="titulo" class="form-control"
                                                value="{{ $editais->titulo }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="cidade">Cidade</label>
                                            <input type="text" name="cidade" id="cidade" class="form-control"
                                                value="{{ $editais->cidade }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="estado">Estado</label>
                                            <input type="text" name="estado" id="estado" class="form-control"
                                                value="{{ $editais->estado }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="local">Local</label>
                                            <input type="text" name="local" id="local" class="form-control"
                                                value="{{ $editais->local }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="cargo">Cargo</label>
                                            <input type="text" name="cargo" id="cargo" class="form-control"
                                                value="{{ $editais->cargo }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="perfil">Perfil</label>
                                            <input type="text" name="perfil" id="perfil" class="form-control"
                                                value="{{ $editais->perfil }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="descricao">Descrição</label>
                                            <textarea name="descricao" id="descricao" class="form-control" required>{{ $editais->descricao }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="image">Imagem</label>
                                            <input type="file" name="image" id="image" class="form-control">
                                            @if ($editais->image)
                                                <img src="{{ Storage::url($editais->image) }}" alt="Imagem atual"
                                                    width="100">
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="anexo1">Anexo</label>
                                            <input type="file" name="anexo1" id="anexo1" class="form-control">
                                            @if ($editais->anexo1)
                                                <a href="{{ Storage::url($editais->anexo1) }}">Ver anexo atual</a>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="data_inicio">Data de Início</label>
                                            <input type="date" name="data_inicio" id="data_inicio" class="form-control"
                                                value="{{ $editais->data_inicio }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="data_fim">Data de Fim</label>
                                            <input type="date" name="data_fim" id="data_fim" class="form-control"
                                                value="{{ $editais->data_fim }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select name="status" id="status" class="form-control" required>
                                                <option value="ativo" {{ $editais->status == 'ativo' ? 'selected' : '' }}>
                                                    Ativo</option>
                                                <option value="inativo"
                                                    {{ $editais->status == 'inativo' ? 'selected' : '' }}>Inativo</option>
                                            </select>
                                        </div>


                                        <button type="submit" class="btn btn-primary">Editar Edital</button>
                                    </form>

                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    @endsection
                    @include('base.footer.footer')
