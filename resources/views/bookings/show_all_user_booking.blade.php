@extends('layouts.app')

@section('content')

    <h1> Le mie prenotazioni </h1>
        <div class="row">
            @foreach($bookings as $booking)
            <div class="col-sm" style="border: 1px inset; margin: 10px">
                <fieldset>Codice prenotazione : {{$booking->id_prenotazione}}</fieldset>
                <fieldset>Utente : {{$booking->user->nome}} {{$booking->user->cognome}}</fieldset>
                <fieldset>Email : {{$booking->user->email}}</fieldset>
                <fieldset>Giorno : {{$booking->inizio_giorno_prenotazione}}</fieldset>
                <fieldset>Ore prenotate: {{$booking->num_ore_prenotate}}</fieldset>
                <fieldset>Inizio ora prenotazione : {{$booking->inizio_ora_prenotazione}}</fieldset>
                <fieldset>Fine ora prenotazione : {{$booking->fine_ora_prenotazione}}</fieldset>
                <fieldset>Sede : {{$booking->headquarter->nome_sede}}</fieldset>
                <fieldset>Ufficio : {{$booking->office->nome_ufficio}}</fieldset>
            </div>
            @endforeach
        </div>

    @endsection

