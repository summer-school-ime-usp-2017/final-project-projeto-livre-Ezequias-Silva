@extends('layouts.master')

@section('title','Cadastro de imóvel')

@section('pager-header-content','Cadastro de imóvel')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Cadastro de imóvel</h3>
        </div>

        <div class="panel-body">
          <a href="/imovels">
            <span class="glyphicon glyphicon-th-list"></span>Lista de imóveis
          </a>
          </div>
      </div>
    </div>

    <div class="col-md-6">
      <form action="/imovels" method="post">

        {{ csrf_field() }}

        <div class="form-group">
          <label for="imo_titulo">Título</label>
          <input type="text" name="imo_titulo" id="imo_titulo" placeholder="Digite um título" class="form-control">
        </div>

        <div class="form-group">
          <label for="imo_rua">Rua</label>
          <input type="text" name="imo_rua" id="imo_rua" placeholder="Digite a rua" class="form-control">
        </div>

        <div class="form-group">
          <label for="imo_numero">Número</label>
          <input type="text" name="imo_numero" id="imo_numero" placeholder="Digite um número" class="form-control">
        </div>

        <div class="form-group">
          <label for="imo_bairro">Bairro</label>
          <input type="text" name="imo_bairro" id="imo_bairro" placeholder="Digite o bairro" class="form-control">
        </div>

        <div class="form-group">
          <label for="imo_cidade">Cidade</label>
          <input type="text" name="imo_cidade" id="imo_cidade" placeholder="Digite a cidade" class="form-control">
        </div>

        <div class="form-group">
          <label for="imo_cep">CEP</label>
          <input type="text" name="imo_cep" id="imo_cep" placeholder="Digite o CEP" class="form-control">
        </div>
        <button class="btn btn-primary">Salvar</button>
      </form>
    </div>
  </div>

@endsection
