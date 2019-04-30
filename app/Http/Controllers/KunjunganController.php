<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;
use App\Map;
use App\Kunjungan;

class KunjunganController extends Controller
{
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
}
