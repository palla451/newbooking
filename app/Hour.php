<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
    protected $primaryKey = 'id_ora';

    // Relazione uno a uno Ore Prenotazioni

    public function booking()
    {
        return $this->belongsTo('App\Booking','num_ore_prenotate','id_prenotazione');
    }

}
