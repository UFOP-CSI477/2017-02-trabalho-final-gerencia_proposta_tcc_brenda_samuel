@extends('layouts.app')

@section('active3')
    active
@endsection
@section('content')
    <table class="table">
        <tr>
            <th>Nome Aluno</th>
            <th>Titulo do Trabalho</th>
            <th>Orientador</th>
            <th>Data de solicitação</th>
            <th>Aprovada</th>
            <th>Visualizar/Excluir Proposta </th>>
        </tr>

        @foreach ($propostas as $proposta)
            <tr>
                <td>{{ $proposta->nomealuno}}</td>
                <td>{{$proposta->titulo }}</td>
                <td>{{$proposta->orientador }}</td>
                <td>{{$proposta->created_at }}</td>
                <td>
                    @if($proposta->proposta_aprovada)
                        Sim
                        @else
                        Não
                    @endif
                </td>>
                <td><div class="form-horizontal form-group">
                        <a class="button btn btn-warning" target="_blank" href="{{url('verproposta/'.$proposta->id)}}"> Visualizar Proposta </a>
                        <a class="button btn btn-danger" href="{{url('deleteproposta/'.$proposta->id)}}"> Exclui Proposta </a>

                    </div></td>
            </tr>
        @endforeach
    </table>
@endsection