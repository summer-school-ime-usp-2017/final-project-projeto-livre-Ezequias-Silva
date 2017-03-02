<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imovel;

class ImovelController extends Controller
{
    public function index(){
      $imovels = Imovel::all();
      return view('imovel.index',compact('imovels'));
    }

    public function cria(){
      return view('imovel.cria');
    }
}
