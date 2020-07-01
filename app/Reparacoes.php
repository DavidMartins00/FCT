<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reparacoes extends Model
{
    public function intervencao()
    {
        return $this->hasMany('App\Intervencao');
    }

    public function Clientes()
    {
        return $this->belongsTo('App\Clientes', 'idCliente');
    }

    public function Status()
    {
        return $this->belongsTo('App\Status', 'idStatus');
    }

    public function repExt()
    {
        return $this->belongsTo('App\repExt', 'idRepExt');
    }
}
