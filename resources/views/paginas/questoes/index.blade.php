@extends('base.header.header')
@section('content')

<div class="page-wrapper">
    <div class="container-fluid">
        <!-- Row -->
        <div class="row">
            <div class="col-12 mt-4">

                <div class="card">
                    <div class="card-body collapse show">
                        <h4 class="card-title">Questões da Página {{$pagina}}</h4>
                        <p class="card-text">Crie as questões para a página <b>{{$pagina}}  </b> do formulario.</p>
                            <a href="{{ route('paginas.questoes.create', ['pagina' => $pagina]) }}" class="btn btn-primary">Criar Nova Questão</a>

                    </div>
                </div>
            </div>
        </div>


    <table class="table mt-3">

        <tbody>
            @foreach ($questoes as $questao)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $questao->titulo }}</h5>
                    <p class="card-text">{{ $questao->descricao }}</p>
                    <a href="{{ route('paginas.questoes.edit', ['pagina' => $pagina, 'id' => $questao->id]) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('paginas.questoes.destroy', ['pagina' => $pagina, 'questao' => $questao->id]) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </div>
            </div>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
@include('base.footer.footer')
