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
                            <h4 class="card-title">{{ $titulo }}
                                <b class="text-muted">
                            </h4>
                            <h6 class="card-subtitle">

                                <!-- Button trigger modal -->
                      
                                
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
                                    <i class="icon-plus mr-2 text-light"></i> Novo
                                </button>
                                @include ('paginas/modeloformulario/create')

                            </h6>


                            <div class="table-responsive">
                                <table class="table">

                                    <thead class="">
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>Descrição</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    @foreach ($modelo as $data)
                                        <tbody>
                                            <tr>
                                                <td>{{ $data->id }}</td>
                                                <td>{{ $data->nome }}</td>
                                                <td>{{ $data->descricao }}</td>
                                                <td>

                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar_{{ $data->id }}">
                                                        <i class="icon-pencil mr-2 text-dark"></i> Editar
                                                    </button>
                                                    
                                                    @include('paginas/modeloformulario/edit')

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
