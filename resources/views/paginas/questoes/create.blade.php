@extends('base.header.header')
@section('content')


<div class="page-wrapper">
    <div class="container-fluid">
        <h1>Adicionar Questão</h1>
        <form action="{{ route('paginas.questoes.store', ['pagina' => $pagina]) }}" method="POST">
            @csrf
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" required>
        </div>
        {{-- <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao" class="form-control"></textarea>
        </div> --}}
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
@include('base.footer.footer')
