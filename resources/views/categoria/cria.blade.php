@extends('layouts.master')

@section('title','Cadastro de categoria')

@section('pager-header-content','Cadastro de categoria')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Cadastro de categoria</h3>
        </div>

        <div class="panel-body">
          <a href="/categorias">
            <span class="glyphicon glyphicon-th-list"></span>Lista de categoria
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <form action="/categorias" method="post">

        {{ csrf_field() }}

        <div class="form-group">
          <label for="cat_tipo">Tipo</label>
          <input type="text" name="cat_tipo" id="cat_tipo" placeholder="Digite um tipo" class="form-control">
        </div>

        <button class="btn btn-primary">Salvar</button>

      </form>

    </div>


  </div>

@endsection
