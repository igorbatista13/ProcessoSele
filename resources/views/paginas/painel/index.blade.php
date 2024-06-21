@extends('base.header.header')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Olá, {{ Auth::user()->name }}</h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="index.html">Painel</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
 
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- *************************************************************** -->
            <!-- Start First Cards -->
            <!-- *************************************************************** -->
            <div class="card-group">
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-dark mb-1 font-weight-medium">5</h2>
                                  
                                </div>
                                <h5 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Processos Seletivos</h5>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="file"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                        class="set-doller"></sup>2</h2>
                                <h5 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Minhas Inscrições
                                </h5>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="file"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h3 class="text-primary mb-1 font-weight-medium">Meu Perfil</h3>
                                  
                                </div>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Edite as suas informações</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="file"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <h3 class="text-dark mb-1 font-weight-medium">Banco de Talentos</h3>
                                <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Texto sobre o banco de talentos</h6>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                @foreach ($inscricao as $data)
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- Card -->
                                <div class="card">
                                    {{-- <img class="card-img-top img-fluid" src="{{ Storage::url($data->image) }}"
                                        alt="Card image cap"> --}}

                                    <img class="card-img-top img-fluid"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQypzZmOZTGyNqKwyz-cArUPA3a1AIwxOfxUw&s"
                                        alt="Card image cap" width="100px">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $data->titulo }}</h4>
                                        <p class="card-text">{{ $data->descricao }}</p>
                                        <a href="{{ route('editais.show', $data->id) }}" class="btn btn-primary">Ver
                                            Edital</a>
                                        @if (!in_array($data->id, $userInscriptions))
                                        @else
                                        <div class="d-inline-flex align-items-center">
                                            <span
                                                class="badge bg-success font-12 text-white font-weight-medium badge-pill ml-2 d-md-none d-lg-block">INSCRITO</span>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
   
@endsection
@include('base.footer.footer')
