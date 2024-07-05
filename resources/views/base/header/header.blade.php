<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <title>Processo Seletivo SEDUC - MT</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/extra-libs/c3/c3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/libs/chartist/dist/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/dist/css/style.min.css') }}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<style>

    .card-img-top {
      width: 60%;
      border-radius: 10%;
      margin: 0 auto;
      box-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
    }
    .card-img-top1 {
      width: 60%;
      border-radius: 50%;
      margin: 0 auto;
      box-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
    }
    .card {
      padding: 1.5em 0.5em 0.5em;
      text-align: center;
      border-radius: 2em;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    .my-3 {
        text-align: left !important;
    }
    .card-title {
      font-weight: bold;
      font-size: 1.5em;
    }
    .btn-primary {
      border-radius: 2em;
      padding: 0.5em 1.5em;
    }
    .btn-warning {
      border-radius: 2em;
      padding: 0.5em 1.5em;
    }
    .btn-light {
      border-radius: 2em;
      padding: 0.5em 1.5em;
    }
    .btn-danger {
      border-radius: 2em;
      padding: 0.5em 1.5em;
    }
    .btn-success {
      border-radius: 2em;
      padding: 0.5em 1.5em;
    }
    pre {
        white-space: pre-wrap;       /* CSS 3 */
        white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
        white-space: -pre-wrap;      /* Opera 4-6 */
        white-space: -o-pre-wrap;    /* Opera 7 */
        word-wrap: break-word;       /* Internet Explorer 5.5+ */
    }

</style>
<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            
            @include('base.topo.topo')

        </header>
            @include('base.menu.menu')

        @yield('content')
                
        
    </div>
  


    
