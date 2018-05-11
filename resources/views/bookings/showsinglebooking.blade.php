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
        <fieldset>Giorno : {{$bookings->inizio_giorno_prenotazione}}</fieldset>
    </div>

    <div class="col-md-12">
        <fieldset>Ore prenotate: {{$bookings->num_ore_prenotate}}</fieldset>
    </div>

    <div class="col-md-12">
        <fieldset>Dalle : {{$bookings->inizio_ora_prenotazione}}</fieldset>
    </div>

    <div class="col-md-12">
        <fieldset>Fine ora Prenotazione : {{$bookings->fine_ora_prenotazione}}</fieldset>
    </div>

    <div class="col-md-12">
        <fieldset>Sede : {{$bookings->headquarter->nome_sede}}</fieldset>
    </div>

    <div class="col-md-12">
        <fieldset>Sede : {{$bookings->progressbooking->stato_prenotazione}}</fieldset>
    </div>

    @endsection