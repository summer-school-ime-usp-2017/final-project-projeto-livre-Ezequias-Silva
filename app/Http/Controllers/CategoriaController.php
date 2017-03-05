<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
    public function index(){
      $categorias = Categoria::all();
      return view('categoria.index',compact('categorias'));
    }
}
