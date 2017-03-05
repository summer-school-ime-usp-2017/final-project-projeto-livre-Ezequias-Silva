@extends('layouts.master')

@section('title','Cadastro de estado')

@section('pager-header-content','Cadastro de estado')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Cadastro de estado</h3>
        </div>

        <div class="panel-body">
          <a href="/estados">
            <span class="glyphicon glyphicon-th-list"></span>Lista de estado
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <form action="/estados" method="post">

        {{ csrf_field() }}

        <div class="form-group">
          <label for="est_nome">Nome</label>
          <input type="text" name="est_nome" id="est_nome" placeholder="Digite o estado" class="form-control">
        </div>

        <button class="btn btn-primary">Salvar</button>

      </form>

    </div>

  </div>

@endsection
