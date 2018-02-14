@extends('layouts.app')
@section('active3')
    active
@endsection

@section('content')
    <div class="container-fluid" >

        <div class="panel panel-default">
            <div class="panel-body">
                @if ($proposta_aprovada)
                    Parabens!! Sua proposta foi aprovada!!
                @else
                    Infelizmente sua proposta ainda não foi aprovada.
                @endif
            </div>
        </div>
    </div>

@endsection
