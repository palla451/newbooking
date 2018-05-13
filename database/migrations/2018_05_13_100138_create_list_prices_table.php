<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_prices', function (Blueprint $table) {
            $table->increments('id_listino');
            $table->integer('tav_riun_fino_otto_1h');
            $table->integer('tav_riun_fino_quattordici_1h');
            $table->integer('tav_riun_fino_venticinque_1h');
            $table->integer('tav_riun_fino_trenta_1h');
            $table->integer('tav_platea_fino_dodici_1h');
            $table->integer('tav_platea_fino_diciotto_1h');
            $table->integer('tav_platea_fino_venticinque_1h');
            $table->integer('tav_platea_fino_trentacinque_1h');
            $table->integer('tav_platea_fino_quaranta_1h');
            $table->integer('tav_platea_fino_cinquanta_1h');
            $table->integer('tav_banchi_fino_otto_1h');
            $table->integer('tav_banchi_fino_dodici_1h');
            $table->integer('tav_banchi_fino_venticinque_1h');
            $table->integer('tav_adu_fino_otto_1h');
            $table->integer('tav_adu_fino_dodici_1h');
            $table->integer('tav_adu_fino_venticinque_1h');
            $table->integer('tav_dayoffice_fino_otto_1h');
            $table->integer('tav_dayoffice_fino_dodici_1h');
            $table->integer('tav_dayoffice_fino_venticinque_1h');
            $table->integer('tav_riun_fino_otto_2h');
            $table->integer('tav_riun_fino_quattordici_2h');
            $table->integer('tav_riun_fino_venticinque_2h');
            $table->integer('tav_riun_fino_trenta_2h');
            $table->integer('tav_platea_fino_dodici_2h');
            $table->integer('tav_platea_fino_diciotto_2h');
            $table->integer('tav_platea_fino_venticinque_2h');
            $table->integer('tav_platea_fino_trentacinque_2h');
            $table->integer('tav_platea_fino_quaranta_2h');
            $table->integer('tav_platea_fino_cinquanta_2h');
            $table->integer('tav_banchi_fino_otto_2h');
            $table->integer('tav_banchi_fino_dodici_2h');
            $table->integer('tav_banchi_fino_venticinque_2h');
            $table->integer('tav_adu_fino_otto_2h');
            $table->integer('tav_adu_fino_dodici_2h');
            $table->integer('tav_adu_fino_venticinque_2h');
            $table->integer('tav_dayoffice_fino_otto_2h');
            $table->integer('tav_dayoffice_fino_dodici_2h');
            $table->integer('tav_dayoffice_fino_venticinque_2h');
            $table->integer('tav_riun_fino_otto_3h');
            $table->integer('tav_riun_fino_quattordici_3h');
            $table->integer('tav_riun_fino_venticinque_3h');
            $table->integer('tav_riun_fino_trenta_3h');
            $table->integer('tav_platea_fino_dodici_3h');
            $table->integer('tav_platea_fino_diciotto_3h');
            $table->integer('tav_platea_fino_venticinque_3h');
            $table->integer('tav_platea_fino_trentacinque_3h');
            $table->integer('tav_platea_fino_quaranta_3h');
            $table->integer('tav_platea_fino_cinquanta_3h');
            $table->integer('tav_banchi_fino_otto_3h');
            $table->integer('tav_banchi_fino_dodici_3h');
            $table->integer('tav_banchi_fino_venticinque_3h');
            $table->integer('tav_adu_fino_otto_3h');
            $table->integer('tav_adu_fino_dodici_3h');
            $table->integer('tav_adu_fino_venticinque_3h');
            $table->integer('tav_dayoffice_fino_otto_3h');
            $table->integer('tav_dayoffice_fino_dodici_3h');
            $table->integer('tav_dayoffice_fino_venticinque_3h');
            $table->integer('tav_riun_fino_otto_4h');
            $table->integer('tav_riun_fino_quattordici_4h');
            $table->integer('tav_riun_fino_venticinque_4h');
            $table->integer('tav_riun_fino_trenta_4h');
            $table->integer('tav_platea_fino_dodici_4h');
            $table->integer('tav_platea_fino_diciotto_4h');
            $table->integer('tav_platea_fino_venticinque_4h');
            $table->integer('tav_platea_fino_trentacinque_4h');
            $table->integer('tav_platea_fino_quaranta_4h');
            $table->integer('tav_platea_fino_cinquanta_4h');
            $table->integer('tav_banchi_fino_otto_4h');
            $table->integer('tav_banchi_fino_dodici_4h');
            $table->integer('tav_banchi_fino_venticinque_4h');
            $table->integer('tav_adu_fino_otto_4h');
            $table->integer('tav_adu_fino_dodici_4h');
            $table->integer('tav_adu_fino_venticinque_4h');
            $table->integer('tav_dayoffice_fino_otto_4h');
            $table->integer('tav_dayoffice_fino_dodici_4h');
            $table->integer('tav_dayoffice_fino_venticinque_4h');
            $table->integer('tav_riun_fino_otto_8h');
            $table->integer('tav_riun_fino_quattordici_8h');
            $table->integer('tav_riun_fino_venticinque_8h');
            $table->integer('tav_riun_fino_trenta_8h');
            $table->integer('tav_platea_fino_dodici_8h');
            $table->integer('tav_platea_fino_diciotto_8h');
            $table->integer('tav_platea_fino_venticinque_8h');
            $table->integer('tav_platea_fino_trentacinque_8h');
            $table->integer('tav_platea_fino_quaranta_8h');
            $table->integer('tav_platea_fino_cinquanta_8h');
            $table->integer('tav_banchi_fino_otto_8h');
            $table->integer('tav_banchi_fino_dodici_8h');
            $table->integer('tav_banchi_fino_venticinque_8h');
            $table->integer('tav_adu_fino_otto_8h');
            $table->integer('tav_adu_fino_dodici_8h');
            $table->integer('tav_adu_fino_venticinque_8h');
            $table->integer('tav_dayoffice_fino_otto_8h');
            $table->integer('tav_dayoffice_fino_dodici_8h');
            $table->integer('tav_dayoffice_fino_venticinque_8h');
          //  $table->integer('tav_riun_fino_otto_1h ');
          //  $table->integer('tav_riun_fino_otto_1h ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_prices');
    }
}
