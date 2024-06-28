

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
      <div class="aiia-wizard-step">
        <h1>SOBRE O EDITAL</h1>
    
        <div class="step-content">
          <h4><b>Edital:</b> {{ $vaga->titulo }}</h4>
          <p>
            <h6><b>Descrição:</b> {{ $vaga->descrcicao }}</h6>
          </p>
          <div class="row">
            <div class="col-md-6 border-right">
              <ul class="list-style-none">
                <li class="my-3">
                  <span><i class="icon-pencil mr-2 text-success"></i> <b>Local:</b> {{ $vaga->local }} {{ $vaga->cidade }} - {{ $vaga->estado }}</span>
                </li>
                <li class="my-3">
                  <span><i class="icon-pencil mr-2 text-success"></i> <b>Perfil:</b> {{ $vaga->perfil }}</span>
                </li>
                <li class="my-3">
                  <span><i class="icon-pencil mr-2 text-success"></i> <b>Cargo:</b> {{ $vaga->cargo }}</span>
                </li>
                <li class="my-3">
                  <span><i class="icon-pencil mr-2 text-danger"></i> <b>Data Início:</b> {{ $vaga->data_inicio }}</span>
                </li>
                <li class="my-3">
                  <span><i class="icon-date mr-2 text-danger"></i> <b>Data Fim:</b> {{ $vaga->data_fim }}</span>
                </li>
                {{-- <li class="my-3">
                  <span><i class="icon-pencil mr-2 text-danger"></i> <b>Documentos:</b> {{ $vaga->anexo1 }}</span>
                </li> --}}
              </ul>
            </div>
          </div>
        </div>
        
    
          <div class="aiia-wizard-step">
   
   
            <h1>INFORMAÇÕES PESSOAIS</h1>

                     
          
             <div class="step-content">
              <div class="form-group">
                <label for="nome">Nome completo</label>
                <input type="text" class="form-control" id="nome" name="nome">
              </div>
              <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf">
              </div>
              <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" id="email" name="email">
              </div>
            
              <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone">
              </div>
              <div class="form-group">
                <label for="dre">DRE</label>
                <input type="text" class="form-control" id="dre" name="dre">
              </div>
              <div class="form-group">
                <label for="cidade">Município</label>
                <input type="text" class="form-control" id="cidade" name="cidade">
              </div>
              <div class="form-group">
                <label for="lotacao">Lotação</label>
                <input type="text" class="form-control" id="lotacao" name="lotacao">
              </div>
              <div class="form-group">
                <label for="formacao">Formação</label>
                <input type="text" class="form-control" id="formacao" name="formacao">
              </div>
            
         
            </div> 
          </div>
          <div class="aiia-wizard-step">
            <h1>BANCO DE TALENTOS</h1>
            <div class="step-content">
              <div class="form-group">
                <label for="bancotalento">Servidor está inscrito no <b> Banco de Talentos?</b> </label>
                <input type="checkbox" class="form-control" id="bancotalento" name="bancotalento">
                <label for="bancotalento">SIM</label> 
                <input type="checkbox" class="form-control" id="bancotalento" name="bancotalento">

                <label for="bancotalento">NÃO</label> 
              </div>
            </div>
          </div>
          <div class="aiia-wizard-step">
            <h1>ANEXOS</h1>
            <div class="step-content">
              <div class="form-group">
                <label for="bancotalento">Anexar em arquivo PDF único documento(os), confome o Edital <b> {Trazer dados do Edital aqui}</b> </label>
                <input type="file" class="form-control" id="bancotalento" name="bancotalento">
              </div>

              <pre>aa</pre>
            </div>
          </div>
          <div class="aiia-wizard-step">
            <h1>ÁREA E/OU DISCIPLINA</h1>
            <div class="step-content">
              <div class="form-group">
                <label for="area">Anexar em arquivo PDF único documento(os), confome o Edital <b> {Trazer dados do Edital aqui}</b> </label>
                <input type="checkbox" class="form-control" id="area" name="area">
                <label for="area"> 1</label>
              </div>
              <pre>TESTE</pre>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Inscrição</button>
          </form>
          </div>
          <div class="aiia-wizard-step">
            <h1>  FINALIZAR</h1>
            <div class="step-content">
             
              <pre>TESTE</pre>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Inscrição</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
  <script src="{{asset('/dist/js/pages/formulario/script.js')}}"></script>

  
