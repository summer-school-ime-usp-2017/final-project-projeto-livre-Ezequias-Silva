<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $fillable = [
      'imo_titulo','imo_rua','imo_numero',
      'imo_bairro','imo_cidade','imo_cidade',
      'imo_cep'
    ];
}
