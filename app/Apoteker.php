<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apoteker extends Model
{
    protected $guarded = [];
    protected $table = "Apoteker";

    public function user()
    {
         return $this->belongsTo(User::class, 'Username', 'username');
    }
}
