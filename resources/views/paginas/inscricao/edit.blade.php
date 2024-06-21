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
                                <tr>
                                    <td><a href="javascript:void(0)"
                                            class="font-weight-medium link">
                                        {{ $inscricao->vaga->titulo }}</a>
                                        {{ $inscricao->vaga->ano }}</a>
                                        {{ $inscricao->vaga->cidade }}</a>
                                        {{ $inscricao->vaga->estado }}</a>
                                        {{ $inscricao->vaga->local }}</a>
                                        {{ $inscricao->vaga->cargo }}</a>
                                        {{ $inscricao->vaga->perfil }}</a>
                                        {{ $inscricao->vaga->descricao }}</a>
                                        {{ $inscricao->vaga->status }}</a>
                                    </td>
                                    <td>{{ $inscricao->user->name }}</td>
                                    <td>{{ $inscricao->created_at }}</td>

                                </tr>
                            @endsection
                            @include('base.footer.footer')
