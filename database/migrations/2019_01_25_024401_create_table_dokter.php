<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDokter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Dokter', function (Blueprint $table) {
            $table->string('NIP_Dokter')->primary();
            $table->string('Username');
            $table->string('NamaDokter');
            $table->timestamps();
            $table->foreign('Username')->references('username')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Dokter');
    }
}
