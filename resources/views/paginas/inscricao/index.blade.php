@extends('base.header.header')

@section('content')
    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Inscritos</h4>
                </div>

            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <!-- Column -->
                                <div class="col-md-6 col-lg-3 col-xlg-3">
                                    <div class="card card-hover">
                                        <div class="p-2 bg-primary text-center">
                                            <h1 class="font-light text-white">2,064</h1>
                                            <h6 class="text-white">Total de Inscritos</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <div class="col-md-6 col-lg-3 col-xlg-3">
                                    <div class="card card-hover">
                                        <div class="p-2 bg-warning text-center">
                                            <h1 class="font-light text-white">1,738</h1>
                                            <h6 class="text-white">Total de Pendentes</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <div class="col-md-6 col-lg-3 col-xlg-3">
                                    <div class="card card-hover">
                                        <div class="p-2 bg-success text-center">
                                            <h1 class="font-light text-white">1100</h1>
                                            <h6 class="text-white">Total de Selecionados</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <div class="col-md-6 col-lg-3 col-xlg-3">
                                    <div class="card card-hover">
                                        <div class="p-2 bg-danger text-center">
                                            <h1 class="font-light text-white">964</h1>
                                            <h6 class="text-white">Total de não Selecionados</h6>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                            </div>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                    <thead>
                                        <tr>
                                            <th>Status</th>
                                            <th>Título</th>
                                            <th>ID</th>
                                            <th>Candidato</th>
                                            <th>Date da inscrição</th>
                                        </tr>
                                    </thead>
                                    @foreach ($inscricao as $data)
                                        <tbody>
                                            <tr>
                                                <td><span class="badge badge-light-warning">{{ $data->status }}</span></td>
                                                <td><a href="javascript:void(0)"
                                                        class="font-weight-medium link">{{ $data->vaga->titulo }}</a></td>
                                                <td><a href="javascript:void(0)"
                                                        class="font-bold link">{{ $data->id }}</a></td>
                                                <td>{{ $data->user->name }}</td>
                                                <td>{{ $data->created_at }}</td>

                                            </tr>
                                    @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Status</th>
                                            <th>Título</th>
                                            <th>ID</th>
                                            <th>Candidato</th>
                                            <th>Date da inscrição</th>

                                        </tr>
                                    </tfoot>
                                </table>
                                <ul class="pagination float-right">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Anterior</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Próximo</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@include('base.footer.footer')
