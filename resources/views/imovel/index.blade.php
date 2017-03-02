@extends('layouts.master');

@section('title','Imoveis')

@section('pager-header-content','Imoveis')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading"><h2 class="panel-title">Imoveis cadastrados</h2>
        </div>

        <div class="panel-body">
          <a href="/imovels/cria">
            <span class="glyphicon glyphicon-plus" aria-hidden></span>Cadastrar Imóvel
          </a>
        </div>

        <div class="col-md-6">
          <table class="table table-stripted">
            <thead>
              <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Rua</th>
                <th>Número</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>CEP</th>
              </tr>
            </thead>

            @foreach ($imovels as $imovel)
            <tr>
              <td>{{ $imovel->id }}</td>
              <td>{{ $imovel->imo_titulo }}</td>
              <td>{{ $imovel->imo_rua }}</td>
              <td>{{ $imovel->imo_numero }}</td>
              <td>{{ $imovel->imo_bairro }}</td>
              <td>{{ $imovel->imo_cidade }}</td>
              <td>{{ $imovel->imo_cep }}</td>
            </tr>

            @endforeach

          </table>

        </div>


      </div>

    </div>

  </div>

@endsection
