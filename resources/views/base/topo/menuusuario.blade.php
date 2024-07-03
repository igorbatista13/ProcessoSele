<div class="navbar-collapse collapse" id="navbarSupportedContent">
    <!-- ============================================================== -->
    <!-- toggle and nav items -->
    <!-- ============================================================== -->
    <ul class="navbar-nav float-right mr-auto ml-3 pl-1">
        <!-- Notification -->
        @include('base/topo/notificacoes')

    </ul>
    <!-- ============================================================== -->
    <!-- Right side toggle and nav items -->
    <!-- ============================================================== -->
    <ul class="navbar-nav float-right">
        <!-- ============================================================== -->
        <!-- User profile and search -->
        <!-- ============================================================== -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">

                @auth
                @if (Auth::user()->perfil && Auth::user()->perfil->image)
                    <img src="{{ asset('/images/perfil/' . Auth::user()->perfil->image) }}" width="50"
                        class="rounded-circle" alt="user">
                @else
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQypzZmOZTGyNqKwyz-cArUPA3a1AIwxOfxUw&s"
                        alt="user" class="rounded-circle" width="50">
                @endif



                <span class="ml-2 d-none d-lg-inline-block">

                        <span class="text-dark"> <span>Olá,</span> <b>{{ Auth::user()->name }}</b>
                            <i data-feather="chevron-down" class="svg-icon"></i>
                        </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                    <a class="dropdown-item" href="{{ asset('/perfil') }}"><i data-feather="user"
                            class="svg-icon mr-2 ml-1"></i>
                        Meu perfil</a>
                    <a class="dropdown-item" href="{{ asset('/minhas-inscricoes') }}"><i data-feather="file-text"
                            class="svg-icon mr-2 ml-1"></i>
                        Minhas Inscrições</a>
                    <a class="dropdown-item" href="{{ asset('/senha') }}"><i data-feather="settings"
                            class="svg-icon mr-2 ml-1"></i>
                        Alterar senha</a>
                    {{-- <a class="dropdown-item" href="{{ asset('/curriculo') }}"><i data-feather="mail"
                            class="svg-icon mr-2 ml-1"></i>
                        Meu Currículo</a> --}}
                    <div class="dropdown-divider"></div>
                    {{-- <a class="dropdown-item" href="{{ asset('/logout') }}"><i data-feather="settings"
                            class="svg-icon mr-2 ml-1"></i>
                        Banco de Talentos</a> 
                    <div class="dropdown-divider"></div>--}}
                    <a class="dropdown-item" href="{{ asset('/logout') }}"><i data-feather="power"
                            class="svg-icon mr-2 ml-1"></i>
                        Sair</a>
                    <div class="dropdown-divider"></div>
                    <div class="pl-4 p-3"><a href="{{ asset('/faq') }}" class="btn btn-sm btn-info">Dúvidas?</a>
                    </div>
                </div>
            @else
                <span class="text-dark"></span>
                <i data-feather="chevron-down" class="svg-icon"></i>

                <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                    <div class="pl-4 p-3"><a href="{{ asset('/login') }}" class="btn btn-sm btn-info">Faça o login
                            para continuar</a></div>
                </div>
            @endauth

        </li>
        <!-- ============================================================== -->
        <!-- User profile and search -->
        <!-- ============================================================== -->
    </ul>
</div>
