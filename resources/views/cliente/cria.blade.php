@extends('layouts.master')

@section('title','Cadastro de cliente')

@section('pager-header-content','Cadastro de cliente')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Cadastro de cliente</h3>
        </div>

        <div class="panel-body">
          <a href="/clientes">
            <span class="glyphicon glyphicon-th-list"></span>Lista de clientes
          </a>
        </div>

      </div>

    </div>

    <div class="col-md-6">
      <form action="/clientes" method="post">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="cli_nome">Nome</label>
          <input type="text" name="cli_nome" id="cli_nome" placeholder="Digite seu nome" class="form-control">
        </div>

        <div class="form-group">
          <label for="cli_cpf">CPF</label>
          <input type="text" name="cli_cpf" id="cli_cpf" placeholder="Digite seu CPF" class="form-control">
        </div>

        <div class="form-group">
          <label for="cli_dataNasc">Data Nasc.</label>
          <input type="text" name="cli_dataNasc" id="cli_dataNasc" placeholder="Digite a data de nascimento" class="form-control">
        </div>

        <div class="form-group">
          <label for="cli_rua">Rua</label>
          <input type="text" name="cli_rua" id="cli_rua" placeholder="Digite a rua" class="form-control">
        </div>

        <div class="form-group">
          <label for="cli_numero">Número</label>
          <input type="text" name="cli_numero" id="cli_numero" placeholder="Digite o número" class="form-control">
        </div>

        <div class="form-group">
          <label for="cli_bairro">Bairro</label>
          <input type="text" name="cli_bairro" id="cli_bairro" placeholder="Digite o bairro" class="form-control">
        </div>

        <div class="form-group">
          <label for="cidade">Cidade</label>
          <input type="text" name="cidade" ="cidade" placeholder="Digite a cidade" class="form-control">
        </div>
      <button class="btn btn-primary">Salvar</button>
      </form>

    </div>

  </div>

@endsection
