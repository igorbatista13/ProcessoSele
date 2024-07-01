@extends('base.header.header')
@section('content')
    <div class="page-wrapper">
        <div class="container-fluid">
            <!-- Row -->
            <div class="row">
                <div class="col-12 mt-4">

                    <div class="card">
                        <div class="card-body collapse show">
                            <h4 class="card-title">Editais abertos</h4>
                            <p class="card-text">Confira aqui os Editais abertos</p>
                            <a href="{{ '/editais/create' }}">
                                <button class="btn btn-primary">Novo</button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Row -->
                    <div class="row">
                        <!-- column -->
                        @foreach ($inscricao as $data)
                            <div class="col-lg-3 col-md-6">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="{{ Storage::url($data->image) }}"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $data->titulo }}</h4>
                                        <p class="card-text">{{ $data->descricao }}</p>
                                        <a href="{{ route('editais.show', $data->id) }}" class="btn btn-primary">Ver
                                            Edital</a>
                                        @if (!in_array($data->id, $userInscriptions))
                                        @else
                                            <span class="badge bg-success font-16 text-white  badge-pill ml-0 d-md-none d-lg-block">INSCRITO</span>
                                    
                        @endif
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
