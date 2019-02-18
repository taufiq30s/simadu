<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\Pasien;
use \Validator;

class PasienController extends Controller
{
    public function showPasienDataByRekmed()
    {
        $pasien = Pasien::all();
        return view('rekmed/pasienList', ['pasiens' => $pasien]);
    }

    public function registPasien()
    {
        return view('rekmed/pasienRegister');
    }
}
