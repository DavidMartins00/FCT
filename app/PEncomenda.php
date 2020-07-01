<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PEncomenda extends Model
{
    public function nEncomenda()
    {
        return $this->belongsTo('App\nEncomenda', 'idNota');
    }

    public function Produtos()
    {
        return $this->belongsTo('App\Produtos', 'idProd');
    }
}
