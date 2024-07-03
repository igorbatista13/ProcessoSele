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
                                    @if (Carbon\Carbon::parse($editais->data_fim)->lt($today))
                                        <button type="button" class="btn btn-danger">Encerrado</button>
                                    @else
                                        <a class="btn btn-warning text-dark">Em
                                            Andamento</a>
                                    @endif
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6 border-right">
                                            <ul class="list-style-none">
                                                {{-- <li class="my-2 border-bottom pb-3">
                                                    <span class="font-weight-medium text-dark"><i
                                                            class="icon-note mr-2 text-success"></i> Includes:</span>
                                                </li> --}}
                                                <li class="my-3">
                                                    <span><i class=" mr-2 text-success"></i> <b> Descrição:
                                                        </b>{{ $editais->descricao }}

                                                    </span>
                                                </li>
                                                <li class="my-3">
                                                    <span><i class=" mr-2 text-success"></i> <b> Local:
                                                        </b>{{ $editais->local }} {{ $editais->cidade }} -
                                                        {{ $editais->estado }}
                                                    </span>
                                                </li>
                                                <li class="my-3">
                                                    <span><i class=" mr-2 text-success"></i> <b> Perfil:
                                                        </b>{{ $editais->perfil }}

                                                    </span>
                                                </li>
                                                <li class="my-3">
                                                    <span><i class=" mr-2 text-success"></i> <b> Cargo:
                                                        </b>{{ $editais->cargo }}

                                                    </span>
                                                </li>
                                                <li class="my-3">
                                                    <span><i class="fa fa-calendar mr-2 text-success"></i> <b> Data Início:
                                                        </b>
                                                        {{ $editais->data_inicio }}</span>
                                                </li>
                                                <li class="my-3">
                                                    <span><i class="fa fa-calendar  mr-2 text-danger"></i> <b> Data Fim:
                                                        </b>
                                                        {{ $editais->data_fim }}</span>
                                                </li>
                                                <li class="my-3">                      
                                                    {{-- Aqui haverá um foreach com os documentos referente ao edital                             --}}
                                                        {{ $editais->anexo1 }}                                                        
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-style-none">
                                                <li class="my-2 border-bottom pb-3">
                                                    <span class="font-weight-medium text-dark">
                                                        @if (in_array($editais->modelo_formulario_id, [1, 2, 3, 4]))
                                                            @if (!in_array($editais->id, $userInscriptions))
                                                                @php
                                                                    $route = '';
                                                                    switch ($editais->modelo_formulario_id) {
                                                                        case 1:
                                                                            $route = 'inscricao1.form';
                                                                            break;
                                                                        case 2:
                                                                            $route = 'inscricao2.form';
                                                                            break;
                                                                        case 3:
                                                                            $route = 'inscricao3.form';
                                                                            break;
                                                                        case 4:
                                                                            $route = 'inscricao4.form';
                                                                            break;
                                                                    }
                                                                @endphp
                                                                <form action="{{ route($route, $editais->id) }}"
                                                                    method="GET">
                                                                    @csrf
                                                                    @auth
                                                                        @if ($userProfile && $userProfile->isComplete())
                                                                            <button type="submit"
                                                                                class="btn btn-success text-white">  <i class="icon-pencil mr-2 text-white"></i> INSCREVA-SE </button>
                                                                        @else
                                                                            <a href="{{ '/perfil' }}">
                                                                                <button type="button"
                                                                                    class="btn btn-warning">Preencha
                                                                                    o
                                                                                    seu perfil para se inscrever</button> </a>
                                                                        @endif
                                                                    @else
                                                                        <button type="submit" class="btn btn-primary">Faça o
                                                                            login para
                                                                            se Inscrever</button>
                                                                    @endauth
                                                                </form>
                                                            @endif
                                                        @endif



                                                    </span>
                                                </li>





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
