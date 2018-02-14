@extends('layouts.empty')

@section('active4')
    active
@endsection
@section('content')
    <div style="">
        <div  class="center-block" >
            <h3>Nome:</h3>
            <p class="lead">
                {{ $proposta[0]->nomealuno }}
            </p>
            <h3>Matricula:</h3>
            <p class="lead">{{ $proposta[0]->matricula }}
            </p>
            <h3>Orientação</h3>
            <p class="lead">
                {{ $proposta[0]->orientador }}
                </br>{{$proposta[0]->coorientador}}
            </p>


            <h3>Disciplina:</h3>
            <p class="lead">
                @if($proposta[0]->tipotcc==1)
                    TCC1
                @else
                    TCC2
                @endif
            </p>
            <h3>Titulo:</h3>
            <p class="lead">
                {{ $proposta[0]->titulo }}
            </p>
            <h3>Tema:</h3>
            <p class="lead">
                {{$proposta[0]->tema}}
            </p>
            <h3>Objetivos:</h3>
            <p class="lead">
                {{$proposta[0]->objetivos}}
            </p>

            <h3>Descrição do Problema:</h3>
            <p class="lead">

                {{$proposta[0]->problema}}
            </p>

            <h3>Referencias:</h3>
            <p class="lead">
                {{$proposta[0]->referencias}}

            </p>

        </div>
    </div>
@endsection