@extends('layouts.master')

@section('title','Clientes')

@section('pager-header-content','Clientes')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading"><h2 class="panel-title">Clientes cadastrados</h2>
        </div>
        <div class="panel-body">
          <a href="/clientes/cria">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Cadastrar cliente
          </a>
        </div>

        <div class="col-md-6">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data Nasc.</th>
                <th>Rua</th>
                <th>Numero</th>
                <th>Bairro</th>
                <th>Cidade</th>
              </tr>
            </thead>
            @foreach ($clientes as $cliente)
              <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->cli_nome}}</td>
                <td>{{ $cliente->cli_cpf }}</td>
                <td>{{ $cliente->cli_dataNasc }}</td>
                <td>{{ $cliente->cli_rua }}</td>
                <td>{{ $cliente->cli_numero }}</td>
                <td>{{ $cliente->cli_bairro }}</td>
                <td>{{ $cliente->cidade }} </td>
              </tr>
            @endforeach

          </table>

        </div>


      </div>

    </div>

  </div>
@endsection
