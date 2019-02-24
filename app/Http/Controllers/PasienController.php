<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\Pasien;
use App\Map;
use \Validator;
//use Nexmo\Network\Number\Request;

class PasienController extends Controller
{
    public function showPasienDataByRekmed()
    {
        $pasien = Pasien::all();
        return view('rekamMedis', ['pasiens' => $pasien, 'view' => 'pasien']);
    }

    public function registPasien()
    {
        return view('rekmed/pasienRegister');
    }

    public function cekMap(Request $req)
    {
        $query = Map::where('NoMap',$req->input('noMap'));
        if($query->exists())
        {
            $data = $query->first();
            $count = $query->count();
            return response()->json(array('exists'=>true, 'noKK'=>$data->NoKK, 'namaKK'=>$data->NamaKepalaKeluarga, 'count'=>$count));
        }
        else {
            return response()->json(array('exists'=>false));
        }
    }

    public function cekKK(Request $req)
    {
        $query = Map::where('NoKK',$req->input('noKK'));
        if($query->exists())
        {
            $data = $query->first();
            $count = $query->count();
            return response()->json(array('exists'=>true, 'noMap'=>$data->NoMap,'namaKK'=>$data->NamaKepalaKeluarga,'count'=> $count));
        }
        else {
            return response()->json(array('exists'=>false));
        }
    }
}
