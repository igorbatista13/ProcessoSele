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
                            <h4 class="card-title">INSCRITOS</h4>
                            <h6 class="card-subtitle">

            
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
                                            <th>Nome do Usuário</th>
                                            <th>Título da Inscrição</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    @foreach ($inscricao as $data)
                                    <tbody>
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->user->name }}</td>
                                            <td>{{ $data->vaga->titulo }}</td>
                                            <td>{{ $data->status }}</td>
                                                       
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
