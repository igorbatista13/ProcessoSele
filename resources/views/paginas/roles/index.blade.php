@extends('base.header.header')

@section('content')
    <div class="page-wrapper">

        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">PERFIL </h4>
                            <b class="text-muted">
                                </h4>
                                <h6 class="card-subtitle">

                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#RolesCreate">
                                        <i class="icon-plus mr-2 text-light"></i> Novo
                                    </button>

                                    @include ('paginas/roles/create')


                                </h6>



                                <!-- Table with stripped rows -->
                                <div class="table-responsive">
                                    <table class="table">
                    <thead>
                        <tr>
                            <th>Nome do perfil</th>
                            <th>Ações</th>
                          
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($roles as $key => $role)
                        <tr>
               
                           <td>{{ $role->name }}</td>
                          <td>
            @can('role-edit')
                <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Editar</a>
            @endcan
            @can('role-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Deletar', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            @endcan
        </td>
    </tr>
    @endforeach
</table>
                
            </div>
        </div>
        
</div>

@endsection
@include('base.footer.footer')
