<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $guarded = [];
    protected $table = "Staff";

    public function user()
    {
         return $this->belongsTo(User::class, 'Username', 'username');
    }
}
