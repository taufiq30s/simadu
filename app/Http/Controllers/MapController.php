<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\Map;
use \Validator;
use DataTables;

class MapController extends Controller
{
    public function showMapDatabyRekmed()
    {
        $map = Map::all();
        return view('rekamMedis', ['view' => 'map']);
    }

    public function fetchTable()
    {
        return DataTables::of(Map::query())
        ->addColumn('action', function($row){
            return '<button class="btn btn-outline-warning btn-sm" data-toggle="popover" id="btn_edit_map" data-id="'.$row->NoMap.'"><i class="fas fa-edit"></i></button>
            <button class="btn btn-outline-danger btn-sm" data-toggle="popover" id="btn_delete_map" data-id="'.$row->NoMap.'"><i class="fas fa-trash"></i></button>';
        })
        ->make(true);
    }

    protected function validator(array $data, $opt)
    {
        if($opt)
            return Validator::make($data, [
                'noKK' => ['required', 'string', 'min:16', 'max:16', 'unique:Map,NoKK'],
                'namaKK' => ['required', 'string', 'max:50'],
                'alamat' => ['required', 'string', 'max:200']
            ]);   
        else
            return Validator::make($data, [
                'noKK' => ['required', 'string', 'min:16', 'max:16'],
                'namaKK' => ['required', 'string', 'max:50'],
                'alamat' => ['required', 'string', 'max:200']
            ]);   
    }

    protected function store(array $data)
    {
        $count = Map::count();
        if($count === 0)
        {
            $MapID = 'M-000001';            
        }
        else
        {
            $fetchLastMapID = (Map::orderBy('created_at', 'desc')->first());
            $MapID = explode("-", $fetchLastMapID);
            $MapID = 'M-'.sprintf('%06d', ((int)$MapID[1])+1);
        }           
        
        return Map::create([
            'NoMap' => $MapID,
            'NoKK' => $data['noKK'],
            'NamaKepalaKeluarga' => $data['namaKK'],
            'Alamat' => $data['alamat']
        ]);
    }

    public function register(Request $req)
    {
        $this->validator($req->all(),1)->validate();
        event(new Registered($this->store($req->all())));
        return response()->json(['success' => true]);
    }

    public function edit($noMap)
    {
        $dataMap = Map::where('NoMap',$noMap)->first()->setKeyName('NoMap');
        return response()->json(['success' => true, 'data' => $dataMap]);
    }

    public function update(Request $req ,$noMap)
    {
        $dataMap = Map::where('NoMap',$noMap)->first()->setKeyName('NoMap');
        if($dataMap->NoKK == $req->noKK)
            $this->validator($req->all(),0)->validate();
        else
            $this->validator($req->all(),1)->validate();
        $dataMap->NoKK = $req->noKK;
        $dataMap->NamaKepalaKeluarga = $req->namaKK;
        $dataMap->Alamat = $req->alamat;
        $dataMap->save();
        return response()->json(['success' => true]);
    }

    public function destroy($noMap)
    {
        $dataMap = Map::where('NoMap',$noMap)->first()->setKeyName('NoMap');
        $dataMap->delete();
        return response()->json(['success' => true]);
    }
}
