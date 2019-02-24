<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    protected $guarded = [];
    protected $table = "Map";
    //protected $primaryKey = 'NoMap';

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'NoKK', 'NoKK');
    }
}
