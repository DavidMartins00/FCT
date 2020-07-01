<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nEncomenda extends Model
{
    public function cliente()
    {
        return $this->belongsTo('App\Clientes', 'idCliente');
    }

    public function PEncomenda()
    {
        return $this->hasMany('App\PEncomenda');
    }
}
