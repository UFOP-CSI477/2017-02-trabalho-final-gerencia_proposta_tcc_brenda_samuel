@extends('layouts.app')
@section('active1')
    active
@endsection
@section('content')
<div class="container-fluid" >

            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (Auth::user()->isAdmin)
                       Você  está logado como Administrador!
                    @else
                            Você  está logado como aluno!
                    @endif
                </div>
            </div>
        </div>

@endsection
