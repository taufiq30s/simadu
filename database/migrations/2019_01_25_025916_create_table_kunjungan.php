<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKunjungan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Kunjungan', function (Blueprint $table) {
            $table->string('NoPasien');
            $table->dateTime('TglWaktu');
            $table->integer('NoAntrian');
            $table->integer('KodeTujuan');
            $table->longText('Keluhan');
            $table->longText('Pemeriksaan')->nullable();
            $table->longText('Diagnosa')->nullable();
            $table->longText('Anjuran')->nullable();
            $table->longText('Pengobatan')->nullable();
            $table->longText('Dosis')->nullable();
            $table->longText('Edukasi')->nullable();
            $table->string('DokterPemeriksa')->nullable();
            $table->string('PetugasRM');
            $table->foreign('NoPasien')
                    ->references('NoPasien')
                    ->on('Pasien');
            $table->foreign('NoAntrian')
                    ->references('NoAntrian')
                    ->on('Antrian');
            $table->foreign('KodeTujuan')
                    ->references('KodeRuangan')
                    ->on('Ruangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Kunjungan');
    }
}
