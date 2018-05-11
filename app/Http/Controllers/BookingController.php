<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Headquarter;
use App\Hour;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::id();

        $bookings = Booking::with('user','headquarter','progressbooking')
            ->where('id_utente','=',$user)
            ->get();
        
       //  return $bookings;

        return view('bookings.show_all_user_booking',compact('bookings'));
    }



    public function create()
    {
        $id_utente = Auth::id();

        $ore = Hour::all();

        $utente = User::findOrFail($id_utente);

        $sedi = Headquarter::with('offices')->get();

        return view('bookings.newbooking',compact('utente','sedi','ore'));
    }


    // Salva nuova prenotazione
    public function store(Booking $booking, Request $request)
    {
        $user = User::find(Auth::id());

        // prento tutti i dati dei campi del form compilato
        $booking->id_utente = Auth::id();
        $booking->id_sede = $request->input('id_sede');
        $booking->id_ufficio = $request->input('id_sede');
        $booking->inizio_giorno_prenotazione = $request->input('inizio_giorno_prenotazione');
        $booking->num_ore_prenotate = $request->input('num_ore_prenotate');
        $booking->fine_giorno_prenotazione = $request->input('fine_giorno_prenotazione');

        $booking->n_postazioni = $request->input('n_postazioni');
        $booking->costo = $request->input('costo');
        $booking->aliquota = $request->input('aliquota');
        $booking->iva = $request->input('iva');

        $booking->creato_da = $user->nome.' '.$user->cognome;
        $booking->modificato_da = 'nessuno';

        $booking->id_stato_prenotazione = 1;
        $booking->id_metodo_pagamento = 1;
        $booking->nota_esterna = $request->input('nota_esterna');
        $booking->nota_interna = 'niente da segnalare';

        $booking->save();

        return redirect('home');
    }

    public function show($id)
    {
        // autorizzo l'utente a vedere la propria prenotazione
        $user = Auth::user();
        $bookings = Booking::with('progressbooking','user','headquarter')->find($id);

        // se esiste la prenotazione
        if($bookings){

            // se la prenotazione è dell'utente logato
            if($bookings->id_utente === $user->id_utente) {
                return view('bookings.showsinglebooking',compact('bookings'));
            }else {
                // se l'utente non è dell'utente loggato
                return redirect('home');
            }
            // se non esiste la prenotazione ritorna alla home
        } else return redirect('home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }

    public function myformAjax($id){
        $uffici = DB::table("offices")
            ->where('id_sede','=',$id)->pluck('nome_ufficio','id_ufficio');

        return json_encode($uffici);

    }
}
