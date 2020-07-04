<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nEncomenda extends Model
{
    public function User()
    {
        return $this->belongsTo('App\User', 'idCliente');
    }

    public function PEncomenda()
    {
        return $this->hasMany('App\PEncomenda');
    }
}
