@extends('layouts.app')

@section('content')

<form class="form-control-lg" action="{{ action('BookingController@store') }}" method="post" >

    {{ csrf_field() }}

    <div class="form-group" style="display: none">
        <label for="id_utente" class="col-sm-2 control-label">id_utente</label>
        <div class="col-sm-10">
            <input type="text" name="id_utente" class="form-control" id="id_utente" placeholder="id_utente" value="{{$utente->id_utente}}">
        </div>
    </div>

   <!--
   <div class="form-group">
        <label for="id_sede" class="col-sm-2 control-label">sede</label>
        <div class="col-sm-10">
            <input type="text" name="id_sede" class="form-control" id="id_sede" placeholder="id_sede">
        </div>
    </div>
    -->

        <div class="form-group">
            <div class="col-sm-10">
            <label for="id_sede_select">sede</label>
                <select class="form-control" id="id_sede_select" name="id_sede">
                    <option>---- sede ----</option>
                    @foreach($sedi as $sede)
                        <option value="{{ $sede->id_sede }}">{{ $sede->nome_sede }}</option>
                    @endforeach
                </select>
            </div>
        </div>

    <div class="form-group">
        <div class="col-sm-10">
            <label for="id_ufficio_select">ufficio</label>
            <select class="form-control" id="id_ufficio_select" name="id_ufficio">
                <option>---- ufficio ----</option>
            </select>
        </div>
    </div>


    <div class="form-group">
        <label for="inizio_giorno_prenotazione" class="col-sm-2 control-label">giorno</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" name="inizio_giorno_prenotazione" id="inizio_giorno_prenotazione" placeholder="inizio_giorno_prenotazione">
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-10">
            <label for="num_ore_prenotate">numero di ore</label>
            <select class="form-control" id="num_ore_prenotate" name="num_ore_prenotate">
                <option>---- ore ----</option>
                @foreach($ore as $ora)
                    <option value="{{$ora->id_ora}}">{{ $ora->num_ore }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-10">
            <label for="inizio_ora_prenotazione">a partire dalle ore</label>
            <select class="form-control" id="inizio_ora_prenotazione" name="inizio_ora_prenotazione">
                <option>---- orario ----</option>
                @foreach($ora_prenotazione as $prenotazione_ora)
                    <option value="{{$prenotazione_ora->ora_prenotazione}}">{{ $prenotazione_ora->ora_prenotazione }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group" style="display: none">
        <label for="fine_giorno_prenotazione" class="col-sm-2 control-label">fine_giorno_prenotazione</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" name="fine_giorno_prenotazione" id="fine_giorno_prenotazione" placeholder="fine_giorno_prenotazione">
        </div>
    </div>

    <div class="form-group" style="display: none">
        <label for="fine_ora_prenotazione" class="col-sm-2 control-label">fine_ora_prenotazione</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" name="fine_ora_prenotazione" id="fine_ora_prenotazione" placeholder="fine_ora_prenotazione">
        </div>
    </div>

    <div class="form-group">
        <label for="n_postazioni" class="col-sm-2 control-label">n. postazioni</label>
        <div class="col-sm-10">
            <input type="text" name="n_postazioni" class="form-control" id="n_postazioni" placeholder="....">
        </div>
    </div>

    <div class="form-group" style="display: none">
        <label for="creato_da" class="col-sm-2 control-label">creato_da</label>
        <div class="col-sm-10">
            <input type="text" name="creato_da" class="form-control" id="creato_da" placeholder="creato_da" value="{{$utente->nome}} {{$utente->cognome}}">
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
        <label for="nota_esterna" class="col-sm-2 control-label">note</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="nota_esterna" id="nota_esterna" placeholder="nota_esterna"></textarea>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">invia</button>
        </div>
    </div>
</form>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script type="text/javascript">

    $(document).ready(function() {

        $('select[name="id_sede"]').on('change', function() {
            var stateID = $(this).val();
            console.log(stateID);
            if(stateID) {
                $.ajax({
                    url: '/myform/ajax/'+stateID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="id_ufficio"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="id_ufficio"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                    }
                });
            }else{
                $('select[name="id_ufficio"]').empty();
            }
        });
    });
</script>

    @endsection