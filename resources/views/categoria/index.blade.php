@extends('layouts.master')

@section('title','Categorias')

@section('pager-header-content','Categorias')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading"><h2 class="panel-title">Tipos cadastrados</h2>
        </div>

        <div class="panel-body">
          <a href="/categorias/cria">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Cadastrar tipo
          </a>
        </div>

        <div class="col-md-6">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Id</th>
                <th>Tipo</th>
              </tr>
            </thead>

            @foreach ($categorias as $categoria)

              <tr>
                <td>{{ $categoria->id }}</td>
                <td>{{ $categoria->cat_tipo }}</td>
              </tr>

            @endforeach

          </table>

        </div>

      </div>

    </div>

  </div>

@endsection
