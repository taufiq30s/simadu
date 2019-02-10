<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\Ruangan;
use \Validator;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Ruangan::all();
        return view('admin/roomList', ['rooms' => $rooms]);
    }

    public function create()
    {
        return view('admin/roomRegister');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'namaRuangan' => ['required', 'string', 'max:100'],
            'ipComputer' => ['required', 'ip', 'string', 'unique:Ruangan,ipComputer'],
        ]);     
    }

    protected function store(array $data)
    {
        return Ruangan::create([
            'NamaRuangan' => $data['namaRuangan'],
            'IpComputer' => $data['ipComputer'],
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($room = $this->store($request->all())));
        return redirect('/admin/ruangan');
    }

    public function edit($kdRuangan)
    {
        $ruangan = Ruangan::where('KodeRuangan',$kdRuangan)->first();
        return view('/admin/roomEdit', ['ruangan' => $ruangan]);
    }

    public function update(Request $req, $kdRuangan)
    {
        $ruangan = Ruangan::where('KodeRuangan',$kdRuangan)->first();
        if(($req->namaRuangan === $ruangan->NamaRuangan) && $req->ipComputer === $ruangan->ipComputer)
            return redirect('/admin/ruangan');
        else {
            $this->validator($req->all())->validate();
            $ruangan->setKeyName('KodeRuangan');
            $ruangan->NamaRuangan = $req->namaRuangan;
            $ruangan->ipComputer = $req->ipComputer;
            $ruangan->save();
            return redirect('/admin/ruangan');
        }
    }

    public function destroy($kdRuangan)
    {
        $ruangan = Ruangan::where('KodeRuangan',$kdRuangan)->first()->setKeyName('KodeRuangan');
        $ruangan->delete();
        return redirect('/admin/ruangan');
    }
}
