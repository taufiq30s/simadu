<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $guarded = [];
    protected $table = "Pasien";

    public function map()
    {
        return $this->hasOne(Map::class, 'NoKK', 'NoKK');
    }

    public function kunjungan()
    {
        return $this->hasMany(Kunjungan::class, 'NoPasien', 'NoPasien');
    }
}
