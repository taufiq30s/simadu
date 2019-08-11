<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApotekerController extends Controller
{
  public function index()
  {
      return view('apoteker', ['view' => 'dashboard']);
  }
  public function antrian()
  {
      return view('apoteker', ['view' => 'antrian']);
  }
  public function inventory()
  {
      return view('apoteker', ['view' => 'inventory']);
  }
  public function dataObat()
  {
      return view('apoteker', ['view' => 'obat']);
  }
}
