<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operadoras extends Model
{
    public function contrato()
    {
        return $this->hasMany('App\Contratos');
    }
}
