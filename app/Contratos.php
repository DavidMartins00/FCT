<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contratos extends Model
{
    public function operadora()
    {
        return $this->belongsTo('App\Operadoras', 'op_id');
    }
}
