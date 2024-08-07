@extends('base.header.header')
@section('content')
    <div class="page-wrapper">

        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-12">

                    <div class="row">
                        <div class="col-12 mt-4">
                            <!-- Card -->
                            <div class="card text-center">
                                <div class="card-header">
                                    Análise de Inscrição - Candidado:  {{ $inscricao->user->name }}
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"> <b> Título </b> {{ $inscricao->vaga->titulo }}</h4>
                                    <p class="card-text"><b> Descrição:  </b> {{ $inscricao->vaga->descricao }}</p>
                                    <a href="javascript:void(0)" class="btn btn-info">Botão</a>
                                </div>
                                <div class="card-footer text-muted">
                                  <b> Data: </b>  {{ $inscricao->created_at }}
                                </div>
                            </div>
                            <!-- Card -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">

                                <div class="col-md-12 mt-4">

                                    <div class="col-md-12 mt-4">
                                        <div class="row">
                                            <div class="col-2">
                                                <div class="list-group" id="list-tab" role="tablist">
                                                    <a class="list-group-item list-group-item-action active"
                                                        id="list-home-list" data-toggle="list" href="#list-home"
                                                        role="tab" aria-controls="home">1. Dados do Edital</a>
                                                    <a class="list-group-item list-group-item-action" id="list-profile-list"
                                                        data-toggle="list" href="#list-profile" role="tab"
                                                        aria-controls="profile">2. Dados do candidato</a>
                                                    <a class="list-group-item list-group-item-action"
                                                        id="list-messages-list" data-toggle="list" href="#list-messages"
                                                        role="tab" aria-controls="messages">3. Ações</a>
                                                </div>
                                            </div>
                                            <div class="col-10">


                                                <div class="tab-content" id="nav-tabContent">
                                                    
                                                    @include('paginas/inscricao/dados_do_edital')
                                             
                                                    @include('paginas/inscricao/dados_candidato')
                                                    
                                                    @include('paginas/inscricao/acoes')


                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                          
            @endsection
            @include('base.footer.footer')
