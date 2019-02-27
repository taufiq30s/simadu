<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\Pasien;
use App\Map;
use \Validator;
use DataTables;
use Faker\Provider\zh_CN\DateTime;
use function GuzzleHttp\json_encode;
use function GuzzleHttp\json_decode;

class PasienController extends Controller
{
    public function showPasienDataByRekmed()
    {
        $pasien = Pasien::all();
        return view('rekamMedis', ['view' => 'pasien']);
    }

    public function fetchTable(Request $req)
    {
        if($req->kategori == 'all')
            $Pasiens = Pasien::with('map')->select('Pasien.*');
        else if($req->kategori == 'umum')
            $Pasiens = Pasien::with('map')->select('Pasien.*')->where('NoBPJS', '=', null);
        else
            $Pasiens = Pasien::with('map')->select('Pasien.*')->where('NoBPJS', '!=', null);
        return DataTables::of($Pasiens)
        ->editColumn('BPJS', function($row){
            return '<div style="display: grid; text-align: center;"><i class="fas fa-'.($row->NoBPJS == null ? 'times text-danger' : 'check text-success').'"></i></div>';
        })
        ->addColumn('action', function($row){
            return '<button class="btn btn-outline-info btn-sm" data-toggle="popover" id="btn_view_pasien" data-id="'.$row->NoPasien.'" title="Tampilkan Data Lengkap Pasien"><i class="far fa-eye"></i></button>
            <button class="btn btn-outline-primary btn-sm" data-toggle="popover" id="btn_print_pasien" data-id="'.$row->NoPasien.'" title="Cetak Kartu Berobat Pasien"><i class="fas fa-print"></i></button>
            <button class="btn btn-outline-warning btn-sm" data-toggle="popover" id="btn_edit_pasien" data-id="'.$row->NoPasien.'" title="Edit Data Pasien"><i class="fas fa-edit"></i></button>
            <button class="btn btn-outline-danger btn-sm" data-toggle="popover" id="btn_delete_pasien" data-id="'.$row->NoPasien.'" title="Hapus Data Pasien"><i class="fas fa-trash"></i></button>';
        })
        ->rawColumns(['BPJS', 'action'])
        ->make(true);
    }

    public function cekMap(Request $req)
    {
        $query = Map::where('NoMap',$req->input('noMap'));
        if($query->exists())
        {
            $data = $query->first();
            if(Pasien::where('NamaPasien', $data->NamaKepalaKeluarga)->exists())
                $count = 0;
            else
                $count = 1;
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
            if(Pasien::where('NamaPasien', $data->NamaKepalaKeluarga)->exists())
                $count = 0;
            else
                $count = 1;
            return response()->json(array('exists'=>true, 'noMap'=>$data->NoMap,'namaKK'=>$data->NamaKepalaKeluarga,'count'=> $count));
        }
        else {
            return response()->json(array('exists'=>false));
        }
    }

    protected function validator(array $data, $opt)
    {
        if($opt == 1)
            return Validator::make($data, [
                'noNIK' => ['required', 'string', 'min:16', 'max:16', 'unique:Pasien,NoKTP'],
                'noBPJS' => ['max:16'],
                'namaPasien' => ['required', 'string', 'max:191'],
                'tempatLahir' => ['required', 'string', 'max:100'],
                'tglLahir' => ['required', 'date'],
                'jk' => ['required', 'string'],
                'noHP' => ['required', 'string', 'min:12', 'max:14']
            ]); 
        elseif($opt == 2)
            return Validator::make($data, [
                'noNIK' => ['required', 'string', 'min:16', 'max:16', 'unique:Pasien,NoKTP'],
                'noBPJS' => ['max:16', 'unique:Pasien,NoBPJS'],
                'namaPasien' => ['required', 'string', 'max:191'],
                'tempatLahir' => ['required', 'string', 'max:100'],
                'tglLahir' => ['required', 'date'],
                'jk' => ['required', 'string'],
                'noHP' => ['required', 'string', 'min:12', 'max:14']
            ]);
        elseif($opt == 3)
            return Validator::make($data, [
                'noNIK' => ['required', 'string', 'min:16', 'max:16'],
                'noBPJS' => ['max:16', 'unique:Pasien,NoBPJS'],
                'namaPasien' => ['required', 'string', 'max:191'],
                'tempatLahir' => ['required', 'string', 'max:100'],
                'tglLahir' => ['required', 'date'],
                'jk' => ['required', 'string'],
                'noHP' => ['required', 'string', 'min:12', 'max:14']
            ]); 
        else
            return Validator::make($data, [
                'noNIK' => ['required', 'string', 'min:16', 'max:16'],
                'noBPJS' => ['max:16'],
                'namaPasien' => ['required', 'string', 'max:191'],
                'tempatLahir' => ['required', 'string', 'max:100'],
                'tglLahir' => ['required', 'date'],
                'jk' => ['required', 'string'],
                'noHP' => ['required', 'string', 'min:12', 'max:14']
            ]);    
    }

