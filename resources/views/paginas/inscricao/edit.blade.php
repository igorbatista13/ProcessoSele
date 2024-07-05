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

                                                        <div class="col-md-12 mt-4">
                                                            <div class="row">
                                                                <div class="col-3">
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
                                                                <div class="col-4">
                                                                    <div class="tab-content" id="nav-tabContent">
                                                                        <div class="tab-pane fade show active"
                                                                            id="list-home" role="tabpanel"
                                                                            aria-labelledby="list-home-list">

                                                                            <div class="col-md-6 col-lg-12">
                                                                                <div class="card">
                                                                                    <div class="card-body">
                                                                                        <h4 class="card-title">Recent
                                                                                            Activity</h4>
                                                                                        <div class="mt-4 activity">
                                                                                            <div
                                                                                                class="d-flex align-items-start border-left-line pb-3">
                                                                                                <div>
                                                                                                    <a href="javascript:void(0)"
                                                                                                        class="btn btn-info btn-circle mb-2 btn-item">
                                                                                                        <i
                                                                                                            data-feather="shopping-cart"></i>
                                                                                                    </a>
                                                                                                </div>
                                                                                                <div class="ml-3 mt-2">
                                                                                                    <h5
                                                                                                        class="text-dark font-weight-medium mb-2">
                                                                                                        New Product Sold!
                                                                                                    </h5>
                                                                                                    <p
                                                                                                        class="font-14 mb-2 text-muted">
                                                                                                        John Musa just
                                                                                                        purchased <br>
                                                                                                        Cannon 5M
                                                                                                        Camera.
                                                                                                    </p>
                                                                                                    <span
                                                                                                        class="font-weight-light font-14 text-muted">10
                                                                                                        Minutes Ago</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="d-flex align-items-start border-left-line pb-3">
                                                                                                <div>
                                                                                                    <a href="javascript:void(0)"
                                                                                                        class="btn btn-danger btn-circle mb-2 btn-item">
                                                                                                        <i
                                                                                                            data-feather="message-square"></i>
                                                                                                    </a>
                                                                                                </div>
                                                                                                <div class="ml-3 mt-2">
                                                                                                    <h5
                                                                                                        class="text-dark font-weight-medium mb-2">
                                                                                                        New Support Ticket
                                                                                                    </h5>
                                                                                                    <p
                                                                                                        class="font-14 mb-2 text-muted">
                                                                                                        Richardson just
                                                                                                        create support <br>
                                                                                                        ticket</p>
                                                                                                    <span
                                                                                                        class="font-weight-light font-14 text-muted">25
                                                                                                        Minutes Ago</span>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="d-flex align-items-start border-left-line">
                                                                                                <div>
                                                                                                    <a href="javascript:void(0)"
                                                                                                        class="btn btn-cyan btn-circle mb-2 btn-item">
                                                                                                        <i
                                                                                                            data-feather="bell"></i>
                                                                                                    </a>
                                                                                                </div>
                                                                                                <div class="ml-3 mt-2">
                                                                                                    <h5
                                                                                                        class="text-dark font-weight-medium mb-2">
                                                                                                        Notification Pending
                                                                                                        Order!
                                                                                                    </h5>
                                                                                                    <p
                                                                                                        class="font-14 mb-2 text-muted">
                                                                                                        One Pending order
                                                                                                        from Ryne <br> Doe
                                                                                                    </p>
                                                                                                    <span
                                                                                                        class="font-weight-light font-14 mb-1 d-block text-muted">2
                                                                                                        Hours
                                                                                                        Ago</span>
                                                                                                    <a href="javascript:void(0)"
                                                                                                        class="font-14 border-bottom pb-1 border-info">Load
                                                                                                        More</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-4">
                                                                                    <h4 class="card-title">
                                                                                        {{ $inscricao->vaga->titulo }}</h4>

                                                                                    <ul class="list-style-none">
                                                                                        <li><a href="javascript:void(0)"><i
                                                                                                    class="fa fa-chevron-right"></i>
                                                                                                Ano:
                                                                                                {{ $inscricao->vaga->ano }}</a>
                                                                                        </li>
                                                                                        <li><a href="javascript:void(0)"><i
                                                                                                    class="fa fa-chevron-right"></i>
                                                                                                {{ $inscricao->vaga->cidade }}</a>
                                                                                        </li>
                                                                                        <li><a href="javascript:void(0)"><i
                                                                                                    class="fa fa-chevron-right"></i>
                                                                                                {{ $inscricao->vaga->estado }}
                                                                                            </a>
                                                                                        </li>
                                                                                        <li><a href="javascript:void(0)"><i
                                                                                                    class="fa fa-chevron-right"></i>
                                                                                                {{ $inscricao->vaga->local }}
                                                                                            </a>
                                                                                        </li>
                                                                                        <li><a href="javascript:void(0)"><i
                                                                                                    class="fa fa-chevron-right"></i>
                                                                                                {{ $inscricao->vaga->cargo }}
                                                                                            </a>
                                                                                        </li>
                                                                                        <li><a href="javascript:void(0)"><i
                                                                                                    class="fa fa-chevron-right"></i>
                                                                                                {{ $inscricao->vaga->perfil }}
                                                                                            </a>
                                                                                        </li>
                                                                                        <li><a href="javascript:void(0)"><i
                                                                                                    class="fa fa-chevron-right"></i>
                                                                                                {{ $inscricao->vaga->descricao }}
                                                                                            </a>
                                                                                        </li>
                                                                                        <li><a href="javascript:void(0)"><i
                                                                                                    class="fa fa-chevron-right"></i>
                                                                                                {{ $inscricao->vaga->status }}
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="list-profile"
                                                                        role="tabpanel" aria-labelledby="list-profile-list">
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
