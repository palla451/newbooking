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
}
