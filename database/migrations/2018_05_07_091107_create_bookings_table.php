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
            $table->unsignedInteger('num_ore_prenotate');
            $table->time('inizio_ora_prenotazione')->nullable(true);
            $table->date('fine_giorno_prenotazione')->nullable(true);
            $table->time('fine_ora_prenotazione')->nullable(true);
            $table->unsignedInteger('n_postazioni');
            $table->unsignedInteger('costo');
            $table->unsignedInteger('aliquota');
            $table->unsignedInteger('iva');
            $table->string('creato_da');
            $table->string('modificato_da');
            $table->unsignedInteger('id_stato_prenotazione')->default(1);
            $table->unsignedInteger('id_metodo_pagamento')->nullable(false);
            $table->string('nota_interna');
            $table->string('nota_esterna');
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
