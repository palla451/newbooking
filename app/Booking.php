<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
   protected $primaryKey = "id_prenotazione";

    protected $fillable = [
        'id_sede',
        'id_ufficio',
        'inizio_giorno_prenotazione',
        'inizio_ora_prenotazione',
        'fine_giorno_prenotazione',
        'fine_ora_prenotazione',
        'costo',
        'aliquota',
        'iva',
        'creato_da',
        'modificato_da',
        'id_metodo_pagamento',
        'nota_interna',
        'nota_esterna'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','id_utente');
    }
    public function progressbooking(){

        return $this->hasOne('App\ProgressBooking','id_stato_prenotazione');
    }

}
