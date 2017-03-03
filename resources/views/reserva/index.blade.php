@extends('layouts.master')

@section('title','Reservas')

@section('pager-header-content','Reservas')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading"><h2 class="panel-title">Reservas cadastradas</h2>
        </div>
        <div class="panel-body">
          <a href="/reservas/cria">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Cadastrar reserva
          </a>
        </div>

        <div class="col-md-6">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Id</th>
                <th>Data</th>
                <th>Cliente</th>
                <th>Imóvel</th>
                <th>Detalhes</th>
              </tr>
            </thead>

            @foreach ($reservas as $reserva)

            <tr>
              <td>{{ $reserva->id }}</td>
              <td>{{ $reserva->res_data }}</td>
              <td>{{ $reserva->cliente->cli_nome }}</td>
              <td>{{ $reserva->imovel->imo_titulo }}</td>
              <td><a href="/reservas/{{ $reserva->id }}">Detalhes</a></td>
            </tr>

          @endforeach


          </table>

        </div>

      </div>

    </div>

  </div>

@endsection
