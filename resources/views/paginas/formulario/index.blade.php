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
        <form action="{{ route('inscricoes.store', $vaga->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="aiia-wizard-step">
            <h1>Informações Pessoais (Página 1)</h1>
            <div class="step-content">
               
           
 
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" required>
                    </div>
                    <!-- Adicione mais campos conforme necessário -->
               
                    @foreach($questoesPagina1 as $questao)
                    <div class="form-group">
                        <label for="questao_{{ $questao->id }}">{{ $questao->titulo }}</label>
                        <textarea name="questao_{{ $questao->id }}" id="questao_{{ $questao->id }}" class="form-control"></textarea>
                    </div>
                    @endforeach

            </div>
        </div>



        <div class="aiia-wizard-step">
            <h1>Pagina 2</h1>
            <div class="step-content">
                @foreach($questoesPagina2 as $questao)
                <div class="form-group">
                    <label for="questao_{{ $questao->id }}">{{ $questao->titulo }}</label>
                    <textarea name="questao_{{ $questao->id }}" id="questao_{{ $questao->id }}" class="form-control"></textarea>
                </div>
                @endforeach
            </div>
        </div>

        <div class="aiia-wizard-step">
            <h1>Página 3</h1>
            <div class="step-content">
                @foreach($questoesPagina3 as $questao)
                <div class="form-group">
                    <label for="questao_{{ $questao->id }}">{{ $questao->titulo }}</label>
                    <textarea name="questao_{{ $questao->id }}" id="questao_{{ $questao->id }}" class="form-control"></textarea>
                </div>
                @endforeach                

                <pre>
        TESTE
                </pre>
            </div>
        </div>
        <div class="aiia-wizard-step">
            <h1>Página 4</h1>
            <div class="step-content">
                @foreach($questoesPagina4 as $questao)
                <div class="form-group">
                    <label for="questao_{{ $questao->id }}">{{ $questao->titulo }}</label>
                    <textarea name="questao_{{ $questao->id }}" id="questao_{{ $questao->id }}" class="form-control"></textarea>
                </div>
                @endforeach                

                <pre>
         TESTE
                </pre>
            </div>
        </div>
        <div class="aiia-wizard-step">
            <h1>Página 5</h1>
            <div class="step-content">
                @foreach($questoesPagina5 as $questao)
                <div class="form-group">
                    <label for="questao_{{ $questao->id }}">{{ $questao->titulo }}</label>
                    <textarea name="questao_{{ $questao->id }}" id="questao_{{ $questao->id }}" class="form-control"></textarea>
                </div>
                @endforeach                

                <pre>
         TESTE
                </pre>
            </div>
        </form>
        <button type="submit" class="btn btn-primary">Enviar Inscrição</button>
    </div>

    </div>
</div>
<!-- partial -->

  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>  
  <script src="{{asset('/dist/js/pages/formulario\script.js')}}"></script>

</body>
</html>
