<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class repExt extends Model
{
    public function Reparacoes()
    {
        return $this->hasMany('App\Reparacoes');
    }
}
