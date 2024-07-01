<div class="tab-pane show active" id="home">
  
    <h5 class="card-title"></h5>

    <div class="row">
      <div class="col-lg-3 col-md-4 label"> <b> Nome Completo: </b> </div>
      <div class="col-lg-9 col-md-8">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->name }}}</div>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-4 label"><b>Órgão: </b></div>
      <div class="col-lg-9 col-md-8">{{ Auth::user()->perfil->Orgao ?? ''}}</div>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-4 label"><b>País:</b></div>
      <div class="col-lg-9 col-md-8">Brasil</div>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-4 label"><b>Endereço:</b></div>
      <div class="col-lg-9 col-md-8">{{ Auth::user()->perfil->Endereco ?? ''}}</div>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-4 label"><b>Estado:</b></div>
      <div class="col-lg-9 col-md-8">{{ Auth::user()->perfil->Estado ?? ''}}</div>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-4 label"><b>Cidade:</b></div>
      <div class="col-lg-9 col-md-8">{{ Auth::user()->perfil->Cidade ?? '' }}</div>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-4 label"> <b>Telefone:</b></div>
      <div class="col-lg-9 col-md-8">{{ Auth::user()->perfil->Telefone ?? '' }}</div>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-4 label"> <b> E-mail:</b></div>
      <div class="col-lg-9 col-md-8">{{{ isset(Auth::user()->email) ? Auth::user()->email : Auth::user()->email }}}</div>
    </div>

  </div>