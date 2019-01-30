<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use App\User;
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
        return view('admin/register');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255', 'unique:users,username'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'role' => ['required','not_in:Silahkan Pilih...'],
        ]);
    }

    protected function store(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->store($request->all())));
        return redirect('/admin/users');
    }

    public function editByAdmin($username)
    {
        $user = (User::where('username',$username)->first());
        $now = \Auth::user()->username;
        return view('admin/edit', ['user' => $user, 'userNow' => $now]);
    }

    public function updateByAdmin(Request $request, $username)
    {
        $user = (User::where('username', $username)->first());
        if(($username === 'admin' && $request->password === null) || ($request->role === $user->role) && $request->password === null)
            return redirect('/admin/users');
        else if($request->role === $user->role) {
            $this->validate($request, ['password' => 'required|string|min:6|confirmed']);
            $user->password = Hash::make($request->password);
            $user->save();
        }
        else if($request->role != $user->role) {
            if($request->password != null) {
                $this->validate($request, ['password' => 'required|string|min:6|confirmed']);
                $user->password = Hash::make($request->password);
            }            
            $user->role = $request->role;
            $user->save();
        }
        return redirect('/admin/users');        
    }

    public function destroy($username)
    {
        $user = User::where('username', $username)->first();
        $user->delete();
        return redirect('/admin/users');
    }

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
