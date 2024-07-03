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
                        <span><i class="icon-pencil mr-2 text-success"></i> <b>Local:</b>
                            {{ $vaga->local }} {{ $vaga->cidade }} - {{ $vaga->estado }}</span>
                    </li>
                    <li class="my-3">
                        <span><i class="icon-pencil mr-2 text-success"></i> <b>Perfil:</b>
                            {{ $vaga->perfil }}</span>
                    </li>
                    <li class="my-3">
                        <span><i class="icon-pencil mr-2 text-success"></i> <b>Cargo:</b>
                            {{ $vaga->cargo }}</span>
                    </li>
                    <li class="my-3">
                        <span><i class="icon-pencil mr-2 text-danger"></i> <b>Data Início:</b>
                            {{ $vaga->data_inicio }}</span>
                    </li>
                    <li class="my-3">
                        <span><i class="icon-date mr-2 text-danger"></i> <b>Data Fim:</b>
                            {{ $vaga->data_fim }}</span>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
