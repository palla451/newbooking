<?php

namespace App\Http\Controllers;

use App\Booking;
use App\User;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bookings = Booking::with('progressbooking','user')->find($id);

        return view('bookings.showbooking',compact('bookings'));

      //  return $bookings;

     /*   foreach($bookings as $booking){
            echo    "<p>Nome : ".$user->nome.
                        "<br /> Cognome : ".$user->cognome.
                            "<br /> Id Prenotazione: ".$booking->id_prenotazione.
                            "<br /> Id Sede: ".$booking->id_sede.
                            "<br /> Id Ufficio: ".$booking->id_ufficio.
                            "<br /> Stato prenotazione  : ".$progress->stato_prenotazione.
                    "</p>";
            ;
        }
     */
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
