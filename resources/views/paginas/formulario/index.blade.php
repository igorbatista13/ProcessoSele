<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - aiiaWizard - jQuery plugin</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://bootswatch.com/lumen/bootstrap.min.css'>

<link rel="stylesheet" href="{{ asset('/assets/formulario/style.css') }}">


</head>
<body>
<!-- partial:index.partial.html -->
<div class="outer-container">
    <div id="wizard" class="aiia-wizard" style="display: none;">
      
        <div class="aiia-wizard-step">
            <h1>Informações </h1>
            <div class="step-content">

                
                <h4> <b> Edital: </b>  {{ $vaga->titulo }} </h4>
                <p>
                   <h6> <b> Descrição: </b> {{ $vaga->descrcicao }} </h6>
                </p>
              
                <div class="row">
                    <div class="col-md-6 border-right">
                        <ul class="list-style-none">
                            {{-- <li class="my-2 border-bottom pb-3">
                                <span class="font-weight-medium text-dark"><i
                                        class="icon-note mr-2 text-success"></i> Includes:</span>
                            </li> --}}
                            <li class="my-3">
                                <span><i class="icon-pencil mr-2 text-success"></i> <b> Local:
                                    </b>{{ $vaga->local }} {{ $vaga->cidade }} -
                                    {{ $vaga->estado }}
                                </span>
                            </li>
                            <li class="my-3">
                                <span><i class="icon-pencil mr-2 text-success"></i> <b> Perfil:
                                    </b>{{ $vaga->perfil }}

                                </span>
                            </li>
                            <li class="my-3">
                                <span><i class="icon-pencil mr-2 text-success"></i> <b> Cargo:
                                    </b>{{ $vaga->cargo }}

                                </span>
                            </li>
                            <li class="my-3">
                                <span><i class="icon-pencil mr-2 text-danger"></i> <b> Data Início </b>
                                    {{ $vaga->data_inicio }}</span>
                            </li>
                            <li class="my-3">
                                <span><i class="icon-date mr-2 text-danger"></i> <b> Data Fim </b>
                                    {{ $vaga->data_fim }}</span>
                            </li>
                            <li class="my-3">
                                <span><i class="icon-pencil mr-2 text-danger"></i> <b> Documentos </b>
                                    {{ $vaga->anexo1 }}</span>
                            </li>
                        </ul>
                    </div>
            </div>
        </div>

        <div class="aiia-wizard-step">
            <h1>Informações Pessoais</h1>
            <div class="step-content">
               
                    <form action="{{ route('inscricoes.store', $vaga->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
 
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" required>
                    </div>
                    <!-- Adicione mais campos conforme necessário -->
                    <button type="submit" class="btn btn-primary">Enviar Inscrição</button>
               
                    @foreach($questoes as $questao)
                    <div class="form-group">
                        <label for="questao_{{ $questao->id }}">{{ $questao->titulo }}</label>
                        <textarea name="questao_{{ $questao->id }}" id="questao_{{ $questao->id }}" class="form-control"></textarea>
                    </div>
                    @endforeach
                </form>
            </div>
        </div>



        <div class="aiia-wizard-step">
            <h1>Methods</h1>
            <div class="step-content">
                This plugin allows you to interract with it or to retrieve some information from. The following methods are available:
                <ul>
                    <li>isFinalElementShown,</li>
                    <li>Voltar,</li>
                    <li>Próximo,</li>
                    <li>first,</li>
                    <li>getActiveStep</li>
                </ul>
            </div>
        </div>

        <div class="aiia-wizard-step">
            <h1>Callbacks</h1>
            <div class="step-content">
                As any good plugin, this one allows you to run your code when the plugin does something. This is a list of currently available  callbacks:
                

                <pre>
$("#wizard").aiiaWizard({
    onInitSuccess: function () {
        //alert("init success");
    },
    onSlideLeftLimitReached: function () {
        //alert("onSlideLeftLimitReached success");
    },
    onSlideLeftFinished: function () {
        //alert("onSlideLeftFinished success");
    },
    onSlideRightLimitReached: function () {
        //alert("onSlideRightLimitReached success");
    },
    onSlideRightFinished: function () {
        //alert("onSlideRightFinished success");
    },
    onButtonPreviousClick: function () {
        // Instead of just sliding to the previous step when clicking the "previous" button, you can override this functionality instead.
        // By doing that you must then explixitly call the "previous" plugin method as shown below if you want to slide to the previous step.
        alert("onButtonPreviousClick");
        $("#wizard").aiiaWizard('previous');
    },
    onButtonNextClick: function () {
        // Instead of just sliding to the next step when clicking the "next" button, you can override this functionality instead.
        // By doing that you must then explixitly call the "next" plugin method as shown below if you want to slide to the next step.
        alert("onButtonNextClick");
        $("#wizard").aiiaWizard('next');
    }
});               
                </pre>
            </div>
        </div>

    </div>
</div>
<!-- partial -->

  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>  
  <script src="{{asset('/dist/js/pages/formulario\script.js')}}"></script>

</body>
</html>
