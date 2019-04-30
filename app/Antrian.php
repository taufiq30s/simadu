<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    protected $guarded = [];
    protected $table = "Antrian";

    public function kunjungan()
    {
        return $this->hasMany(Kunjungan::class, 'NoAntrian', 'NoAntrian');
    }
}
