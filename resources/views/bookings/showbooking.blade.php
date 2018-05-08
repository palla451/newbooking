@extends('layouts.app')

@section('content')

    <div class="col-md-12">
        <fieldset>Codice prenotazione : {{$bookings->id_prenotazione}}</fieldset>
    </div>

    <div class="col-md-12">
        <fieldset>Utente : {{$bookings->user->nome}} {{$bookings->user->cognome}}</fieldset>
    </div>

    <div class="col-md-12">
        <fieldset>Email : {{$bookings->user->email}}</fieldset>
    </div>

    <div class="col-md-12">
        <fieldset>Inizio giorno Prenotazione : {{$bookings->inizio_giorno_prenotazione}}</fieldset>
    </div>

    <div class="col-md-12">
        <fieldset>Inizio ora Prenotazione : {{$bookings->inizio_ora_prenotazione}}</fieldset>
    </div>

    <div class="col-md-12">
        <fieldset>Fine giorno Prenotazione : {{$bookings->fine_giorno_prenotazione}}</fieldset>
    </div>

    <div class="col-md-12">
        <fieldset>Fine ora Prenotazione : {{$bookings->fine_ora_prenotazione}}</fieldset>
    </div>











    @endsection