@extends('layouts.app')

@section('content')

<form class="form-control-lg" action="{{ action('BookingController@store') }}" method="post" >

    {{ csrf_field() }}

    <div class="form-group" style="display: none">
        <label for="id_utente" class="col-sm-2 control-label">id_utente</label>
        <div class="col-sm-10">
            <input type="text" name="id_utente" class="form-control" id="id_utente" placeholder="id_utente" value="{{$user->id_utente}}">
        </div>
    </div>

    <div class="form-group">
        <label for="id_sede" class="col-sm-2 control-label">id_sede</label>
        <div class="col-sm-10">
            <input type="text" name="id_sede" class="form-control" id="id_sede" placeholder="id_sede">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-10">
            <label for="id_sede_select">Sede</label>
            <select class="form-control" id="id_sede_select" name="id_sede">
                @foreach($sedi as $sede)
                    <option>
                        {{ $sede->nome_sede }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group">
        <label for="id_ufficio" class="col-sm-2 control-label">id_ufficio</label>
        <div class="col-sm-10">
            <input type="text" name="id_ufficio" class="form-control" id="id_ufficio" placeholder="id_ufficio">
        </div>
    </div>

    <div class="form-group">
        <label for="inizio_giorno_prenotazione" class="col-sm-2 control-label">inizio_giorno_prenotazione</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="inizio_giorno_prenotazione" placeholder="inizio_giorno_prenotazione">
        </div>
    </div>

    <div class="form-group">
        <label for="inizio_ora_prenotazione" class="col-sm-2 control-label">inizio_ora_prenotazione</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="inizio_ora_prenotazione" placeholder="inizio_ora_prenotazione">
        </div>
    </div>

    <div class="form-group">
        <label for="fine_giorno_prenotazione" class="col-sm-2 control-label">fine_giorno_prenotazione</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="fine_giorno_prenotazione" placeholder="fine_giorno_prenotazione">
        </div>
    </div>

    <div class="form-group">
        <label for="fine_ora_prenotazione" class="col-sm-2 control-label">fine_ora_prenotazione</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="fine_ora_prenotazione" placeholder="fine_ora_prenotazione">
        </div>
    </div>

    <div class="form-group">
        <label for="n_postazioni" class="col-sm-2 control-label">n_postazioni</label>
        <div class="col-sm-10">
            <input type="text" name="n_postazioni" class="form-control" id="n_postazioni" placeholder="n_postazioni">
        </div>
    </div>

    <div class="form-group">
        <label for="creato_da" class="col-sm-2 control-label">creato_da</label>
        <div class="col-sm-10">
            <input type="text" name="creato_da" class="form-control" id="creato_da" placeholder="creato_da" value="{{$user->nome}} {{$user->cognome}}">
        </div>
    </div>

    <div class="form-group">
        <label for="costo" class="col-sm-2 control-label">costo</label>
        <div class="col-sm-10">
            <input type="text" name="costo" class="form-control" id="costo" placeholder="costo">
        </div>
    </div>

    <div class="form-group">
        <label for="aliquota" class="col-sm-2 control-label">aliquota</label>
        <div class="col-sm-10">
            <input type="text" name="aliquota" class="form-control" id="aliquota" placeholder="aliquota">
        </div>
    </div>

    <div class="form-group">
        <label for="iva" class="col-sm-2 control-label">iva</label>
        <div class="col-sm-10">
            <input type="text" name="iva" class="form-control" id="iva" placeholder="iva">
        </div>
    </div>

    <div class="form-group">
        <label for="nota_esterna" class="col-sm-2 control-label">nota_esterna</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="nota_esterna" id="nota_esterna" placeholder="nota_esterna"></textarea>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Sign in</button>
        </div>
    </div>
</form>

    @endsection