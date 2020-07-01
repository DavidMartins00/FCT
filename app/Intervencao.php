<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intervencao extends Model
{
    public function reparacoes()
    {
        return $this->belongsTo('App\Reparacoes', 'idRep');
    }
}
