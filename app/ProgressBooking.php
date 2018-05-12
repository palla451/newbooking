<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgressBooking extends Model
{
    protected $primaryKey = "id_stato";


    /* Relazione uno a uno Prenotazione Stato avanzamento prenotazione  */
    public function booking()
    {
        return $this->hasOne('App\Booking','id_stato_prenotazione','id_stato_prenotazione');
    }
}
