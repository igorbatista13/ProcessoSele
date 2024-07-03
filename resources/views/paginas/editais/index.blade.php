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
                            <h4 class="card-title">PROCESSOS SELETIVOS / EDITAIS  
                                <b class="text-muted"></h4>
                            <h6 class="card-subtitle">

                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#EditalCreate">
                                    <i class="icon-plus mr-2 text-light"></i> Novo
                                </button>
                                @include ('paginas/editais/create')

                     
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
                                            <th>Etapa</th>
                                            <th>Modelo</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    @foreach ($editais as $data)
                                        <tbody>
                                            <tr>
                                                <td>{{ $data->id }}</td>
                                                <td>{{ $data->ano }}</td>
                                                <td>{{ $data->titulo }}</td>
                                                <td>{{ $data->etapa }}</td>
                                                <td><b> {{ $data->formulario->id }} </b>  - {{ $data->formulario->nome }}</td>
                                                <td>{{ $data->status }} </td>
                                                <td>
                                                    <button type="button" class="btn btn-warning " data-toggle="modal" data-target="#editar_{{ $data->id }}">
                                                        <i class="icon-pencil mr-2 "></i> Editar
                                                    </button>  
                                                    @include ('paginas/editais/edit')
                                                </td>
                                            </tr>

                                        </tbody>
                                    @endforeach
                                </table>
                                {{ $editais->links() }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@include('base.footer.footer')
