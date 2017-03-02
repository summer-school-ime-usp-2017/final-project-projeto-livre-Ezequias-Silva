<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
      'cli_nome','cli_cpf','cli_dataNasc',
      'cli_rua','cli_numero','cli_bairro',
      'cidade'
    ];
}
