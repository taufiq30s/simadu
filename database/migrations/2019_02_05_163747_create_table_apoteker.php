<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableApoteker extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Apoteker', function (Blueprint $table) {
            $table->string('NIP_Apoteker')->primary();
            $table->string('Username');
            $table->string('NamaApoteker');
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
        Schema::dropIfExists('Apoteker');
    }
}
