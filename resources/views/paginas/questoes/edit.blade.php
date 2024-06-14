@extends('base.header.header')
@section('content')


<div class="page-wrapper">
    <div class="container-fluid">
            <h1>Editar Questão</h1>
            <form action="{{ route('paginas.questoes.update', ['pagina' => $pagina, 'id' => $questao->id]) }}" method="POST">

        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $questao->titulo }}" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control">{{ $questao->descricao }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
@include('base.footer.footer')
