<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HourPrenotation extends Model
{
    protected $primaryKey = 'id_ora_prenotazione';

    public function booking(){
        return $this->belongsTo('App\Booking','id_ora_prenotazione','id_prenotazione');
    }
}
