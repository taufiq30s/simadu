<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Validator;
use Brotzka\DotenvEditor\DotenvEditor;

class ConfigController extends Controller
{
    protected function remDoubleQuote($cnf)
    {
        return trim($cnf, '"');
    }
    public function index()
    {
        $env = new DotenvEditor();
        $conf = $env->getContent();
        $conf['INSTANCE_NAME'] = $this->remDoubleQuote($conf['INSTANCE_NAME']);
        $conf['INSTANCE_ADDRESS'] = $this->remDoubleQuote($conf['INSTANCE_ADDRESS']);
        return view('/admin/config', ['conf' => $conf]);
    }

    protected function validateHost(array $data)
    {
        $validate1 = Validator::make($data, [
            'dbHost' => ['required', 'ip']
        ]);
        if($validate1->fails())
        {
            unset($validate1);
            return Validator::make($data, [
                'dbHost' => ['required', 'url'],
            ]);
        }
        else {
            return $validate1;
        }
    }

    protected function validateInput(array $data)
    {
        return Validator::make($data, [
        'namaPuskesmas' => ['required', 'string'],
        'alamatPuskesmas' => ['required', 'string'],
        'dbUser' => ['required', 'string'],
        'dbName' => ['required', 'string']]);
    }

    public function apply(Request $req)
    {
        $this->validateInput($req->all())->validate();
        $this->validateHost($req->all())->validate();

        // Set null from dbPassword to empty string
        if($req->dbPass === null) $req->dbPass = "";

        // Applying new env configuration
        $env = new DotenvEditor();
        $env->changeEnv([
            'INSTANCE_NAME' => '"'.$req->namaPuskesmas.'"',
            'INSTANCE_ADDRESS' => '"'.$req->alamatPuskesmas.'"',
            'DB_HOST' => $req->dbHost,
            'DB_PORT' => $req->dbPort,
            'DB_USERNAME' => $req->dbUser,
            'DB_PASSWORD' => $req->dbPass,
            'DB_DATABSE' => $req->dbName
        ]);

        // // Applying debug mode
        if(isset($req->devMode))
            $env->changeEnv(['APP_DEBUG' => true]);
        else
            $env->changeEnv(['APP_DEBUG' => false]);
        
        return redirect('/admin/config');
    }
}
