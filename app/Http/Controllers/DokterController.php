<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use App\Dokter;
use App\User;
use App\Staff;
use \Validator;

class DokterController extends Controller
{
    public function index()
    {
        $test = User::where('Username', 'admin')->first();
        dd(($test->staff->NIP_Staff === null)? 'Null' : 'not null');
        //return view('admin/registerDokter', ['test' => $test]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nip' => ['required', 'string', 'min:16', 'max:16'],
            'nama' => ['required', 'string'],
            'username' => ['required', 'string', 'max:255', 'unique:users,username'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'role' => ['required','not_in:Silahkan Pilih...'],
        ]);
    }

    protected function store(array $data)
    {
        User::create([
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
        ]);
        if($data['role'] === 'dokter')
            return Dokter::create([
                'NIP_Dokter' => $data['nip'],
                'NamaDokter' => $data['nama'],
                'Username' => $data['username']
            ]);
        else if($data['role'] === 'rekam_medis' || $data['role'] === 'admin')
            return Staff::create([
                'NIP_Staff' => $data['nip'],
                'NamaStaff' => $data['nama'],
                'Username' => $data['username']
            ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->store($request->all())));
        return redirect('/admin/users');
    }
}
