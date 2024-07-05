@extends('base.header.header')
@section('content')
    <div class="page-wrapper">

        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">PROCESSOS SELETIVOS / EDITAIS
                                <b class="text-muted">
                            </h4>
                            <h6 class="card-subtitle">

                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">

                                                        <div class="col-md-8 mt-4">
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <div class="list-group" id="list-tab" role="tablist">
                                                                        <a class="list-group-item list-group-item-action active"
                                                                            id="list-home-list" data-toggle="list"
                                                                            href="#list-home" role="tab"
                                                                            aria-controls="home">Dados do Edital</a>
                                                                        <a class="list-group-item list-group-item-action"
                                                                            id="list-profile-list" data-toggle="list"
                                                                            href="#list-profile" role="tab"
                                                                            aria-controls="profile">Dados Pessoais</a>
                                                                        <a class="list-group-item list-group-item-action"
                                                                            id="list-messages-list" data-toggle="list"
                                                                            href="#list-messages" role="tab"
                                                                            aria-controls="messages">Ações</a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-8">
                                                                    <div class="tab-content" id="nav-tabContent">
                                                                        <div class="tab-pane fade show active"
                                                                            id="list-home" role="tabpanel"
                                                                            aria-labelledby="list-home-list">
                                                                            <h4 class="card-title">
                                                                                {{ $inscricao->vaga->titulo }}</h4>
                                                                            <ul>
                                                                                <li> {{ $inscricao->vaga->ano }}</a>
                                                                                <li> {{ $inscricao->vaga->cidade }}</a>
                                                                                <li> {{ $inscricao->vaga->estado }}</a>
                                                                                <li> {{ $inscricao->vaga->local }}</a>
                                                                                <li> {{ $inscricao->vaga->cargo }}</a>
                                                                                <li> {{ $inscricao->vaga->perfil }}</a>
                                                                                <li> {{ $inscricao->vaga->descricao }}</a>
                                                                                <li> {{ $inscricao->vaga->status }}</a>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="tab-pane fade" id="list-profile"
                                                                            role="tabpanel"
                                                                            aria-labelledby="list-profile-list">
                                                                            <h4 class="card-title">
                                                                                {{ $inscricao->user->name }}</h4>

                                                                        </div>
                                                                        <div class="tab-pane fade" id="list-messages"
                                                                            role="tabpanel"
                                                                            aria-labelledby="list-messages-list">
                                                                            Irure enim occaecat labore sit qui aliquip
                                                                            reprehenderit amet
                                                                            velit. Deserunt ullamco ex elit nostrud ut
                                                                            dolore nisi officia
                                                                            magna sit occaecat laboris sunt dolor.
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <tr>
                                                <td><a href="javascript:void(0)" class="font-weight-medium link">
                                                        {{ $inscricao->vaga->titulo }}</a>

                                                </td>
                                                <td>{{ $inscricao->user->name }}</td>
                                                <td>{{ $inscricao->created_at }}</td>

                                            </tr>
                                        @endsection
                                        @include('base.footer.footer')
