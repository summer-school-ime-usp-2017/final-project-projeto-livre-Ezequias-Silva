@extends('layouts.master')

@section('title','Detalhes da reserva')

@section('pager-header-content','Reserva')

@section('content')

  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-primary">
        <div class="panel-heading">Reservas
        </div>

        <ul class="list-group">
          <li class="list-group-item">Data reserva: {{ $reserva->res_data }}</li>
          <li class="list-group-item">Cliente: {{ $reserva->cliente->cli_nome }}</li>
          <li class="list-group-item">CPF: {{ $reserva->cliente->cli_cpf }}</li>
          <li class="list-group-item">Data Nas.: {{$reserva->cliente->cli_dataNasc }}</li>
          <li class="list-group-item">Título: {{ $reserva->imovel->imo_titulo }}</li>
          <li class="list-group-item">Rua: {{ $reserva->imovel->imo_rua }}</li>
          <li class="list-group-item">Número: {{ $reserva->imovel->imo_numero }}</li>
          <li class="list-group-item">Bairro: {{ $reserva->imovel->imo_bairro }}</li>
          <li class="list-group-item">Cidade: {{ $reserva->imovel->imo_cidade }}</li>
        </ul>

      </div>

    </div>

  </div>

@endsection
