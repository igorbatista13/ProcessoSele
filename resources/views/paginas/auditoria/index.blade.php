@extends('base.header.header')

@section('content')


    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-7 align-self-center">
                    <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">
                        <span class="text-dark"> {{ $titulo }}</span>
                    </h3>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                {{-- <li class="breadcrumb-item"><a>Seja bem vindo ao Processo Seletivo SEDUC - MT</a> --}}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>

        <div class="container-fluid">

            <table class="table">
                <thead>
                    <tr>

                        <th>Usuário</th>
                        <th>Evento</th>
                        <th>Model</th>
                        <th>Data</th>
                        <th>IP</th>
                        <th>Navegador</th>
                        <th>Alterações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($audits as $audit)
                        <tr>
                            <td>{{ $audit->user->name ?? 'System' }}</td>
                            <td>{{ $audit->event }}</td>
                            <td>{{ $audit->auditable_type }} ({{ $audit->auditable_id }})</td>
                            <td>{{ $audit->created_at->format('d/m/Y H:i:s') }}</td>
                            <td>{{ $audit->ip_address }}</td>
                            <td>{{ $audit->user_agent }}</td>
                            <td>
                                <button type="button" class="btn btn-secondary" onclick="showJsonModal({{ json_encode($audit->new_values) }})">
                                    Ver Dados
                                </button>
                                @include('paginas/auditoria/modal')
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('base.footer.footer')
        <script>
            function showJsonModal(jsonData) {
                let formattedJson = '';
                for (const key in jsonData) {
                    if (jsonData.hasOwnProperty(key)) {
                        formattedJson += `<strong>${key}:</strong> ${jsonData[key]}<br>`;
                    }
                }
                document.getElementById('jsonContent').innerHTML = formattedJson;
                $('#jsonModal').modal('show');
            }
            </script>
            
    @endsection
