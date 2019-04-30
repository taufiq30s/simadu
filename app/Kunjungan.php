<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    protected $guarded = [];
    protected $table = "Kunjungan";

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'NoPasien', 'NoPasien');
    }

    public function antrian()
    {
        return $this->belongsTo(Pasien::class, 'NoAntrian', 'NoAntrian');
    }
}
