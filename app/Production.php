<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    protected $primaryKey='id_allestimento';

    public function offices()
    {
        return $this->belongsToMany('App\Office','production_office','id_allestimento','id_ufficio');
    }
}
