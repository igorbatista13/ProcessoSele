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
                            <h4 class="card-title">EDITAIS</h4>
                            <h6 class="card-subtitle">

                                <a class="sidebar-link" href="{{ asset('/editais/create') }}" aria-expanded="false">
                                    <i data-feather="tag" class="feather-icon"> </i>
                                    <span class="hide-menu">Novo
                                    </span>
                                </a>
                            </h6>
                            {{-- 'ano',     'titulo',        'cidade',
                            'estado',   'local',        'cargo',
                            'perfil',   'descricao',    'image',
                            'anexo1',   'data_inicio',  'data_fim',
                            'status', --}}

                            <div class="table-responsive">
                                <table class="table">

                                    <thead class="">
                                        <tr>
                                            <th>ID</th>
                                            <th>Ano</th>
                                            <th>Título</th>
                                            <th>Baixar</th>
                                            <th>Inscrever</th>
                                        </tr>
                                    </thead>
                                    @foreach ($editais as $data)
                                    <tbody>
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td>{{$data->ano}}</td>
                                            <td>{{$data->titulo}}</td>
                                            <td>ICONE PARA DOWNLOAD DO ARQUIVO</td>
                                            <td>
                                                @if (!in_array($data->id, $userInscriptions))
                                                    <form action="{{ route('inscricao.store', $data->id) }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary">Inscrever-se</button>
                                                    </form>
                                                @else
                                                    <span class="text-success">Já inscrito</span>
                                                @endif
                                         
                                                <a class="sidebar-link" href="{{ route('editais.edit', $data->id) }}" aria-expanded="false">
                                                    <i data-feather="tag" class="feather-icon"> </i>
                                                    <span class="hide-menu">Editar
                                                    </span>
                                                </a>

                                            </td>                   
                                        </tr>

                                    </tbody>
                                    @endforeach
                                </table>
                                {{-- {{ $editais->links() }} --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@include('base.footer.footer')
