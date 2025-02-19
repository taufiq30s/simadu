<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $guarded = [];
    protected $table = "Dokter";

    public function user()
    {
         return $this->belongsTo(User::class, 'Username', 'username');
    }
}
