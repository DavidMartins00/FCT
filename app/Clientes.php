<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function nEncomenda()
    {
        return $this->hasMany('App\nEncomenda');
    }

    public function Reparacoes()
    {
        return $this->hasMany('App\Reparacoes');
    }
}
