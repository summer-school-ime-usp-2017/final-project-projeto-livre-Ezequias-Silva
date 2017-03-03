<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    public function cliente()
    {
      return $this->belongsTo(Cliente::class);
    }

    public function imovel(){
      return $this->belongsTo(Imovel::class);
    }
}
