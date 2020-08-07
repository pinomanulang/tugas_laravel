<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPertanyaanIdToKomentarPertanyaanPino extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('komentar_pertanyaan_pino', function (Blueprint $table) {
             $table->unsignedBigInteger('pertanyaan_id');

            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');//
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('komentar_pertanyaan_pino', function (Blueprint $table) {
            //
        });
    }
}