    protected function store(array $data)
    {
        $count = Pasien::count();
        $tglLahir = strtotime($data['tglLahir']);
        $tglLahir = date("Y-m-d", $tglLahir);
        if($count === 0)
        {
            $PasienID = 'P-00000001';            
        }
        else
        {
            $fetchLastPasienID = (Pasien::orderBy('created_at', 'desc')->first());
            $PasienID = explode("-", $fetchLastPasienID);
            $PasienID = 'P-'.sprintf('%08d', ((int)$PasienID[1])+1);
        }           
        
        return Pasien::create([
            'NoPasien' => $PasienID,
            'NoKK' => $data['noKK'],
            'NoKTP' => $data['noNIK'],
            'NoBPJS' => $data['noBPJS'],
            'NamaPasien' => ucwords($data['namaPasien']),
            'JK' => $data['jk'],
            'TempatLahir' => ucwords($data['tempatLahir']),
            'TglLahir' => $tglLahir,
            'RiwayatAlergi' => $data['riwayatAlergi'],
            'NoHP' => $data['noHP'],
            'PetugasRM' => \Auth::User()->staff->NamaStaff
        ]);
    }

    public function register(Request $req)
    {
        //return response()->json(['success' => false, 'debug' => $req->noBPJS]);
        if($req->noBPJS == '')
            $this->validator($req->all(),1)->validate();
        else if($req->noBPJS != '')
            $this->validator($req->all(),2)->validate();
        event(new Registered($this->store($req->all())));
        return response()->json(['success' => true]);
    }

    public function edit($noPasien)
    {
        $dataPasien = Pasien::where('NoPasien',$noPasien)->first()->setKeyName('NoPasien');
        $dataMap = Map::where('NoKK', $dataPasien->NoKK)->first();
        return response()->json(['success' => true, 'data' => $dataPasien, 'dataMap' => $dataMap]);
    }

    public function update(Request $req ,$noPasien)
    {
        $dataPasien = Pasien::where('NoPasien',$noPasien)->first()->setKeyName('NoPasien');
        // $TglLahir = strtotime($req->tglLahir);
        // $TglLahir = date("Y-m-d", $TglLahir);
        if($dataPasien->NoKTP == $req->noNIK)
            if($dataPasien->NoBPJS == $req->noBPJS)
                $this->validator($req->all(),0)->validate();
            else
                $this->validator($req->all(),3)->validate();
        else
            if($dataPasien->NoBPJS == $req->noBPJS)
                $this->validator($req->all(),1)->validate();
            else
                $this->validator($req->all(),2)->validate();
        $dataPasien->NoKK = $req->noKK;
        $dataPasien->NoKTP = $req->noNIK;
        $dataPasien->NoBPJS = $req->noBPJS;
        $dataPasien->NamaPasien = $req->namaPasien;
        $dataPasien->TempatLahir = $req->tempatLahir;
        $dataPasien->TglLahir = $req->tglLahir;
        $dataPasien->JK = $req->jk;
        $dataPasien->NoHP = $req->noHP;
        $dataPasien->RiwayatAlergi = $req->riwayatAlergi;
        $dataPasien->save();
        return response()->json(['success' => true]);
    }

    public function destroy($noPasien)
    {
        $dataPasien = Pasien::where('NoPasien',$noPasien)->first()->setKeyName('NoPasien');
        $dataPasien->delete();
        return response()->json(['success' => true]);
    }
}
