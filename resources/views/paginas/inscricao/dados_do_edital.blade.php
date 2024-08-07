<div class="tab-pane fade show active" id="list-home" role="tabpanel"
aria-labelledby="list-home-list">



<div class="card">
    <div class="card-body">
        <h4 class="card-title">Informações do Edital</h4>
        <p class="card-text"> {{ $inscricao->vaga->titulo }}
        </p>
        <p class="card-text">
            {{ $inscricao->vaga->descricao }}</p>
        <p class="card-text"> {{ $inscricao->vaga->ano }}
        </p>
        <p class="card-text"> {{ $inscricao->vaga->cidade }}
        </p>
        <p class="card-text"> {{ $inscricao->vaga->estado }}
        </p>
        <p class="card-text"> {{ $inscricao->vaga->local }}
        </p>
        <p class="card-text"> {{ $inscricao->vaga->cargo }}
        </p>
        <p class="card-text"> {{ $inscricao->vaga->perfil }}
        </p>
        <p class="card-text"><small class="text-muted"></small></p>
    </div>
</div>



</div>