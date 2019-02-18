<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use App\Dokter;
use App\User;
use App\Staff;
use App\Apoteker;
use \Validator;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        $now = \Auth::user()->username;
        return view('admin/userList', ['users' => $users, 'userNow' => $now]);
    }

    public function create()
    {
        return view('admin/userRegister');
    }

    protected function validator(array $data)
    {        
        if(isset($data['username']))
            return Validator::make($data, [
                'nip' =>['required', 'string', 'min:18', 'max:18', 'unique:users,nip'],
                'nama' => ['required', 'string'],
                'username' => ['required', 'string', 'max:255', 'unique:users,username'],
                'password' => ['required', 'string', 'min:6', 'confirmed'],
                'role' => ['required','not_in:Silahkan Pilih...'],
            ]);
        else if($data['password'] === null)
        {
            return Validator::make($data, [
                'nip' => ['required', 'string', 'min:18', 'max:18'],
                'nama' => ['required', 'string'],
                'role' => ['required','not_in:Silahkan Pilih...'],
            ]);
        }
        else
            return Validator::make($data, [
                'nip' => ['required', 'string', 'min:18', 'max:18'],
                'nama' => ['required', 'string'],
                'password' => ['required', 'string', 'min:6', 'confirmed'],
                'role' => ['required','not_in:Silahkan Pilih...'],
            ]);
    }

    protected function store(array $data, $operator)
    {
        if($operator === 'store')
            User::create([
                'username' => $data['username'],
                'password' => Hash::make($data['password']),
                'role' => $data['role'],
                'nip' => $data['nip'],
            ]);
        if($data['role'] === 'dokter')
            return Dokter::create([
                'NIP_Dokter' => $data['nip'],
                'NamaDokter' => $data['nama'],
                'Username' => $data['username'],
            ]);
        else if($data['role'] === 'rekam_medis' || $data['role'] === 'admin')
            return Staff::create([
                'NIP_Staff' => $data['nip'],
                'NamaStaff' => $data['nama'],
                'Username' => $data['username'],
            ]);
        else
            return Apoteker::create([
                'NIP_Apoteker' => $data['nip'],
                'NamaApoteker' => $data['nama'],
                'Username' => $data['username'],
            ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->store($request->all(), 'store')));
        return redirect('/admin/users');
    }

    public function editByAdmin($username)
    {
        $user = (User::where('username',$username)->first());
        if($user->role === 'admin' || $user->role === 'rekam_medis')
            $roleRelation = $user->staff;
        else if($user->role === 'dokter')
            $roleRelation = $user->dokter;
        else
            $roleRelation = $user->apoteker;
        $now = \Auth::user()->username;
        return view('admin/userEdit', ['user' => $user, 'userNow' => $now, 'roleRelation' => $roleRelation]);
    }

    protected function checkAndUpdateUserTable(request $req, $username, object $user)
    {
        $user->nip = $req->nip;
        if(($username === 'admin' && $req->password === null) || ($req->role === $user->role) && $req->password === null)
            return 0;
        else if($req->role === $user->role) {
            $this->validate($req, ['password' => 'required|string|min:6|confirmed']);
            $user->password = Hash::make($req->password);
            $user->save();
            return 1;
        }
        else if($req->role != $user->role) {
            if($req->password != null) {
                $this->validate($req, ['password' => 'required|string|min:6|confirmed']);
                $user->password = Hash::make($req->password);
            }            
            $user->role = $req->role;
            $user->save();
            return 1;
        }
    }

    protected function checkAndUpdateStaffTable(object $related, request $req, object $user)
    {
        if($related->NIP_Staff === $req->nip && $related->NamaStaff === $req->nama)
            return 0;
        else 
        {
            $related->NIP_Staff = $req->nip;
            $related->NamaStaff = $req->nama;
            $related->save();
            return 1;
        }
    }

    protected function checkAndUpdateDokterTable(object $related, request $req)
    {
        if($related->NIP_Dokter === $req->nip && $related->NamaDokter === $req->nama)
            return 0;
        else 
        {
            $related->NIP_Dokter = $req->nip;
            $related->NamaDokter = $req->nama;
            $related->save();
            return 1;
        }
    }

    protected function checkAndUpdateApotekerTable(object $related, request $req)
    {
        if($related->NIP_Apoteker === $req->nip && $related->NamaApoteker === $req->nama)
            return 0;
        else 
        {
            $related->NIP_Apoteker = $req->nip;
            $related->NamaApoteker = $req->nama;
            $related->save();
            return 1;
        }
    }

    public function updateByAdmin(Request $request, $username)
    {
        $user = (User::where('username', $username)->first());
        $this->validator($request->all())->validate();
        $roleChange = 1;
        if($request->role != $user->role)
        {
            if(($request->role != 'admin' && $request->role != 'rekam_medis') || ($user->role != 'admin' && $user->role != 'rekam_medis'))
            {
                $roleChange = $this->destroyRole($user);
                $req = $request->toArray();
                $req['username'] = $username;
                $this->store($req, '');
            }
        }
        $usrCheck = $this->checkAndUpdateUserTable($request, $username, $user);
        
        if($roleChange)
        {
            if($user->role === 'admin' || $user->role === 'rekam_medis')
            {
                $roleRelated = $user->staff->setKeyName('NIP_Staff');
                $relCheck = $this->checkAndUpdateStaffTable($roleRelated, $request, $user);
            }
            else if($user->role === 'dokter')
            {
                $roleRelated = $user->dokter->setKeyName('NIP_Dokter');
                $relCheck = $this->checkAndUpdateDokterTable($roleRelated, $request);
            }
            else
            {
                $roleRelated = $user->apoteker->setKeyName('NIP_Apoteker');
                $relCheck = $this->checkAndUpdateApotekerTable($roleRelated, $request);
            }
            if($usrCheck === 0 && $relCheck === 0) return redirect ('/admin/users');
        }      
        return redirect('/admin/users');        
    }

    public function destroyRole(object $user)
    {
        if($user->role === 'admin' || $user->role === 'rekam_medis')
            $user->staff->setKeyName('NIP_Staff')->delete();
        else if($user->role === 'dokter')
            $user->dokter->setKeyName('NIP_Dokter')->delete();          
        else
            $relation = ($user->apoteker)->setKeyName('NIP_Apoteker')->delete();
        return 0;
    }

    public function destroy($username)
    {
        $user = User::where('username', $username)->first();
        $this->destroyRole($user);
        $user->delete();
        return redirect('/admin/users');
    }

    // Update By User
    public function updateByUser(Request $request, $username)
    {
        $user = (User::where('username', $username)->first());
        if($request->oldPassword === null)
        {
            $user->role = $request->role;
            $user->save();
            return redirect('/{{$user->role}}/profile');
        }    
        else if($request->oldPassword != null && $user->role === $request->role)
        {
            $this->validate($request, 
            [
                'newPassword' => ['required', 'string', 'min:6', 'confirmed'],
            ]);
            if((Hash::check($request->oldPassword, $user->password)) && $request->oldPassword != $request->newPassword)
            {
                $user->fill([
                    'password' => Hash::make($request->newPassword)
                ])->save();
                $request->session()->flash('success', 'Password changed');
                return redirect('/{{$user->role}}/profile');
            } else {
                $request->session()->flash('error', 'Password does not match');
                return redirect('/{{$user->role}}/profile');
            }
        }  
    }
}
