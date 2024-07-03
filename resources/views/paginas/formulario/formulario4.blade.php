<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="https://bootswatch.com/lumen/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('/assets/formulario/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/formulario/style.css') }}">

<div class="page-wrapper">
    <div class="container-fluid">
        <form action="{{ route('inscricoes.store', $vaga->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- partial:index.partial.html -->
            <div class="outer-container">
                <div id="wizard" class="aiia-wizard">
                    

                    @include('paginas/formulario/sobre')
                    @include('paginas/formulario/infopessoal')
                    @include('paginas/formulario/area')
                    @include('paginas/formulario/anexos')
                    @include('paginas/formulario/finalizar')

        </form>
    </div>
    </form>
</div>
</div>
</div>
<!-- partial -->
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src="{{ asset('/dist/js/pages/formulario/script.js') }}"></script>
