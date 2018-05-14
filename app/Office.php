<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $primaryKey = 'id_ufficio';

    /* Relazione uno a uno Ufficio Sede  */
    public function headquarter()
    {
        return $this->belongsTo('App\Headquarter','id_sede','id_sede');
    }


    public function booking()
    {
        return $this->hasOne('App\Booking','id_ufficio','id_ufficio');
    }

    /* Relazione uno a molti  tra Ufficio e Allestimenti */
    public function productions()
    {
        return $this->belongsToMany('App\Production','production_office','id_ufficio','id_allestimento');
    }
}
