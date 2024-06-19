@extends('base.header.header')
@section('content')

    @foreach ($inscricao as $data)
        <tbody>
            <tr>
                <td><span class="badge badge-light-warning">{{ $data }}</span></td>
                <td><a href="javascript:void(0)" class="font-weight-medium link">{{ $data->vaga->titulo }}</a></td>
                <td><a href="javascript:void(0)" class="font-bold link">{{ $data->id }}</a></td>
                <td>{{ $data->user->name }}</td>
                <td>{{ $data->created_at }}</td>
                <td>
                    <a class="sidebar-link" href="{{ route('inscricoes.edit', $data->id) }}" aria-expanded="false">
                        <i data-feather="tag" class="feather-icon"> </i>
                        <span class="hide-menu">Analisar
                        </span>
                    </a>
            </tr>
    @endforeach

@include('base.footer.footer')
