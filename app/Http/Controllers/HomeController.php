<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function admin()
    {
        return view('admin');
    }

    public function dokter()
    {
        return view('dokter');
    }

    public function rekamMedis()
    {
        return view('rekamMedis', ['view' => 'dashboard']);
    }

    public function apoteker()
    {
        return view('apoteker', ['view' => 'dashboard']);
    }

    public function root()
    {
        $role = Auth::user()->role;
        if($role === 'admin')
            return redirect('/admin');
        else if($role === 'dokter')
            return redirect('/dokter');
        else if($role === 'rekam_medis')
            return redirect('/rekmed');
        else if($role === 'apoteker')
            return redirect('/apotek');
        return redirect('/login');
    }
}
