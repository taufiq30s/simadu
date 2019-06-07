<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Map', function (Blueprint $table) {
            $table->string('NoMap')->primary();
            $table->string('NoKK')->unique();
            $table->string('NamaKepalaKeluarga');
            $table->string('Alamat');
            $table->boolean('DalamDaerah');
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
        Schema::dropIfExists('Map');
    }
}
