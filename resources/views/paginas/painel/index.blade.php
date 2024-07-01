@extends('base.header.header')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">
                        @auth
                            <span class="text-dark"> {{ Auth::user()->name }}</span>
                        @else
                            <span class="text-dark"> Olá!</span>
                        @endauth
                    </h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a>Seja bem vindo ao Processo Seletivo SEDUC - MT</a>
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
        @include('paginas/painel/menucard')

            <div class="row">

                @foreach ($inscricao as $data)
                    <div class="col-lg-3 col-md-12">
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
                                                class="badge bg-success font-16 text-white badge-pill ml-0 d-md-none d-lg-block">INSCRITO</span>
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
    @include('base.footer.footer')
@endsection
