<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductionOffice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('production_office', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_ufficio');
            $table->unsignedInteger('id_allestimento');
            $table->unsignedInteger('num_posti');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('production_office', function (Blueprint $table) {
            //
        });
    }
}
