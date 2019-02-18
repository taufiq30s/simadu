<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

 class User extends Authenticatable
//class User extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nip', 'username', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function dokter()
    {
        return $this->hasOne(Dokter::class, 'Username', 'username');
    }

    public function staff()
    {
        return $this->hasOne(Staff::class, 'Username', 'username');
    }
    public function apoteker()
    {
        return $this->hasOne(Apoteker::class, 'Username', 'username');
    }
}
