@extends('layouts.master')

@section('title','Cadastro de reserva')

@section('pager-haeder-content','Cadastro de reserva')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Cadastro de reservas</h3>
        </div>

        <div class="panel-body">
          <a href="/reservas"><span class="glyphicon glyphicon-th-list"></span>Lista de reservas
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <form action="/reservas" method="post">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="res_data">Data </label>
          <input type="text" name="res_data" id="res_data" placeholder="Digite a data" class="form-control">
        </div>

        <div class="form-group">
          <select name="cliente_id" id="cliente_id" class="form-control">
            <option></option>
            @foreach ($clientes as $cliente)
              <option value="{{ $cliente->id }}">{{ $cliente->cli_nome }}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <select name="imovel_id" id="imovel_id" class="form-control">
            <option></option>
            @foreach ($imovels as $imovel)
              <option value="{{ $imovel->id }}">{{ $imovel->imo_titulo }}</option>
            @endforeach
          </select>
        </div>

        <button name="submit" class="btn btn-primary">Salvar</button>

      </form>

    </div>

  </div>

@endsection
