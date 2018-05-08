<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgressBooking extends Model
{
    protected $primaryKey = "id_stato_prenotazione";

    protected $fillable = [
        'stato_prenotazione'
    ];

    public function booking(){

        return $this->hasOne('App\Booking','id_stato_prenotazione');
    }
}
