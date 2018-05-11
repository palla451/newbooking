<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Headquarter extends Model
{
    protected $primaryKey = "id_sede";

    /* Relazione inversa uno a uno Prenotazione Sede  */
    public function booking()
    {
        return $this->hasOne('App\Booking','id_sede');
    }

    /* Relazione uno a molti Ufficio Sede  */
    public function offices()
    {
        return $this->hasMany('App\Office','id_sede');
    }
}
