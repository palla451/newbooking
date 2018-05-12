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

    /* Relazione inversa uno a molti Utente Prenotazione */
    public function user()
    {
        return $this->belongsTo('App\User','id_utente','id_utente');
    }

    /* Relazione uno a uno Prenotazione Stato avanzamento prenotazione  */
    public function progressbooking(){

        return $this->belongsTo('App\ProgressBooking','id_stato_prenotazione','id_stato_prenotazione');
    }

    /* Relazione uno a uno Prenotazione Sede  */
    public function headquarter()
    {
        return $this->hasOne('App\Headquarter','id_sede','id_sede');
    }

    public function hourprenotation(){
        return $this->hasOne('App\HourPrenotation','id_ora_prenotazione','id_prenotazione');
    }

    /* Relazione uno a uno Prenotazione Sede  */


    public function office()
    {
        return $this->belongsTo('App\Office','id_ufficio','id_ufficio');
    }


    /* Relazione uno a uno Prenotazione Ora */
    /*
    public function hour()
    {
        return $this->hasOne('App\Hour','num_ore_prenotate');
    }
    */
}
