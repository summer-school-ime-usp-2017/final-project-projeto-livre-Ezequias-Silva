@extends('layouts.master')

@section('title','Estados')

@section('pager-header-content','Estados')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading"><h2 class="panel-title">Estados cadastrados</h2>
        </div>

        <div class="panel-body">
          <a href="/estados/cria">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Cadastrar estado
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
          </tr>
        </thead>

        @foreach ($estados as $estado)

          <tr>
            <td>{{ $estado-> id }}</td>
            <td>{{ $estado-> est_nome }}</td>
          </tr>

        @endforeach

      </table>

    </div>

  </div>

@endsection
