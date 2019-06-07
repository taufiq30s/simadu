<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;
use App\Map;
use App\Kunjungan;
use App\Antrian;
use DataTables;
use Illuminate\Auth\Events\Registered;

class KunjunganController extends Controller
{
    public function __construct()
    {
        // check if session expired for ajax request
        $this->middleware('ajax-session-expired');

        // check if user is autenticated for non-ajax request
        $this->middleware('auth');
    }


    public function showKunjunganDataByRekmed()
    {
        $kunjungan = Kunjungan::all();
        return view('rekamMedis', ['view' => 'kunjungan']);
    }

    public function fetchTable(Request $req)
    {
        // if($req->kategori == 'all')
        //     $Pasiens = Pasien::with('map')->select('Pasien.*');
        // else if($req->kategori == 'umum')
        //     $Pasiens = Pasien::with('map')->select('Pasien.*')->where('NoBPJS', '=', null);
        // else
        //     $Pasiens = Pasien::with('map')->select('Pasien.*')->where('NoBPJS', '!=', null);
        
        return DataTables::of(Kunjungan::query())
        ->addColumn('action', function($row){
            return '<button class="btn btn-outline-info btn-sm" data-toggle="popover" id="btn_view_pasien" data-id="'.$row->NoPasien.'" title="Tampilkan Data Lengkap Pasien"><i class="far fa-eye"></i></button>
            <button class="btn btn-outline-primary btn-sm" data-toggle="popover" id="btn_print_pasien" data-id="'.$row->NoPasien.'" title="Cetak Kartu Berobat Pasien"><i class="fas fa-print"></i></button>
            <button class="btn btn-outline-warning btn-sm" data-toggle="popover" id="btn_edit_pasien" data-id="'.$row->NoPasien.'" title="Edit Data Pasien"><i class="fas fa-edit"></i></button>
            <button class="btn btn-outline-danger btn-sm" data-toggle="popover" id="btn_delete_pasien" data-id="'.$row->NoPasien.'" title="Hapus Data Pasien"><i class="fas fa-trash"></i></button>';
        })
        ->make(true);
    }

    public function cekPasien(Request $req)
    {
        if($req->input('request') == 0)
        {
            $query = Pasien::where('NoPasien', $req->input('noPasien'));
        }
        else if($req->input('request') == 1)
        {
            $query = Pasien::where('NoKTP', $req->input('noPasien'));
        }
        if($query->exists())
        {
            $data = $query->first();
            $dataMap = Map::where('NoKK', $data->NoKK)->first();
            return response()->json(array('exists'=>true, 'dataPasien'=>$data, 'dataMap'=>$dataMap));
        }
        else
        {
            return response()->json(array('exists'=>false));
        }
    }

    public function verifyDataFromMap(Request $req)
    {
        if($req->input('request') == 0)
        {
            $query = Map::where('NoMap', $req->input('searchVal'));
        }
        else if($req->input('request') == 1)
        {
            $query = Map::where('NoKK', $req->input('searchVal'));
        }
        return response()->json(array('exists'=> ($query->exists()) ? true : false));
    }

    public function cekMap(Request $req)
    {
        if($req->input('request') == 0)
        {
            $map = Map::where('NoMap', $req->input('searchVal'));
            $Pasiens = Pasien::with('map')->select('Pasien.*')->where('NoKK', '=', $map->first()->NoKK);
        }
        else
        {
            $Pasiens = Pasien::with('map')->select('Pasien.*')->where('NoKK', '=', $req->input('searchVal'));
        }
        return DataTables::of($Pasiens)
        ->editColumn('NoPasien', function($row){
            return '<button class="btn btn-outline-info btn-sm" data-toggle="popover" id="btn_select_pasien" data-id="'.$row->NoPasien.'">'.$row->NoPasien.'</button>';
        })
        ->rawColumns(['NoPasien'])
        ->make(true);
    }

    public function cekKK(Request $req)
    {
        $map = Map::where('NamaKepalaKeluarga', 'like', '%' .$req->input('searchVal') . '%');
        return DataTables::of($map)
        ->editColumn('NoMap', function($row){
            return '<button class="btn btn-outline-info btn-sm" data-toggle="popover" id="btn_select_map" data-id="'.$row->NoMap.'">'.$row->NoMap.'</button>';
        })
        ->rawColumns(['NoMap'])
        ->make(true);
    }

    public function cekNama(Request $req)
    {
        $pasien = Pasien::with('map')->select('Pasien.*')->where('NamaPasien', 'like', '%' .$req->input('searchVal'). '%');
        return DataTables::of($pasien)
        ->editColumn('NoPasien', function($row){
            return '<button class="btn btn-outline-info btn-sm" data-toggle="popover" id="btn_select_pasien" data-id="'.$row->NoPasien.'">'.$row->NoPasien.'</button>';
        })
        ->rawColumns(['NoPasien'])
        ->make(true);
    }

    protected function store(array $data)
    {
        $counter = Kunjungan::where('TglWaktu', 'like', date("Y-m-d").'%');
        return Kunjungan::create([
            'NoPasien' => $data['noPasien'],
            'TglWaktu' => DB::raw('now()'),
            'NoAntrian' => $counter++,
            'KodeTujuan' => $data['kodeTujuan'],
            'Keluhan' => $data['keluhan'],
            'PetugasRm' => \Auth::User()->staff->NamaStaff
        ]);
    }

    public function register(Request $req)
    {
        event(new Registered($this->store($req->all())));
        return response()->json(['success' => true]);
    }
}
