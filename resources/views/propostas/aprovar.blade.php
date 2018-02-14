@extends('layouts.app')

@section('active2')
    active
@endsection
@section('content')
    <table class="table">
        <tr>
            <th>Nome Aluno</th>
            <th>Titulo do Trabalho</th>
            <th>Orientador</th>
            <th>Data de solicitação</th>
            <th>Visualizar/Aprovar Proposta </th>>
        </tr>

        @foreach ($propostas as $proposta)
            <tr>
                <td>{{ $proposta->nomealuno}}</td>
                <td>{{$proposta->titulo }}</td>
                <td>{{$proposta->orientador }}</td>
                <td>{{$proposta->created_at }}</td>
                <td><div class="form-horizontal form-group">
                        <a class="button btn btn-success" href="{{ url('aprovarproposta/'.$proposta->id) }}"}> Aprovar Proposta </a>
                        <a class="button btn btn-warning" target="_blank" href="{{url('verproposta/'.$proposta->id)}}"> Visualizar Proposta </a>


                    </div></td>
            </tr>
        @endforeach
    </table>
@endsection