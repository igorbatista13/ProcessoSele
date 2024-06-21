@extends('base.header.header')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <!-- Row -->
            <div class="row">
                <div class="col-12 mt-4">

                    <div class="card">
                        <div class="card-body collapse show">
                            <h4 class="card-title">Minhas Inscrições</h4>
                            <p class="card-text"> Confira aqui as suas inscrições.</p>
                        </div>
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
                        @foreach ($inscricao as $data)
                            <div class="col-lg-3 col-md-6">
                                <!-- Card -->
                                <div class="card">
                                    {{-- <img class="card-img-top img-fluid" src="{{ Storage::url($data->image) }}"
                                        alt="Card image cap"> --}}
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $data->vaga->titulo }}</h4>
                                        <p class="card-text">{{ $data->vaga->descricao }}</p>
                                        <a href="{{ route('editais.show', $data->id) }}" class="btn btn-primary">Ver
                                            Edital</a>
                                        <a href="{{ route('editais.show', $data->id) }}" class="btn btn-warning">
                                            Em andamento</a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@include('base.footer.footer')
