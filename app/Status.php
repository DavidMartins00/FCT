<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function Reparacoes()
    {
        return $this->hasMany('App\Reparacoes');
    }
}
