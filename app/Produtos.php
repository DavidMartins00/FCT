<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    public function PEncomenda()
    {
        return $this->hasMany('App\PEncomenda');
    }
}
