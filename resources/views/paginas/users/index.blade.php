@extends('base.header.header')

@section('content')
    <div class="page-wrapper">

        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">USUÁRIOS DO SISTEMA</h4>
                            <b class="text-muted">
                                </h4>
                                <h6 class="card-subtitle">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#UsuarioCreate">
                                        <i class="icon-plus mr-2 text-light"></i> Novo
                                    </button>
                                    @include ('paginas/users/create')
                                </h6>

                                <!-- Table with stripped rows -->
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nome</th>
                                                <th>E-mail</th>
                                                <th>Perfil de Acesso</th>
                                                <th>Data de Criação</th>
                                                <th>Data de Atualização</th>
                                                <th>Ações</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($data as $key => $user)
                                                <tr>

                                                    <td>
                                                        @if ($user->perfil && $user->perfil->image)
                                                            <img src="{{ asset('images/perfil/' . $user->perfil->image) }}"
                                                                width="40px" alt="Profile">
                                                        @else
                                                            <img src="{{ asset('images/default_profile.png') }}"
                                                                width="40px" alt="Default Profile">
                                                            <!-- Imagem padrão caso não tenha -->
                                                        @endif

                                                    </td>
                                                    <td>{{ $user->name ?? 'Sem registros' }}</td>
                                                    <td>{{ $user->email ?? 'Sem registros' }}</td>
                                                    <td>
                                                        @if (!empty($user->getRoleNames()))
                                                            @foreach ($user->getRoleNames() as $v)
                                                                <span
                                                                    class="badge rounded-pill bg-dark">{{ $v }}</span>
                                                            @endforeach
                                                        @endif
                                                    </td>
                                                    <td>{{ $user->created_at ?? 'Sem registros' }} </td>
                                                    <td>{{ $user->updated_at ?? 'Sem registros' }} </td>
                                                    <td>
                                                        <button type="button" class="btn btn-warning" data-toggle="modal"
                                                            data-target="#editar_{{ $user->id }}">
                                                            <i class="icon-pencil mr-2 text-dark"></i> Editar
                                                        </button>
                                                        @include('paginas/users/edit')
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                        </section>
                    </div>
                    </main>
                @endsection
                @include('base.footer.footer')
