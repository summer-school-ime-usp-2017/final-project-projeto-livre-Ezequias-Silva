<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    public function index(){
      $clientes = Cliente::all();
      return view('cliente.index', compact('clientes'));
    }

    public function cria(){
      return view('cliente.cria');
    }

    public function armazena(){
      Cliente::create(request()->all());
      return redirect('/clientes');
    }
}
