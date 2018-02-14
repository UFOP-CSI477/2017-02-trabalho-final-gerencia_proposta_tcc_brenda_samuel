@extends('layouts.app')
@section('content')
    <div name="cadastro">
        <h2 class="jumbotron center-block">Cadastro de Proposta</h2>
        <form method="POST" class="form-group" action="/propostaInsertion">
            {{ csrf_field() }}
            <div class="form-group  col-md-6">
                <label for="nomealuno">Aluno:</label>
                <input type="text" class="form-control" id="nomealuno" name="nomealuno">
            </div>
            <div class="form-group col-md-6">
                <label for="matricula">Matricula:</label>
                <input type="text" class="form-control" id="matricula" name="matricula">
            </div>
            <div class="form-group col-md-6">
                <label for="orientador">Orientador:</label>
                <input type="text" class="form-control" name="orientador" id="orientador">
            </div>
            <div class="form-group col-md-6">
                <label for="coorientador">Coorientador:</label>
                <input type="text" class="form-control" name="coorientador" id="coorientador">
            </div>
            <div class="form-group col-md-12">
                <label for="disciplina">Disciplina:</label>
                <select class="form-control" style="width: 20%" id="tipotcc" name="tipotcc">
                    <option value="1">TCCI</option>
                    <option value="2">TCCII</option>
                </select>
            </div>
            <div class="form-group col-md-12">
                <label for="titulo">Título Provisório:</label>
                <input type="text" class="form-control" id="titulo" name="titulo">
            </div>
            <div class="form-group col-md-12">
                <label for="areapesquisa">Área de Pesquisa:</label>
                <input type="text" class="form-control" style="width: 20%" id="areapesquisa" name="areapesquisa">
            </div>
            <div class="form-group col-md-12">
                <label for="tema">Tema:</label>
                <textarea  cols="40" id="tema" name="tema" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group col-md-12">
                <label for="objetivos">Objetivos:</label>
                <textarea  cols="40" id="objetivos" name="objetivos" rows="5" class="form-control"></textarea>
            </div>

            <div class="form-group col-md-12">
                <label for="problema">Problemas:</label>
                <textarea  cols="40" id="problema" name="problema" rows="5" class="form-control"></textarea>
            </div>
            {{--<div class="form-group col-md-12">--}}
                {{--<label for="cronograma">Cronograma para 12 meses de atividade:</label>--}}
                {{--<input id="cronograma" class="glyphicon-open-file" type="file"/>--}}
            {{--</div>--}}
            <div class="form-group col-md-12">
                <label for="referencias">Referências:</label>
                <textarea  cols="40" id="referencias" name="referencias" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-danger">Limpar</button>
            </div>
        </form>
    </div>
@endsection