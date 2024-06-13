@extends('base.header.header')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <!-- Row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Informações sobre o Edital</h4>
                                <hr>
             

                                </p>
                                <div class="p-4 border shadow-sm rounded">
                                    <h4 class="card-title">{{ $editais->titulo }} - <b> {{ $editais->ano }} </b></h4>
                                    <p>{{ $editais->descricao }}
                                    </p>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6 border-right">
                                            <ul class="list-style-none">
                                                {{-- <li class="my-2 border-bottom pb-3">
                                                    <span class="font-weight-medium text-dark"><i
                                                            class="icon-note mr-2 text-success"></i> Includes:</span>
                                                </li> --}}
                                                <li class="my-3">
                                                    <span><i class="icon-pencil mr-2 text-success"></i> <b> Local:
                                                        </b>{{ $editais->local }} {{ $editais->cidade }} -
                                                        {{ $editais->estado }}
                                                    </span>
                                                </li>
                                                <li class="my-3">
                                                    <span><i class="icon-pencil mr-2 text-success"></i> <b> Perfil:
                                                        </b>{{ $editais->perfil }}

                                                    </span>
                                                </li>
                                                <li class="my-3">
                                                    <span><i class="icon-pencil mr-2 text-success"></i> <b> Cargo:
                                                        </b>{{ $editais->cargo }}

                                                    </span>
                                                </li>
                                                <li class="my-3">
                                                    <span><i class="icon-pencil mr-2 text-danger"></i> <b> Data Início </b>
                                                        {{ $editais->data_inicio }}</span>
                                                </li>
                                                <li class="my-3">
                                                    <span><i class="icon-date mr-2 text-danger"></i> <b> Data Fim </b>
                                                        {{ $editais->data_fim }}</span>
                                                </li>
                                                <li class="my-3">
                                                    <span><i class="icon-pencil mr-2 text-danger"></i> <b> Documentos </b>
                                                        {{ $editais->anexo1 }}</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-style-none">
                                                <li class="my-2 border-bottom pb-3">
                                                    <span class="font-weight-medium text-dark"><i
                                                            class="icon-note mr-2 text-danger"></i> Does Not
                                                        Includes:</span>
                                                </li>

                                                <li class="my-3">
                                                    <span><i class="icon-pencil mr-2 text-danger"></i> Solve bug in your
                                                        implemented template</span>
                                                </li>
                                                @if (!in_array($editais->id, $userInscriptions))
                                                <form action="{{ route('inscricao.form', $editais->id) }}" method="GET">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary">Inscrever-se</button>
                                                </form>
                                            @else
                                                <span class="text-success">Já inscrito</span>
                                            @endif
                                            
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!-- End Row -->
                                <!-- ============================================================== -->
                                <!-- Start Page Content -->
                                <!-- ============================================================== -->
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Row -->
                                        <div class="row">
                                            <!-- column -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@include('base.footer.footer')
