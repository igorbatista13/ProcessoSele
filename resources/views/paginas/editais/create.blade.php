@extends('base.header.header')
@section('content')

<div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-12 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <body>
                                <div class="container mt-5">
                                    <h1>Novo Edital</h1>

                                    <form action="{{ route('editais.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="ano">Ano</label>
                                            <input type="number" name="ano" id="ano" class="form-control"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="titulo">Título</label>
                                            <input type="text" name="titulo" id="titulo" class="form-control"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="cidade">Cidade</label>
                                            <input type="text" name="cidade" id="cidade" class="form-control"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="estado">Estado</label>
                                            <input type="text" name="estado" id="estado" class="form-control"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="local">Local</label>
                                            <input type="text" name="local" id="local" class="form-control"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="cargo">Cargo</label>
                                            <input type="text" name="cargo" id="cargo" class="form-control"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="perfil">Perfil</label>
                                            <input type="text" name="perfil" id="perfil" class="form-control"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="descricao">Descrição</label>
                                            <textarea name="descricao" id="descricao" class="form-control" required></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="image">Imagem</label>
                                            <input type="file" name="image" id="image" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="anexo1">Anexo</label>
                                            <input type="file" name="anexo1" id="anexo1" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="data_inicio">Data de Início</label>
                                            <input type="date" name="data_inicio" id="data_inicio" class="form-control"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="data_fim">Data de Fim</label>
                                            <input type="date" name="data_fim" id="data_fim" class="form-control"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select name="status" id="status" class="form-control" required>
                                                <option value="Ativo">
                                                    Ativo</option>
                                                
                                                <option value="Encerrado"
                                                    >Encerrado</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Criar Inscrição</button>
                                    </form>
                                @endsection
                                @include('base.footer.footer')
