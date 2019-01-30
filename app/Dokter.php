<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $guarded = [];
    protected $table = "dokter";

    public function user()
    {
        return $this->belongsTo('App\User', 'foreign_key', 'username');
    }
}
