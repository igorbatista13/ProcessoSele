<nav class="navbar top-navbar navbar-expand-md">
    <div class="navbar-header" data-logobg="skin6">
        <!-- This is for the sidebar toggle which is visible on mobile only -->
        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                class="ti-menu ti-close"></i></a>
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-brand">
            <!-- Logo Principal -->
            <a href="{{ asset('/') }}">
                <b class="logo-icon">
                    <!-- Dark Logo icon -->
                    
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQypzZmOZTGyNqKwyz-cArUPA3a1AIwxOfxUw&s"
                        width="80px" class="dark-logo" />
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQypzZmOZTGyNqKwyz-cArUPA3a1AIwxOfxUw&s"
                        width="80px" class="light-logo" />
                    <!-- Light Logo icon -->
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text">
                    <!-- dark Logo text -->
                    {{-- <img src="https://www3.seduc.mt.gov.br/image/layout_set_logo?img_id=8125250&t=1718007197077" alt="homepage" class="dark-logo" /> --}}
                    <!-- Light Logo text -->
                    {{-- <img src="https://www3.seduc.mt.gov.br/image/layout_set_logo?img_id=8125250&t=1718007197077" class="light-logo" alt="homepage" /> --}}
                </span>
            </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Toggle which is visible on mobile only -->
        <!-- ============================================================== -->
        <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
            data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
    </div>
    <!-- ============================================================== -->
    <!-- End Logo -->
    <!-- ============================================================== -->
   @include('base/topo/menuusuario')
</nav>
