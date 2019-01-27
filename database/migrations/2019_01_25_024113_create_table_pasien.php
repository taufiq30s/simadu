<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePasien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pasien', function (Blueprint $table) {
            $table->string('NoPasien')->primary();
            $table->string('NoKK');
            $table->string('NoKTP')->unique();
            $table->string('NoBPJS')->unique()->nullable();
            $table->string('NamaPasien');
            $table->string('JK');
            $table->date('TglLahir');
            $table->longtext('RiwayatAlergi')->nullable();
            $table->string('NoHP');
            $table->timestamps();
            $table->foreign('NoKK')->references('NoKK')->on('Map');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pasien');
    }
}
