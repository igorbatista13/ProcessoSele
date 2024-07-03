<div class="aiia-wizard-step">


    <h1>INFORMAÇÕES PESSOAIS</h1>



    <div class="step-content">
        <div class="form-group">
            <label for="nome">Nome completo: </label>
            {{ Auth::user()->name ?? '' }}
        </div>
        <div class="form-group">
            <label for="nome">E-mail: </label>
            {{ Auth::user()->email ?? '' }}
        </div>
        <div class="form-group">
            <label for="cpf">CPF: </label>
            {{ Auth::user()->perfil->cpf ?? '' }}
        </div>
    
        <div class="form-group">
            <label for="cpf">RG: </label>
            {{ Auth::user()->perfil->rg ?? '' }}
        </div>
            <div class="form-group">
            <label for="telefone">Telefone: </label>
            {{ Auth::user()->perfil->telefone ?? '' }}
        </div>
        <div class="form-group">
            <label for="dre">DRE: </label>
            {{ Auth::user()->perfil->dre ?? '' }}
        </div>
        <div class="form-group">
            <label for="cidade">Município: </label>
            {{ Auth::user()->perfil->cidade ?? '' }} - {{ Auth::user()->perfil->estado ?? '' }}

        </div>
        <div class="form-group">
            <label for="lotacao">Lotação: </label>
            {{ Auth::user()->perfil->lotacao ?? '' }} 
        </div>
        <div class="form-group">
            <label for="formacao">Formação: </label>
            {{ Auth::user()->perfil->escolaridade ?? '' }} 
        </div>


    </div>
</div>
