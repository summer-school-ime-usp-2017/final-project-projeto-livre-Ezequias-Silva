<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserva;
use App\Cliente;
use App\Imovel;

class ReservaController extends Controller
{
    public function index(){
      $reservas = Reserva::all();
      return view('reserva.index',compact('reservas'));
    }

    public function show(Reserva $reserva){
      return view('reserva.show',compact('reserva'));
    }

    public function cria(){
      $clientes = Cliente::all();
      $imovels = Imovel::all();
      return view('reserva.cria',compact('clientes','imovels'));
    }

    public function armazena(){
      Reserva::create(request()->all());
      return redirect('/reservas');
    }

}
