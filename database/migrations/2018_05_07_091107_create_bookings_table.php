<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id_prenotazione');
            $table->unsignedInteger('id_utente');
            $table->unsignedInteger('id_sede');
            $table->unsignedInteger('id_ufficio');
            $table->date('inizio_giorno_prenotazione');
            $table->time('inizio_ora_prenotazione');
            $table->date('fine_giorno_prenotazione');
            $table->time('fine_ora_prenotazione');
            $table->unsignedInteger('costo');
            $table->unsignedInteger('aliquota');
            $table->unsignedInteger('iva');
            $table->string('creato_da');
            $table->string('modificato_da');
            $table->unsignedInteger('id_stato_prenotazione')->default(1);
            $table->unsignedInteger('id_metodo_pagamento')->default(null);
            $table->text('nota_interna');
            $table->text('nota_esterna');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
