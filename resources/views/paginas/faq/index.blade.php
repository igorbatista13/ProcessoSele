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
                      
                                
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createfaq">
                                    <i class="icon-plus mr-2 text-light"></i> Novo
                                </button>
                                @include ('paginas/faq/create')

                            </h6>


                            <div class="table-responsive">
                                <table class="table">

                                    <thead class="">
                                        <tr>
                                            <th>ID</th>
                                            <th>Pergunta</th>
                                            <th>Resposta</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    @foreach ($faq as $data)
                                        <tbody>
                                            <tr>
                                                <td>{{ $data->id }}</td>
                                                <td>{{ $data->pergunta }}</td>
                                                <td>{{ $data->resposta }}</td>
                                                <td>

                                                    <button type="button" class="btn btn-warning " data-toggle="modal" data-target="#editar_{{ $data->id }}">
                                                        <i class="icon-pencil mr-2 "></i> Editar
                                                    </button>                                                    
                                                    @include('paginas/faq/edit')

                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletar_{{ $data->id }}">
                                                        <i class="icon-trash mr-2 text-white"></i> Deletar
                                                    </button>
                                                    
                                                    @include('paginas/faq/delete')

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
