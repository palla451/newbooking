<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $primaryKey = 'id_ufficio';

    /* Relazione uno a uno Ufficio Sede  */
    public function headquarter()
    {
        return $this->hasOne('App\Headquarter','id_sede');
    }
}
