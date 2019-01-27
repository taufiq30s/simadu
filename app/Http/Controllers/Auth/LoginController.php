<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'username';
    }

    /**
     * The user has been authenticated.
     * Method copied from "Illumunate\Foundation\Auth\AuthenticateUsers.php"
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */

    protected function authenticated($request, $user)
    {
        if($user->role === 'admin') return redirect('admin');
        else if($user->role === 'dokter') return redirect('dokter');
        else if($user->role === 'rekam_medis') return redirect('rekmed');
        else if($user->role === 'apoteker') return redirect('apotek');
        else return redirect('/');
    }
}
