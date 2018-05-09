<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Headquarter;
use App\User;
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
       // return Booking::all();

        $bookings = Booking::find(1);

        return $bookings;


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::id();

        $user = User::findOrFail($id);

        $sedi = Headquarter::all();


        return view('bookings.newbooking',compact('user','sedi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Booking $booking, Request $request)
    {
        $user = User::find(Auth::id());


        $booking->id_utente = Auth::id();
        $booking->id_sede = 1;
        $booking->id_ufficio = 1;
        $booking->inizio_giorno_prenotazione = now();
        $booking->inizio_ora_prenotazione = now();
        $booking->fine_giorno_prenotazione = now();
        $booking->fine_ora_prenotazione = now();
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

        return $booking;

        $booking->save();

        return redirect('home');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bookings = Booking::with('progressbooking','user','headquarter')->find($id);

        return view('bookings.showbooking',compact('bookings'));

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
}
