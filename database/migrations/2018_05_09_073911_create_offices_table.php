<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->increments('id_ufficio');
            $table->integer('id_allestimento_attuale');
            $table->string('nome_ufficio');
            $table->unsignedInteger('n_max_post');
            $table->unsignedInteger('peso_utilizzo');
            $table->unsignedInteger('id_sede');
            $table->foreign('id_sede')
                ->references('id_sede')
                ->on('headquarters')
                ->onDelete('cascade');
            $table->unsignedInteger('id_allestimento');
            $table->unsignedInteger('tempo_riallestimento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offices');
    }
}
